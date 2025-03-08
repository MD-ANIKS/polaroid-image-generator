<?php
/**
 * Plugin Name:       Polaroid Generator
 * Description:       A customizable WordPress Gutenberg block that generates a grid of polaroid-style images, sourced from Picsum Photos. Users can adjust the number of images displayed, with support for lazy loading and a responsive, flexible layout.
 * Version:           0.1.0
 * Requires at least: 6.7
 * Requires PHP:      7.4
 * Author:            Md.Anik
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       polaroid-generator
 *
 * @package CreateBlock
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function create_block_polaroid_generator_block_init() {
	register_block_type( __DIR__ . '/build/polaroid-generator' );
}
add_action( 'init', 'create_block_polaroid_generator_block_init' );
