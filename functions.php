<?php
/**
 * @author  Pressbooks <code@pressbooks.com>
 * @license GPLv2 (or any later version)
 */

add_action( 'after_setup_theme', function () {
	// TODO
} );

/**
 * Loads the child theme textdomain.
 */
function ticknor_child_theme_setup() {
    load_child_theme_textdomain( 'pressbooks-book', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'ticknor_child_theme_setup' );
