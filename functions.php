<?php

/**
 * Register menu top
 */
if (function_exists('register_nav_menus')) :
    register_nav_menus(array('top_menu' => 'Menú Principal Superior'));
endif;

/**
 * Register class for link
 */
add_filter('nav_menu_link_attributes', 'menu_link_class', 10, 3);

function menu_link_class($atts, $item, $args)
{
    $class = 'nav-link';
    $atts['class'] = $class;
    return $atts;
}

/**
 * Register Images
 */
if (function_exists('add_theme_support')) {
    // Only this line because the image size is controller by class CSS
    add_theme_support('post-thumbnails');
}

/**
 * Register Sidebar
 */
add_action('widgets_init', 'sidebar_blog');
function sidebar_blog()
{
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'primary',
            'name'          => __('Primary Sidebar'),
            'description'   => __('A short description of the sidebar.'),
            'before_widget' => '<div id="%1$s" class="widget %2$s my-3">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    /* Repeat register_sidebar() code for additional sidebars. */
}
