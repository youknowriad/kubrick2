<?php

function kubrik2_theme_support()  {
	// Adding support for core block visual styles.
	add_theme_support( 'wp-block-styles' );
}
add_action( 'after_setup_theme', 'kubrik2_theme_support' );