<?php
/**
 * Plugin Name:       Full screen video with text overlay
 * Description:       Full screen video with text overlay
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       full-screen-video-with-text-overlay
 *
 * @package           full-screen-video
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function full_screen_video_full_screen_video_with_text_overlay_block_init() {
	register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'full_screen_video_full_screen_video_with_text_overlay_block_init' );
