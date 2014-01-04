<?php //Opening PHP tag

add_action( 'init', 'child_theme_setup' );

function child_theme_setup() {
   /* This theme uses wp_nav_menu() in three locations. */
	register_nav_menus( array(
		'top' => __( 'Top Navigation', 'Top Navigation' ),
	) );
}

?> //Closing PHP tag