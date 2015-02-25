<?php

/*
 **************************************
 * Zweck/purpose: Robots aus den Logdaten anzeigen - mit Sortieroptionen
 * administration/logs-bots.inc.php
 * adapted from administration/logs.inc.php
 * by ib       2007-02-28
* -------------
 * last modified: by ib       13.02.2010
 * -------------
 *
 * project:        chCounter
 * version:        3.1.3
 * copyright:        © 2005 Christoph Bachner
 *               since 2006-21-12 Bert Koern
 * license:        GPL vs2.0 or higher [ see docs/license.txt ]
 * contact:        http://chCounter.org/
 *
 **************************************
*/


if( !defined( 'CHC_ACP' ) )
{
        header( 'Location: http://'. $_SERVER['SERVER_NAME'] . dirname( $_SERVER['PHP_SELF'] ) .'/index.php' );
        exit;
}

$arr = array("ip","host","user_agent","timestamp","DESC","ASC");
$arr1 = array("DESC","ASC");

if( !isset( $_GET['gruppe'] ) || $_GET['gruppe'] == "")
{
      $gruppe = 'timestamp';
}
if( isset( $_GET['gruppe'] ) && in_array($_GET['gruppe'], $arr) )
{
      $gruppe = $_GET['gruppe'];
}


if( !isset( $_GET['mysort'] ) || $_GET['mysort'] == "")
{

if( !empty( $_CHC_CONFIG['anordnung_log_eintraege'] ))
{
$mysort  = $_CHC_CONFIG['anordnung_log_eintraege'] ;
}
}


if( isset( $_GET['mysort'] ) &&  in_array( $_GET['mysort'], $arr1) );
{
  $mysort  =  $_GET['mysort'];
}


$max = $_CHC_DB->query(
        'SELECT COUNT(nr) as anzahl
        FROM `'.CHC_TABLE_LOG_DATA.'`
        WHERE  is_robot =1 '
);
$max = $_CHC_DB->fetch_assoc( $max );
$max_seiten = @ceil( intval( $max['anzahl'] ) / $_CHC_CONFIG['anzahl_pro_logseite'] );
$seite = isset( $_GET['p'] )
        ? (int) $_GET['p']
        : ( $_CHC_CONFIG['anordnung_log_eintraege'] == 'DESC' ? 1 : $max_seiten );
$start = ( $seite - 1 ) * $_CHC_CONFIG['anzahl_pro_logseite'];
   // added by ib   WHERE is_robot =1  +  referer entfernt
$logdata = $_CHC_DB->query(
        'SELECT
                nr,
                ip,
                host,
                user_agent,
                 seitenaufrufe,
                timestamp

        FROM `'. CHC_TABLE_LOG_DATA.'`
        WHERE is_robot =1
        ORDER BY  '. $gruppe.' '. $_GET['mysort'].'
        LIMIT '.$start.' , '.$_CHC_CONFIG['anzahl_pro_logseite']
);

if( $max_seiten > 1 )
{
        print "<div style=\"margin-left: auto; margin-right: auto; width:95%; text-align:center\">\n";
        for( $i = 1; $i < $seite; $i++ )
        {    // added by ib - und alle weiteren Vorkommen
                print '<a href="index.php?cat=bots&amp;gruppe='. $gruppe.'&amp;mysort='. $mysort.'&amp;p='. $i .'">'. $i ."</a> | \n";
        }
        print '<span style="font-size: 9pt; font-weight: bold;">'. $i ."</span>\n";
        for( $i = $seite + 1; $i < $max_seiten + 1; $i++ )
        {
                print ' | <a href="index.php?cat=bots&amp;gruppe='. $gruppe.'&amp;mysort='. $mysort.'&amp;p='. $i .'">'. $i ."</a>\n";
        }
        print "</div>\n<br />\n<br />\n";
}
?>

<div style="margin-left: auto; margin-right: auto; width:95%; text-align:center">
<span style="margin-bottom:0px;">Gesamt-Eintr&auml;ge: <?php echo $max['anzahl'];?></span><br>

<form action="index.php" method="get" >
<b>Sortierung nach:</b>&nbsp;&nbsp;&nbsp;
<input type="Radio" name="gruppe" value="ip" <?=(isset($gruppe) && $gruppe == 'ip')?'checked="checked"':'' ?> />
 IP &nbsp;&nbsp;
<input type="Radio" name="gruppe" value="host" <?=(isset($gruppe) && $gruppe == 'host')?'checked="checked"':'' ?> /> Host &nbsp;&nbsp;
<input type="Radio" name="gruppe" value="user_agent"> User-Agent &nbsp;&nbsp;
<input type="Radio" name="gruppe" value="timestamp" <?=(isset($gruppe) && $gruppe == 'timestamp')?'checked="checked"':'' ?> /> Datum &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
 <input type="hidden" name="cat" value="bots">
 <input type="Radio" name="mysort" value="ASC" <?=(isset($mysort) && $mysort == 'ASC')?'checked="checked"':'' ?> /> ASC &nbsp;&nbsp;
  <input type="Radio" name="mysort" value="DESC" <?=(isset($mysort) && $mysort == 'DESC')?'checked="checked"':'' ?> /> DESC &nbsp;&nbsp;
<input type="Submit" name="los" value="Los!"><br /><b>Aktuell gew&auml;hlt:&nbsp; <?php echo $gruppe;?></b>&nbsp;<?php echo $mysort;?>
</form>
</div>
<!-- end by ib-->

<table style="width: 95%; margin-left: auto; margin-right: auto; border: 1px solid #000000;" cellspacing="1" cellpadding="1">
 <tr class="row3">
  <td class="caption_table_log_data" style="width:7%;"><b><?php print $_CHC_LANG['No.']; ?></b></td>
  <td class="caption_table_log_data" style="width:15%"><b><?php print $_CHC_LANG['IP']; ?></b></td>
  <td class="caption_table_log_data" style="width:15%"><b><?php print $_CHC_LANG['Host']; ?></b></td>
  <td class="caption_table_log_data" style="width:21%"><b><?php print $_CHC_LANG['user_agent']; ?></b></td>
 <!-- geändert by ib-->
<!--
<td class="caption_table_log_data" style="width:22%"><b><?php //print $_CHC_LANG['referer']; ?></b></td>
    -->
  <td class="caption_table_log_data" style="width:8%;"><b><?php print $_CHC_LANG['page_views']; ?></b></td>
  <td class="caption_table_log_data" style="width:12%"><b><?php print $_CHC_LANG['date_time']; ?></b></td>
 </tr>
<?php

$i = 0;
while( $row = $_CHC_DB->fetch_assoc( $logdata ) )
{

  /*   if( !empty( $row['referrer'] ) )
     {
                $refhost = parse_url( $row['referrer'] );
                $refhost = isset( $refhost['host'] ) ? $refhost['host'] : $row['referrer'];
                if( strlen( $refhost ) > 25)
                {
                                $refhost = substr( $refhost, 0, 22 ) .'...';
                }
                $referrer = '<a href="'. htmlentities( $row['referrer'] ) .'" target="_blank">'. chC_str_prepare_for_output( $refhost ) .'</a>';
        }
        else
        {
                $referrer = '';
        }
   */
       // added by ib 23.02.2007

       // end
        print '<tr class="row'. ( !( $i % 2 ) ? 1 : 2 ) ."\">\n"
                ."<td>\n"
                .' <a href="visitor_details.php?user_nr='. $row['nr'] .'" onclick="window.open( \'visitor_details.php?user_nr='. $row['nr'] .'\', \'visitor_details\', \'width=710, height=600, screenX=0, screenY=0, resizable=yes, scrollbars=yes\' ); return false;" target="visitor_details" title="'. $_CHC_LANG['visitor_details'] .'">'. $row['nr'] ."</a>\n"
                ."</td>\n"
                ."<td>\n"
                .' <a target="blank" href="http://whois.domaintools.com/'. chC_str_prepare_for_output( $row['ip'] ) .'">'. chC_str_prepare_for_output( $row['ip'] ) ."</a>\n"
                ."</td>\n"
                .'<td>'. chC_str_prepare_for_output( $row['host'], 35 ) ."</td>\n"
                .'<td>' .chC_str_prepare_for_output( $row['user_agent'], 35) ."</td>\n"
               // .'<td>'. $referrer ."</td>\n"
                .'<td style="text-align:right:">'. $row['seitenaufrufe'] ."</td>\n"
                ."<td>\n"
                .' '. chC_format_date( $_CHC_LANG['CONFIG']['DATE_FORMATS']['common_date_format:complete'], $row['timestamp'] )
                .' <a href="visitor_details.php?user_nr='. $row['nr'] .'" onclick="window.open( \'visitor_details.php?user_nr='. $row['nr'] .'\', \'visitor_details\', \'width=710, height=600, screenX=0, screenY=0, resizable=yes, scrollbars=yes\' ); return false;" target="visitor_details">'
                .'<img src="../images/details.png" width="8" height="8" border="0" alt="" title="'. $_CHC_LANG['visitor_details'] ."\" /></a>\n</td>\n"
                ."</tr>\n";
        $i++;
}

if( $_CHC_DB->num_rows( $logdata ) == 0 )
{
        print "<tr class=\"row1\">\n<td colspan=\"7\" style=\"text-align:center\">".$_CHC_LANG['no_visitors_logged_yet']."</td>\n</tr>\n";
}

?>
</table>
<br />
<?php
if( $max_seiten > 1 )
{
        print "<div style=\"margin-left: auto; margin-right: auto; width:95%; text-align:center\">\n";
        for( $i = 1; $i < $seite; $i++ )
        {    // added by ib - und alle weiteren Vorkommen
                print '<a href="index.php?cat=bots&amp;gruppe='. $gruppe.'&amp;mysort='. $mysort.'&amp;p='. $i .'">'. $i ."</a> | \n";
        }
        print '<span style="font-size: 9pt; font-weight: bold;">'. $i ."</span>\n";
        for( $i = $seite + 1; $i < $max_seiten + 1; $i++ )
        {
                print ' | <a href="index.php?cat=bots&amp;gruppe='. $gruppe.'&amp;mysort='. $mysort.'&amp;p='. $i .'">'. $i ."</a>\n";
        }
        print "</div>\n<br />\n<br />\n";
}
?>