<?php

/**
 * Hippo enqueue scripts and styles
 *
 * @package Hippo
 */

function hippo_scripts()
{
  wp_enqueue_style('hippo-style', get_stylesheet_uri(), array(), HIPPO_VERSION);

  wp_enqueue_style('hippo-main-style', get_template_directory_uri() . '/build/index.css', array(), HIPPO_VERSION);

  if (is_singular() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }
}

add_action('wp_enqueue_scripts', 'hippo_scripts');
