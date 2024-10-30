<?php
/*
Plugin Name: sxss Buddypress User Shortcode
Plugin URI: http://sxss.info
Description: Shortcode returns the number of users in posts, pages and widgets.
Author: sxss
Version: 1
*/

function sxss_bp_user_shortcode()
{
	return bp_get_total_site_member_count();
}

add_shortcode( 'bpmembers', 'sxss_bp_user_shortcode' );
add_filter('widget_text', 'do_shortcode');
?>