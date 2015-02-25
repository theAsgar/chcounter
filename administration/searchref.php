<?php
// modified by Inge aka igel  -  get the result position
     if( !empty( $row['referrer'] ) )
     {
                $refhost = parse_url( $row['referrer'] );
                $refhost = isset( $refhost['host'] ) ? $refhost['host'] : $row['referrer'];
                if( strlen( $refhost ) > 25)
                {
                                $refhost = substr( $refhost, 0, 22 ) .'...';
                }
//start g_edit
$g_refhost = chC_str_prepare_for_output( $refhost ); //eg www.google.de
$g_regex = "/^www\.google(?:\.[a-z]{2,5}){1,2}$/i"; //regex for www.google.de www.google.com and www.google.com.ar etc.
$g_keywords = "";
$pos = "";
if(preg_match($g_regex,$g_refhost)) //if google referrer
{
$g_url = $row['referrer']; //whole url

if(preg_match('#[?&]cd=(.*?)(?:&|$)#si', $g_url, $pos))  // position on Google result page
{
$position = ' [' . $pos[1] . '] ';    
}
else {
    $position = "";    
}
if(preg_match('#[?&]q=(.*?)(?:&|$)#si', $g_url, $g_keywords)) //can we find keywords?
  {
$g_label = $g_keywords[1]; //$g_label = 'foo+bar+"foobar"'
$g_label = str_replace("%2B","+",$g_label);
$g_label = str_replace("+"," ", $g_label);
$g_label = rawurldecode($g_label); //encode %20 to space etc.
// includes position if found
$referrer = '<a href="'. htmlentities( $row['referrer'] ) .'" target="_blank">Google: ' .$position. $g_label . '</a>';
  } else { //if couldnt find keywords

                $referrer = '<a href="'. htmlentities( $row['referrer'] ) .'" target="_blank">'. chC_str_prepare_for_output( $refhost ) . '</a>';
         } //end couldnt find keywords
} else  { //if no google-referrer
                $referrer = '<a href="'. htmlentities( $row['referrer'] ) .'" target="_blank">'. chC_str_prepare_for_output( $refhost ) . '</a>';
        } //end if no google referrer
     }
        else //if no referrer
        {
                $referrer = '';
        }
?>
