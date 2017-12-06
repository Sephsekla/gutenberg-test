( function( blocks, element ) {
	var el = element.createElement;

	var blockStyle = {
		backgroundColor: '#fafafa',
		color: '#111111',
		padding: '45px'

	};

	blocks.registerBlockType( 'jb_gutenberg/basic-block', {
		title:  'JB: First Block',
		icon: 'universal-access-alt',
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
