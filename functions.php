<?php
/*
 * Functions file
 * Calls all other required files
 * PLEASE DO NOT EDIT THIS FILE IN ANY WAY
 *
 * @package nirvana
 */

// variable for theme version
define ('_CRYOUT_THEME_NAME','nirvana');
define ('_CRYOUT_THEME_VERSION','1.4.2.2');

require_once(get_template_directory() . "/admin/main.php"); // Load necessary admin files

//Loading include files
require_once(get_template_directory() . "/includes/theme-setup.php");     // Setup and init theme
require_once(get_template_directory() . "/includes/theme-styles.php");    // Register and enqeue css styles and scripts
require_once(get_template_directory() . "/includes/theme-loop.php");      // Loop functions
require_once(get_template_directory() . "/includes/theme-meta.php");      // Meta functions
require_once(get_template_directory() . "/includes/theme-comments.php");  // Comment functions
require_once(get_template_directory() . "/includes/theme-functions.php"); // Misc functions
require_once(get_template_directory() . "/includes/theme-hooks.php");     // Hooks
require_once(get_template_directory() . "/includes/widgets.php");     	  // Theme Widgets
require_once(get_template_directory() . "/includes/ajax.php");     	      // Ajax
require_once(get_template_directory() . "/includes/tgm.php");             // TGM Plugin Activation

// HCC hero image addition

function hero_widgets_init() {
  register_sidebar( array(
    'name' => 'Hero area',
    'id' => 'hero-image-widget',
    'before_widget' => '<div id="%1$s" class="hero-image">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
  ) );
}

add_action('widgets_init', 'hero_widgets_init');
