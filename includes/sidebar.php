<?php
/*
@package packageName
@subpackage packageName
@since 1.0
*/

function companyname_sidebar(){

  register_sidebar(array(
    'name'          => __( 'Lateral blog zone', 'slan' ),
    'id'            => 'main-sidebar',    // ID should be LOWERCASE  ! ! !
    'description'   => __( 'This is the main widgets zone ;' ),
    'class'         => '',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
    ));
    register_sidebar(array(
        'name'          => __( 'Widget de contacto', 'slan' ),
          'id'            => 'contact-widget',    // ID should be LOWERCASE  ! ! !
          'description'   => __('   This is the widget in the homepage form','slan'),
          'class'         => '',
          'before_widget' => '',
          'after_widget'  => '',
          'before_title'  => '',
          'after_title'   => ''
      ));
      
    register_sidebar(array(
        'name'          => __( 'Widget de newslatter', 'slan' ),
          'id'            => 'newsletter-widget',    // ID should be LOWERCASE  ! ! !
          'description'   => __('This is the newsletter widget','slan'),
          'class'         => '',
          'before_widget' => '',
          'after_widget'  => '',
          'before_title'  => '',
          'after_title'   => ''
      ));      

}

add_action('widgets_init', 'companyname_sidebar');