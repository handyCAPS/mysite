<?php

define(THEMEPATH, get_stylesheet_directory_uri());

// enqueuing all the styles 

function tido_styles() {
	// stylesheets
	wp_register_style('screen', THEMEPATH . '/stylesheets/screen.css', array(), null );
	wp_register_style('font-awesome', THEMEPATH . '/stylesheets/font-awesome.min.css', array(), null );

	wp_enqueue_style('screen');
	wp_enqueue_style('font-awesome');

	// javascript
	wp_register_script('jquery_local', THEMEPATH . '/js/jquery-1.10.2.min.js', array(), null, true );
	wp_register_script('scrollto', THEMEPATH . '/js/scrollTo.js', array(), null, true );
	wp_register_script('localscroll', THEMEPATH . '/js/localScroll.js', array('scrollto'), null, true );
	wp_register_script('timjs', THEMEPATH . '/js/tim.js', array(), null, true );

	wp_enqueue_script('jquery_local');
	wp_enqueue_script('scrollto');
	wp_enqueue_script('localscroll');
	wp_enqueue_script('timjs');
}

add_action('wp_enqueue_scripts', 'tido_styles' );