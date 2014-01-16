<?php

add_action( 'init', 'child_theme_setup' );

function child_theme_setup() {
   /* This theme uses wp_nav_menu() in three locations. */
	register_nav_menus( array(
		'top' => __( 'Top Navigation', 'Top Navigation' ),
	) );
}


/** Remove Query strings from Static Resources. */
function _remove_script_version( $src ){
    $parts = explode( '?', $src );
    return $parts[0];
}
add_filter( 'script_loader_src', '_remove_script_version', 15, 1 );
add_filter( 'style_loader_src', '_remove_script_version', 15, 1 );


?>