<?php
/**
 * Plugin Name:       plugin-a
 * Description:       a simple dummy plugin called plugin-a
 * Requires at least: 6.6
 * Requires Plugins:  
 * Requires PHP:      8.3
 * Version:           1.0.0
 * Author:            lars gersmann <lars.gersmann@gmail.com>
 * License:           MIT
 * License URI:       https://opensource.org/license/MIT
 * Text Domain:       plugin-a
 */

namespace devcontainer_boilerplate\plugin_a;

defined( 'ABSPATH' ) || exit;

\add_action('init', function() : void {
  $foo = "bar";

  error_log("foo=$foo");
});