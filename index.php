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
plugins_url('block.js', __FILE__),
array('wp-blocks','wp-element'),
filemtime( plugin_dir_path( __FILE__ ) . 'block.js' )
);

}

add_action('enqueue_block_editor_assets','jb_block_basic_assets');

function testing_register_post_type() {
	$args = array(
		'public' => true,
		'label'  => 'Books',
		'show_in_rest' => true,
		'template' => array(
			array( 'core/image' ),
			array( 'core/paragraph', array(
				'placeholder' => 'Add a book description',
			) ),
			array( 'core/quote' ),
		),
		'template_lock' => 'all', // or 'insert' to allow moving
	);
	register_post_type( 'book', $args );
}
add_action( 'init', 'testing_register_post_type' );
