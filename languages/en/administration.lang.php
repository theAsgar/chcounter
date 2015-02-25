﻿<?php

/*
 **************************************
 *
 * languages/en/administration.lang.php
 * -------------
 * last modified:	2007-01-13
 * -------------
 *
 * project:	chCounter
 * version:	3.1.3
 * copyright:	© 2005 Christoph Bachner
 *               since 2006-21-12 Bert Koern
 * license:	GPL vs2.0 or higher [ see docs/license.txt ]
 * contact:	http://chCounter.org/
 *
 **************************************
*/


$_CHC_LANG = !isset( $_CHC_LANG ) ? array() : $_CHC_LANG;
$_CHC_LANG = array_merge( $_CHC_LANG, array(



	/* main (./administration/index.php) */
	'administration' => 'Admin Control Panel',
	'logs' => 'Log data',
	'news' => 'News',
	'help' => 'Help &amp; Contact',
	'logout' => 'Logout',
	'statistics' => 'Statistics',
	'settings' => 'Settings',
	'login' => 'Login',
	'logout_successful' => 'Logout successful.',
	'logout_not_successful' => 'Logout failed.',
	'logout_affirmation' => 'Please click on the button to log out.<br />The optional cookie for automatical logins will be deleted (if it was set before).',
	'security_alert_install_directory' => '<span style="color: #FF0000">Important:</span><br />Please delete the "install" directory immediately to avoid possible security violations.',
	'welcome_message' => 'Welcome to the chCounter Admin Control Panel!',


	/* News (./administration/new.inc.php) */
	'error_contacting_news_file' => 'Error: Could not obtain the news file from http://chcounter.org',
	'no_news_available_at_present' => 'There is no news available at present.',


	/* Logs (./administration/logs.inc.php) */
	'date_time' => 'Date, time',
	'visitor_details' => 'Visitor details (Admin Control Panel)',
	'no_visitors_logged_yet' => 'No visitors stored in database yet.',


	/* detailed user information (./administration/visitor_details.php) */
	'browser\'s_language_settings' => 'Browser\'s language settings',
	'not_available' => 'not available',
	'preferred:' => 'preferred:',
	'javascript' => 'JavaScript',
	'js_available_and_activated' => 'available and activated',
	'js_not_available_or_deactivated' => 'not activated or not available',
	'visited_pages' => 'Visited pages',
	'close_window' => 'Close window',

	/* Settings */
	'general_settings' => 'General',
	'global_settings' => 'Global settings',
	'user_management' => 'Account management',
	'counter' => 'Counter',
	'counter_settings' => 'Settings',
	'edit_counter_records' => 'Change counter values',
	'general' => 'Common',
	'(de)activate_statistics' => '(De)Activate statistics',
	'database_operations:' => 'Database operations:',
	'reset_statistics' => 'Reset statistics',
	'data_cleanup' => 'Data cleanup',
	'lists:' => 'Lists:',
	'blacklists' => '"Blacklists"',
	'exclusion_lists' => '"Ignore lists"',
	'hideout_lists' => '"Hideout lists"',
	'statistics_display' => 'Statistics display:',
	'access_authorisations' => 'Access authorisations',
	'top/latest' => 'The top/latest &hellip;',
	'referrers,_search_engines_and_keywords' => 'Referrers, search engines and keywords',
	'visitors_details' => 'Visitors details',
	'all_lists' => 'All lists',
	'pages_and_currently_online' => 'Pages &amp; currently online',
	'wrong_password' => 'The password is wrong!',
	'configuration_updated' => 'The settings were updated.',
	'please_fill_out_each_required_field' => 'Please fill out each field!',
	'settings_description_guest_login' => 'Using the guest account other users than the administrator are able to view the statistics, too, if they are disabled for "normal" users. Leaving the fields blank deactivates the guest account.',
	'settings_description_admin_login' => 'Here you can change your user name and your password. If you do not want to change the password, leave every password field blank.',
	'save_settings' => 'Save settings',
	'administrator' => 'Administrator',
	'guest_login' => 'Guest account',
	'name:' => 'Name:',
	'old_password:' => 'Old password:',
	'new_password:' => 'New password:',
	'new_password_(repetition):' => 'New password:<br />(Repetition)',
	'general_counter_settings' => 'General counter settings',
	'URLs' => 'URLs',
	'hp_url' => 'Website URL:',
	'url_of_counter_directory' => 'URL of the chCounter directory:',
	'charset' => 'Charset',
	'homepage_charset:' => 'Website charset:',
	'default_counter_visibility:' => 'Visibility of the counter (if not specified on site):',
	'counter_status_statistic_pages:' => 'Counter status at the statistic pages:',
	'counting_settings' => 'Counting behaviour',
	'description_blocking_mode' => 'Do not recount a visitor:',
	'for_x_seconds' => 'for %s seconds',
	'until_the_end_of_day' => 'until the end of day',
	'description_user_online_timespan' => 'Time without action during which the visitor is showed as "online":<br />(in sec.)',
	'time_settings' => 'Time settings',
	'time_zone' => 'Time zone:',
	'enable_daylight_saving_time:' => 'Daylight saving time in effect:',
	'use_admin_blocking_cookie' => 'Prevent the administrator from being counted (via cookie):',
	'do_not_count_robots' => 'Do not count any robot (e.g. spiders of search engines):',
	'language_settings' => 'Language settings',
	'default_language' => 'Default language of counter and statistics:',
	'administration_language' => 'Language of the Admin Control Panel:',
	'yyyy-mm-dd' => 'yyyy-mm-dd', // d=day, m=month, Y=Year  | please do not change the positions, only translate the abbreviations, if necessary
	'simultaneously_online' => 'Simultaneously online',
	'delete_log_entries_after:' => 'Delete the <a href="index.php?cat=logs">log entries</a> after:',
	'delete_log_entries_after:unit:hours' => 'hours',
	'delete_log_entries_after:unit:days' => 'days',
	'ignore_strings_with_a_length_less_than:' => 'Ignore words with less than:',
	'pages_statistic_page_titles' => 'Pages statistic: Page titles',
	'description_(de)activate_search_for_page_titles' => 'The counter searches per default within the file into which the counter is included for the HTML page title  (see <i>install/readme_en.txt</i> for further details). But as this may cause a not to be underestimated server load, the searching for a page title may be deactivated.',
	'search_for_page_titles:' => 'Search for a page title:',
	'pages_statistic_query_string_cleanup' => 'Pages statistic: purge of the query string',
	'description_page_query_string_cleanup' => 'The so called "query string" (e.g. "<i>?variablename1=value1&amp;<br />variablename2=value&amp;&hellip;</i>") may be completely or partially removed before the storing to avert needless entries and keep the statistic clear.<br /><br />Example: from the page "<i>index.php?category=downloads&amp;sort=ascending</i>" the variable "<i>sort</i>" may be removed, result: "<i>index.php?category=downloads</i>".<br />The installation routine of the counter sets here by default some superfluous variables of the statistics section.',
	'keep_the_complete_query_string' => 'keep the complete query string',
	'remove_the_complete_query_string' => 'remove the complete query string',
	'only_keep_the_following_variables:' => 'keep only the following variables:',
	'remove_the_following_variables:' => 'remove the following variables:',
	'query_string_variables:' => 'Query string variables (separated by \'; \'):',
	'purge_page_entries_now' => 'Purge the database saved pages now as well on account of above settings.<br /><b>Attention:</b> This action is irreversible!',
	'referrers_statistic_query_string_cleanup' => 'Referrers statistic: purge of the query string',
	'description_remove_referrer_query_string' => 'The query string may be removed as well from the referrers. The <i>complete</i> query string will be removed, usually this is neither needed nor suggested.',
	'remove_query_string:' => 'remove query string:',
	'description_blacklists' => 'If a visitor matches with one of these lists, the visitor will not be counted at all.<br />One entry per line, a % functions as wildcard.',
	'IPs:' => 'IPs:',
	'hosts:' => 'Hosts:',
	'user_agents:' => 'User agents:',
	'referrers:' => 'Referrers:',
	'description_exclusion_lists' => 'The entries listed here will not be stored. <br />One entry per line, a % functions as wildcard.',
	'pages_(relative_from_hp_root):' => 'Pages (path starting from the specified website URL):',
	'search_engines:' => 'Search engines:',
	'search_keywords:' => 'Search keywords:',
	'search_phrases:' => 'Search phrases:',	
	'screen_resolutions:' => 'Screen resolutions:',
	'description_hideout_lists' => 'Every entry stored in the database that matches with the corresponding list will not be displayed. As they are not removed from the database, they can be displayed again whenever you want.<br />One entry per line, a % functions as wildcard.',
	'browsers:' => 'Browsers:',
	'operating_systems:' => 'Operating systems:',
	'robots:' => 'Robots:',
	'referring_domains:' => 'Referring domains:',
	'description_(de)activate_statistics' => 'Single statistics may be deactivated, e.g. to reduce the required disk space of the database (no new entries will be stored).<br /><b>Attention:</b> Deactivated are still visible in the statistics section. To remove them from the statistic pages, the corresponding lines in the templates files have to be deleted.<br /><br />The following statistics are <b>active</b>:',
	'log_data' => 'Log data',
	'user_agents,browsers,os,robots' => 'User agents/Browsers/Operating systems/robots',
	'pages_statistic' => 'Pages statistic',
	'countries_languages_hosts_statistic' => 'Countries/Languages/Host-TLDs',
	'search_engines_and_keywords' => 'Search engines &amp; Keywords',
	'reset_stats' => 'Reset statistics',
	'description_reset_stats' => 'The following statistics may be reset:',
	'reset_statistics_now' => 'Reset statistics now',
	'access_statistics' => 'Access statistics',
	'search_keywords_phrases' => 'Keywords/Search phrases',
	'visitors,page_views_per_day' => 'Visitors/Page views per day',
	'page_views_per_visitor' => 'Page views per visitor',
	'reset_confirmation' => 'Shall the selected statistics really be reset?',
	'statistics_were_reset' => 'The selected statistics were reset.',
	'countries_statistic' => 'Countries statistic',
	'languages_statistic' => 'Languages statistic',
	'hosts_statistic' => 'Hosts TLDs statistic',
	'check_all' => 'check all',
	'uncheck_all' => 'uncheck all',
	'general_cleanup' => 'General data cleanup',
	'description_general_cleanup' => 'In order to reduce the number of database queries obsolete data (log entries and temporary data of former visitors) is not deleted directly, but in certain intervals.<br />Here your can perform this cleanup independent from the interval timer - usually this is <u>not</u> necessary.',
	'perform_cleanup' => 'Perform database cleanup',
	'user_agents,referrers_cleanup' => 'Special cleanup of user agents and referrers',
	'description_user_agents,referrers_cleanup' => 'After some time many entries with only very few incidences can accrue in the database and use valuable disk space. These entries can be deleted and merged together to the entry \'others\' - the total statistic will not be distorted.',
	'regular_cleanup' => 'Regular cleanup of seldom entries:',
	'immediate_cleanup' => 'One-time &amp; immediate cleanup:',
	'type:' => 'Type:',
	'max_incidences:' => 'Maximum incidences:',
	'days_passed_since_last_incidence:' => 'Past days since last incidence:',
	'cleanup:type_and_number_of_entries' => "%1\$s (%2\$s entries overall)",
	'cleanup_performed' => 'Data cleanup was performed.',
	'cleanup_performed_(x_rows_deleted)' => 'Data cleanup was performed (%s entries were deleted).',
	'description_access_authorisations' => 'The following pages are only accessible for the administrator or guest account:',
	'referrers/referring_domains:common_settings' => 'Referrers/Referring domains: common settings',
	'hyperlink_URLs:' => 'Hyperlink URLs:',
	'number_of_displayed_entries:' => 'Number of displayed entries:',
	'abbreviate_referrers_after:' => 'Chop referrers after',
	'x_signs_(0_=_never)' => '%s signs (0 = never)',
	'(0_=_never)' => '(0 = never)',
	'abbreviation_sign:' => 'Abbreviation sign:',
	'force_wordwrap_after:' => 'Force wordwrap after',
	'settings_description_referrers,_search_engines_and_keywords' => '<i>The following settings apply to the category "<a href="../stats/index.php?cat=referrers">Referrers</a>" of the statistics section.</i>',
	'settings_description_latest_top' => '<i>The following settings apply to the "<a href="../stats/index.php">Main page</a>" of the statistics section.</i>',
	'top_...' => 'The top &hellip;',
	'latest_...' => 'The latest &hellip;',
	'settings_description_visitors_details' => '<i>The following settings apply to the category "<a href="../stats/index.php?cat=visitors_details">Visitors details</a>" of the statistics section.</i>',
	'settings_description_pages' => '<i>The following settings apply to the category "<a href="../stats/index.php?cat=pages">Pages</a>" of the statistics section.</i>',
	'show_page_title:' => 'Show the page title (if available):',
	'currently_online' => 'Currently online',
	'online_users_ip_format:' => "IP display:",
	'do_not_show_IPs' => 'show no IP at all',
	'force_wordwrap_of_page_name_after:' => 'Force word-wrap of the displayed page name after',
	'settings_description_logs' => '<i>The following settings apply to the category "<a href="./index.php?cat=logs">Log data</a>" of the Admin Control Panel.</i>',
	'entries_per_log_page:' => 'Entries per log page:',
	'display_the_entries_on_each_log_page:' => 'Display the entries on each log page:',
	'settings_description_all_lists' => '<i>The following settings apply to the "<a href="../stats/index.php?list_all">All Lists</a>" of the statistics section.</i>',
	'settings_description_access_statistics' => '<i>The following settings apply to the "<a href="../stats/index.php?cat=access_statistics">Access statistics</a>".</i>',
	'vertical-bar_diagramm_representation:' => 'Representation of the vertical-bar diagrams:',
	'description_vertical-bar_diagramm_representation:absolute' => 'according to the proportions',
	'description_vertical-bar_diagramm_representation:relative' => 'relative to the highest single value',
	'pages_statistic_data_source' => 'Pages statistic: data source',
	'description_pages_statistic_data_source' => 'Here you can define which sources should be used to detect the path of the requested pages (only when including the counter with PHP). Explanations of the possibilities can be found in the <a href="http://www.php.net/manual/en/reserved.variables.php#reserved.variables.server" target="_blank">PHP Manual</a>.',
	'use_PHP_SELF_or_REQUEST_URI:' => 'Use for the pages statistic:',
	'exclude_robots_from_the_javascript_statistic' => 'Exclude robots from the javascript statistic.',
	'entry_and_exit_pages' => 'Entry and exit pages',
	'the_requested_visitor_does_not_exist' => 'The requested visitor does not exist in the log data.',	
	'settings_description_downloads_and_hyperlinks' => '<i>The following settings apply to the category "<a href="../stats/index.php?cat=downloads_and_hyperlinks">Downloads &amp; hyperlinks</a>« of the statistics section.</i>',


	// help
	'contact' => 'Contact',
	'obtain_inclusion_code:' => 'Obtain inclusion code:',
	'PHP' => 'PHP',
	'JavaScript' => 'JavaScript',
	'description_support' => 'More informations and helps see on the chCounterhomepage&nbsp;<a href="http://chcounter.org/" target="_blank"><b>http://chcounter.org</b></a><br /><br />If you need help or want to utter suggestions or critique, visit the <a href="http://phorum.excelhost.de/index.php?42" target="_blank"><b>chCounter-Forum</b></a>.<br /><br />Alternatively you can contact me via email to <a href="http://chcounter.org/index.php?s=kontakt" target="_blank">on this internetsite seen emailadress</a> .<br /><br /><font color="#FF0000">In case of a problem with the chCounter, please check <b>first</b> the <b>install guide</b>, <b>readme file</b> and <b>FAQs</b> and in the </font><font color="red"><a href="http://phorum.excelhost.de/index.php?42" target="_blank"><b><font color="#FF0000">chCounter-forum </font></b></a></font><font color="#FF0000"> for a solution.</font><br /><br />Info:<br />This chCounter based on the chCounter3.1.1 of Christoph Bachner<br /><br />greethings<br />Berti<br /><br />If you will translate the language-files of the chCounter - I like it.<br />Please contact me <a href="http://chcounter.org/index.php?s=kontakt" target="_blank">on this internetsite seen emailadress</a>',
	'counter_inclusion_via_PHP' => 'Counter inclusion via PHP',
	'description_php_include_code' => 'Here you can generate the PHP code you need to include the counter.',
	'important:' => 'Important:',
	'notice_file_extension' => 'Please keep in mind that usually the file extension must be ".php" in order that PHP code can be executed. See the install guide for a description how to execute PHP code within a ".html" file.',
	'notice_individual_template_and_indentation' => 'If an individual template is specified, the generated PHP code must never be indented!',
	'visible' => 'visible',
	'invisible' => 'invisible',
	'active' => 'active',
	'inactive' => 'inactive',
	'optional_page_title:' => 'Page title (optional):',
	'optional_individual_template:' => 'Individual template (optional):',
	'generate_php_code' => 'generate PHP code',
	'counter_inclusion_via_JavaScript' => 'Counter inclusion via JavaScript',
	'description_js_include_code' => 'Here you can generate the JavaScript code you need to include the counter.',
	'notice_advantages_of_including_with_php' => '<b>Whenever</b> possible, the counter should be included via PHP. If JavaScript is used, all visitors with deactivated JavaScript and all robots/spider cannot be counted.',
	'generate_JavaScript_code' => 'generate JavaScript code',
	'generated_code' => 'generated code:',
	
	
	// Downloads & Hyperlinks
	'download_feature_is_deactivated' => 'The download counting feature is deactivated!',
	'new_download' => 'Add a new download.',
	'upload_date' => 'Upload date',
	'name' => 'Name',
	'ID' => 'ID',
	'URL' => 'URL',
	'upload' => 'Upload',
	'last_download' => 'Last download',
	'edit' => 'edit',
	'delete' => 'delete',
	'to_the_overall_view' => '-&gt; To the overall_view.',
	'back_to_the_overall_view' => 'Back to the overall_view.',
	'download_successfully_inserted' => 'The Download was inserted successfully.',
	'download_could_not_be_inserted' => 'The Download could not be inserted.',
	'insert_a_new_download' => 'Insert a new download:',
	'please_fill_out_every_field' => 'Please fill out each field!',
	'insert_download' => 'Insert the download',
	'entry_successfully_updated' => 'The entry was updated successfully.',
	'entry_could_not_be_updated' => 'The entry could not be updated.',
	'could_not_find_the_requested_entry' => 'The requested entry could not be found.',
	'edit_a_download_entry' => 'Edit a download entry:',
	'number_of_downloads' => 'Number of downloads',
	'time_of_upload' => 'Time of uploads',
	'save_entry' => 'Save entry',
	'entry_successfully_deleted' => 'The entry was deleted successfully.',
	'entry_could_not_be_deleted' => 'The entry could not be deleted.',
	'entries_successfully_deleted' => 'The entries were deleted successfully.',
	'entries_could_not_be_deleted' => 'The entries could be deleted.',
	'delete_entry?' => 'Delete entry?',
	'delete_entry_now' => 'Delete entry now',
	'delete_the_selected_entries' => 'Delete the selected entries',
	'delete_entries' => 'Delete entries',
	'delete_many_entries_confirmation' => 'Do you want to finally delete the following entries?',
	'delete_all_displayed_entries_now' => 'Yes, delete now all the listed entries.',
	'HTML_Code' => 'HTML code',
	'general_URL_for_download_counting:' => 'General URL for linking to a download file:',
	'general_URL_for_hyperlink_counting:' => 'General URL of a hyperlink entry:',
	
	'hyperlink_feature_is_deactivated' => 'The hyperlink counting feature ist deactivated!',
	'new_hyperlink' => 'Insert a new download.',
	'added' => 'added',
	'last_click' => 'Last click',
	'insert_a_new_hyperlink' => 'Insert a new hyperlink:',
	'insert_hyperlink' => 'Insert the hyperlink',
	'hyperlink_successfully_inserted' => 'The hyperlink was inserted successfully.',
	'hyperlink_could_not_be_inserted' => 'The hyperlink could not be inserted.',
	'edit_a_hyperlink_entry' => 'Edit hyperlink entry:',
	'number_of_clicks' => 'Number of clicks',
	'number_of_clicks' => 'Total clicks'

) );

?>