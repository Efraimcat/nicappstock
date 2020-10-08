<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://efraim.cat
 * @since             1.0.0
 * @package           Nicappstock
 *
 * @wordpress-plugin
 * Plugin Name:       Nic-app stock
 * Plugin URI:        nic-app.com
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           0.1.02
 * Author:            Efraim Bayarri
 * Author URI:        https://efraim.cat
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       nicappstock
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'NICAPPSTOCK_VERSION', '0.1.02' );

require __DIR__ . '/vendor/autoload.php';
use Automattic\WooCommerce\Client;
use Automattic\WooCommerce\HttpClient\HttpClientException;

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-nicappstock-activator.php
 */
function activate_nicappstock() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-nicappstock-activator.php';
	Nicappstock_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-nicappstock-deactivator.php
 */
function deactivate_nicappstock() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-nicappstock-deactivator.php';
	Nicappstock_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_nicappstock' );
register_deactivation_hook( __FILE__, 'deactivate_nicappstock' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-nicappstock.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_nicappstock() {

	$plugin = new Nicappstock();
	$plugin->run();

}
run_nicappstock();
