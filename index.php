<?php

/**
 * Plugin Name: Gutenberg Testing JB
 * Plugin URI: https://github.com/sephsekla
 * Version: 0.1.1
 * Author: Joe Bailey-Roberts
 *
 *
 */

defined( 'ABSPATH' ) || exit;

function jb_block_basic_assets(){

wp_enqueue_script('jb-basic-block',
plugins_url('block.js',_FILE_),
array('wp-blocks','wp-element'),
filemtime( plugin_dir_path( __FILE__ ) . 'block.js' )
);

}

add_action('enqueue_block_editor_assets','jb_block_basic_assets');
