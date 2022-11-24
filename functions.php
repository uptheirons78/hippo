<?php
/**
 * Hippo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Hippo
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! defined( 'HIPPO_VERSION' ) ) {
	define( 'HIPPO_VERSION', '1.0.0' );
}

define( 'TEMPLATE_DIR', get_template_directory( ) );

/**
 * Hippo theme setup.
 */
require TEMPLATE_DIR . '/inc/hippo-setup.php';

/**
 * Hippo content width.
 */
require TEMPLATE_DIR . '/inc/hippo-content-width.php';

/**
 * Enqueue scripts and styles.
 */
require TEMPLATE_DIR . '/inc/hippo-enqueue-scripts.php';

/**
 * Custom template tags for this theme.
 */
require TEMPLATE_DIR . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require TEMPLATE_DIR . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require TEMPLATE_DIR . '/inc/customizer.php';

