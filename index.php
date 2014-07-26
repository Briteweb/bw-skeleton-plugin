<?php
/**
 * Plugin Name: BW Skeleton Plugin
 * Plugin URI: http://briteweb.com
 * Description: BW Skeleton Plugin
 * Version: 1.0.0
 * Author: #BRITEWEB
 * Author URI: http://briteweb.com
 * License: GPL2
 * Copyright: #BRITEWEB
 */

// Don't allow the plugin to be loaded directly
if ( ! function_exists( 'add_action' ) ) {
	echo "Please enable this plugin from the WordPress admin area.";
	exit;
}

// Initialize Composer Autoload
if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) && version_compare( phpversion(), '5.3', '>=' ) )
	require_once( dirname( __FILE__ ) . '/vendor/autoload.php' );


// Initialize plugin
if( class_exists('BWSkeletonPlugin\\Plugin') )
	\BWSkeletonPlugin\Plugin::init( __FILE__ );

