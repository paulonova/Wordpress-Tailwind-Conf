<?php
function customtheme_enqueue_styles() {
    wp_enqueue_style('customtheme-style', get_stylesheet_uri());
    wp_enqueue_style('google-fonts1', '//fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap');
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..800;1,14..32,100..900&display=swap');
    wp_enqueue_style('google-material-symbols', '//fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap');
}
add_action('wp_enqueue_scripts', 'customtheme_enqueue_styles');
