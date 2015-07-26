<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
function enqueue_parent_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
    }

if ( function_exists('register_sidebar') ) {
    register_sidebar(array(
        'name' => 'Custom Sidebar',
        'id' => 'custom-sidebar'
    ));
}
?>