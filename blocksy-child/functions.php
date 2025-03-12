<?php
if (! defined('WP_DEBUG')) {
	die( 'Direct access forbidden.' );
}

// Enqueue the parent style.
add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
});

// Enqueue the custom JavaScript file.
add_action( 'wp_enqueue_scripts', function () {
    wp_enqueue_script(
        'toggle-menu-script', // A unique handle for the script
        get_stylesheet_directory_uri() . '/js/menu-toggle.js', // Path to the JS file in the child theme folder
        array(),   // Dependencies, if any (e.g., array('jquery') if you need jQuery)
        null,      // Version number 
        true       // Load in footer (recommended)
    );
});