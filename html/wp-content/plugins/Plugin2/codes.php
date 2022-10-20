<?php
/**
 * Plugin Name: Saludo
 * Plugin URI: 
 * Description: Este plugin cambia el saludo
 * Version: 1.0.0
 * Author: Lorenzo
 * Author URI:
 * License: GPL2
 */

// Reemplazar el saludo

function reemplazar_hola( $wp_admin_bar ) {
    $my_account=$wp_admin_bar->get_node( 'my-account' );
    $newtitle = str_replace( 'Hola, ', 'Bienvenido gran creador ', $my_account->title );
    $wp_admin_bar->add_node( array(
        'id' => 'my-account',
        'title' => $newtitle,
    ) );
}
add_filter( 'admin_bar_menu', 'reemplazar_hola',25 );