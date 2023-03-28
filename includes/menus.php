<?php
/*
Registering menu area

@package packageName
@subpackage packageName
@since 1.0
*/


function name_menu(){

  register_nav_menus(array(
    'main-menu' => __('Main Menu','slan')

));
}

add_action('init','name_menu');
