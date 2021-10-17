<?php
define('ANNA_VERSION', '1.0.1');
define('ANNA_URL', get_template_directory_uri());

add_action('wp_enqueue_scripts', 'anna_styles');
add_action('wp_enqueue_scripts', 'anna_scripts');

function anna_styles()
{
  wp_enqueue_style('anna-fonts-one', 'https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i');
  wp_enqueue_style('anna-fonts-two', 'https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i,800,800i');
  wp_enqueue_style(
    'anna-plugins',
    ANNA_URL . '/assets/css/plugins.css',
    [],
    ANNA_VERSION
  );
  wp_enqueue_style(
    'anna-style',
    ANNA_URL . '/assets/css/style.css',
    [],
    ANNA_VERSION
  );
}

function anna_scripts()
{
  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', ANNA_URL . '/assets/js/jquery.js', [], false, true);
  wp_enqueue_script('anna-plugins', ANNA_URL . '/assets/js/plugins.js', ['jquery'], false, true);
  wp_enqueue_script('anna-init', ANNA_URL . '/assets/js/init.js', ['jquery'], false, true);
}
