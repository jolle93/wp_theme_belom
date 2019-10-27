<?php

add_action('wp_enqueue_scripts','bm_enqueue_styles');

function bm_enqueue_styles() {
	$parten_style = 'flat-style';

	wp_enqueue_style($parten_style, get_template_directory_uri() . '/style.css');
	wp_enqueue_style('flat-child-overrides', '/wp-content/themes/wp_theme_belom/flat-child/assets/css/overrides.css');
}