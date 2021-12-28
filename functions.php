<?php

function kubrik2_theme_support()  {
	// Adding support for core block visual styles.
	add_theme_support( 'wp-block-styles' );
}
add_action( 'after_setup_theme', 'kubrik2_theme_support' );

// This is useless, but it's just a way to avoid a bug
// in the theme repository submission process
// where at least one i18n string is required.
__( 'Hello, World!', 'kubrick2' );