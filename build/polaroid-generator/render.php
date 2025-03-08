<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */


$photos = $attributes['photos'];

?>


<section <?php echo wp_kses_data( get_block_wrapper_attributes(  ) ); ?> > 
	<div class="polaroids"> 
		<?php for($i = 0; $i < $photos; $i++) : ?>
				<div class="polaroid">
					<img src="<?php echo esc_url(add_query_arg('random' , $i, 'http://picsum.photos/200/150')) ?>" alt=""
						loading="lazy"
					/>
				</div>
			<?php endfor; ?>
	</div>
</section>

