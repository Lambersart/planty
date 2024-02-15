<?php
/**
** activation theme
**/
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
 wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}


add_filter( 'wp_nav_menu_items', 'ajoutadmin', 10, 2 );
function ajoutadmin( $items, $args ) {
    if (is_user_logged_in() ) {
        $items .= '<li><a href="/wp-admin">Admin</a></li>';
    }
    return $items;
}
