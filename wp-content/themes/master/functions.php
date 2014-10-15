<?php
/**
* @package   Master
* @author    YOOtheme http://www.yootheme.com
* @copyright Copyright (C) YOOtheme GmbH
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

// check compatibility
if (version_compare(PHP_VERSION, '5.3', '>=')) {

	// bootstrap warp
	require(__DIR__.'/warp.php');
}


/* CUSTOM LOGIN */
function login_scripts() {
	echo '<link rel="stylesheet" type="text/css" href="/assets/css/login.css" />';
}
add_action('login_head', 'login_scripts');
 
function login_logo_url() {
	// Change to client's info if necessary
	// return get_bloginfo('url');
	return 'http://grayscale.com.hk';
}
add_filter('login_headerurl', 'login_logo_url');

function login_logo_title() {
	// Change to client's info if necessary
	// return get_bloginfo('name');
	return 'Grayscale Limited Web Design Hong Kong';
}
add_filter( 'login_headertitle', 'login_logo_title' );