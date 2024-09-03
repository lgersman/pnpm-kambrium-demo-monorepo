<?php
/**
 * Plugin Name:				bulgur
 * Plugin URI: 	 			https://github.com/lgersman/pnpmkambrium
 * Description:  			Example block scaffolded with Create Block tool.
 * Requires at least: 6.1
 * Requires PHP:
 * Version: 					0.1.0
 * Author: 						lars gersmann
 * License: 					MIT-2
 * License URI: 			https://opensource.org/licenses/MIT-2
 * Domain Path: 			/languages
 *
 * @package kambrium-bulgur
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */

defined('ABSPATH') || exit();

\add_action('init', fn() => \register_block_type(__DIR__ . '/build'));
