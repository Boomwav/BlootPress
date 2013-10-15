<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package BlootPress
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function blootpress_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'blootpress_jetpack_setup' );
