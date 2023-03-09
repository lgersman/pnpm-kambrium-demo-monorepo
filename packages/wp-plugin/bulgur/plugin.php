<?php
/**
 * Plugin Name:       Kambrium Bulgur
 * Plugin URI:        https://github.com/lgersman/pnpmkambrium
 * Description:       Example block scaffolded with Create Block tool.
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            Lars, Hank
 * License:           MIT-2
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       bulgur
 * Domain Path:       kambrium-bulgur
 *
 * @package           kambrium-bulgur
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function kambrium_bulgur_bulgur_block_init() {
	register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'kambrium_bulgur_bulgur_block_init' );
