<?php
/**
 * Moesia-child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package moesia-child
 */

add_action( 'wp_enqueue_scripts', 'moesia_parent_theme_enqueue_styles' );

/**
 * Enqueue scripts and styles.
 */
function moesia_parent_theme_enqueue_styles() {
	wp_enqueue_style( 'moesia-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'moesia-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		array( 'moesia-style' )
	);

}
