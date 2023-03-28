<?php
/*
@package packageName
@subpackage packageName
@since 1.0
*/

//Registering styles ans scrips


function companyname_theme_styles(){

  wp_register_style('styles',RutaTema.'/style.css','all');

  wp_register_style('style', get_stylesheet_uri(),array('styles'),'1.0','all');

  //CSS files

  wp_enqueue_style('style');
}

add_action('wp_enqueue_scripts','companyname_theme_styles');



//Registering and loading scripts


function companyname_theme_scripts(){

  wp_register_script('code-scripts',RutaTema.'/js/mobile-menu.js',array('jquery'),'1.5.1',true);

  //Loading scripts
  wp_enqueue_script('code-scripts');
  }

  add_action('wp_enqueue_scripts','companyname_theme_scripts');
