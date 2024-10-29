<?php
/*
Plugin Name: bbp buddypress profile information
Plugin URL: http://www.rewweb.co.uk/bbp-profile-information/
Description: adds up to 4 fields from buddypress to the bbp user profile and displays any combination of these under the authors avatar in topics and replies
Version: 1.3
Author: Robin Wilson
Author URI: http://www.rewweb.co.uk/


*/


/*******************************************
* global variables
*******************************************/

// load the plugin options
$rbi_options = get_option( 'rbi_settings' );

if(!defined('RBI_PLUGIN_DIR'))
	define('RBI_PLUGIN_DIR', dirname(__FILE__));




/*******************************************
* file includes
*******************************************/

include(RBI_PLUGIN_DIR . '/includes/settings.php');
include(RBI_PLUGIN_DIR . '/includes/display.php');






