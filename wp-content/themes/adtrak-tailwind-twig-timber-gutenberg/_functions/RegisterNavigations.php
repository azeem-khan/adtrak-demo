<?php 
add_action( 'init', 'register_navigations' );
function register_navigations() {
     register_nav_menus([
        'primary' => __('Primary Menu', 'adtrak'),
        'secondary' => __('Secondary Menu', 'adtrak'),
        'top-bar' => __('Top Bar Menu', 'adtrak'),
        'footer' => __('Footer Menu', 'adtrak')
    ]);
}
?>
