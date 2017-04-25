<?php if( have_rows('banner') ): ?>
	<?php while( have_rows('banner') ): the_row();
		// vars
		$image = get_sub_field('imagem');
		$link = get_sub_field('link');
    $target = get_sub_field('target');
		?>
			<?php if( $link ): ?>
				<a href="<?php echo $link; ?>" target="<?php echo $target ?>">
			<?php endif; ?>
				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
			<?php if( $link ): ?>
				</a>
			<?php endif; ?>
	<?php endwhile; ?>
<?php endif; ?>
