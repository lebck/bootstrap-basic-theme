<?php

require_once get_template_directory() . '/wp-bootstrap-navwalker.php';

function register_my_menu()
{
    register_nav_menu('primary', __('Primary Menu', 'theme-slug'));
}

add_action('after_setup_theme', 'register_my_menu');
