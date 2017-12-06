<?php

/**
 * Plugin Name: Gutenberg Testing JB
 * Plugin URI: https://github.com/sephsekla
 * Version: 0.1.0
 * Author: Joe Bailey-Roberts
 *
 *
 */

defined( 'ABSPATH' ) || exit;

function jb_block_basic_assets(){

wp_enqueue_script('jb-basic-block',

plugins_rul('block.js',_FILE),
array('wp-blocks','wp-element'),
filemtime( plugin_dir_path( __FILE__ ) . 'block.js' )
);

}

add_action('enqueue_block_editor_assets','jb_block_basic_assets');
