<?php

/*
Plugin Name: Easy Profile Widget
Plugin URI: https://wordpress.org/plugins/easy-profile-widget
Description: Display User Profile Block with Gravatar on your sidebar widget
Version: 1.0
Author: phpbits
Author URI: http://codecanyon.net/user/phpbits/portfolio?ref=phpbits
*/

//avoid direct calls to this file
if ( !function_exists( 'add_action' ) ) {
    header( 'Status: 403 Forbidden' );
    header( 'HTTP/1.1 403 Forbidden' );
    exit();
}

/*##################################
	REQUIRE
################################## */
require_once( dirname( __FILE__ ) . '/core/functions.enqueue.php');
require_once( dirname( __FILE__ ) . '/core/functions.widget.php');
