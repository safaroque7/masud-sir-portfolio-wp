<?php

function my_theme_setup()
{
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'my_theme_setup');


// for mentioning image size
function wpb_change_title_text($title)
{
    $screen = get_current_screen();
    if ('post' == $screen->post_type) {
        $title = 'Image size = width: 414px; height: 227px';
    }
    return $title;
}
add_filter('enter_title_here', 'wpb_change_title_text');
