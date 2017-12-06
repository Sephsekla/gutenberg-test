( function( blocks, element ) {
	var el = element.createElement;
	var __ = i18n.__;

	var blockStyle = {
		backgroundColor: '#fafafa',
		color: '#111111',
		padding: '45px',
    border-radius: '5px'
	};

	blocks.registerBlockType( 'jb_gutenberg', {
		title: __( 'JB: First Block', 'jb_gutenberg' ),
		icon: 'dashicons-businessman',
		category: 'layout',
		edit: function() {
			return el(
				'p',
				{ style: blockStyle },
				'JB Block'
			);
		},
		save: function() {
			return el(
				'p',
				{ style: blockStyle },
				'JB Block FRONTEND'
			);
		},
	} );
} )(
	window.wp.blocks,
	window.wp.element
);
