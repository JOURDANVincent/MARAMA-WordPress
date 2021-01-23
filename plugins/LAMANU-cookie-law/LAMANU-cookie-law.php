<?php

/*
Plugin Name: LAMANU-cookie-law
Version: 0.1
Plugin URI: http://mywordpress.vj.localhost/.
Description: WordPress lemon plugin.
Author: BillyJim 
URI: http://mywordpress.vj.localhost/.
*/


function LAMANU_scripts()
{   
    // on récupère l'id de suivi mis en BDD
    $tracking_id['id'] = get_option('ID_de_suivi');

    // ajoute le script tarteaucitron.js
    $dir = plugin_dir_url( __FILE__ ) . "js/tarteaucitron/tarteaucitron.js";
    wp_enqueue_script('tarteaucitron', $dir);
    
    // ajoute le script googleAnalytics.js
    $dir = plugin_dir_url( __FILE__ ) . "js/googleAnalytics.js";
    wp_enqueue_script('googleAnalytics', $dir);

    // et on l'envoi dans le googleAnalytics.js
    wp_localize_script('googleAnalytics', 'track', $tracking_id);
}


// hook permettant d'ajouter dan sle head les scripts
add_action('wp_head', 'LAMANU_scripts');


function my_custom_menu_page () 
{
    add_menu_page( 
        'LAMANU', 
        'LAMANU Plugin', 
        'administrator', 
        'LAMANU-cookie-law/view/option_wp.php', 
        '',
        plugins_url('LAMANU-cookie-law/icon/lemon.png'),
        2
    );
}

// hook permettant d'ajouter un item ou plugin dan sle menu admin de wordpress
add_action( 'admin_menu', 'my_custom_menu_page' );


