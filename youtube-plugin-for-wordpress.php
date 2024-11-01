<?php
/*
Plugin Name: Youtube Plugin For Wordpress
Plugin URI: 
Description: Provides a simple way to embed youtube videos in wordpress posts. Plugin designed to use minimum of resources.
Version: 1.0
Author: Adrian Ianculescu
Author URI: 
License: GPLv2 or later
*/

function youtube_plugin_for_wordpress_func( $atts ) {

	$center = true;

	extract( shortcode_atts( array(
		'width' => '560',
		'height' => '349',
		'id' => null
	), $atts ) );

	if ($id == null) return '';
	
	$res = '<iframe title="YouTube video player" width="' . $width . '" height="' . $height . '" src="http://www.youtube.com/embed/' . $id . '?hd=1" frameborder="0" 	allowfullscreen></iframe>';
	
	if (isset($center) && $center == true) 
		$res = '<div style="width:' . $width . 'px;margin: 0 auto;">' . $res . '</div>';
	
	return $res;
}

add_shortcode( 'youtube', 'youtube_plugin_for_wordpress_func');
