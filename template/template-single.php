<article class="content">
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php
			while ( have_posts() ) : the_post();
			the_title( '<h2 class="comm-title">', '</h2>' );
			$posttags = get_the_tags();
			if ($posttags) {
				echo '<div class="comm-tag">';
		  	foreach($posttags as $tag) {
		    	echo '<a href="' . get_tag_link($tag->term_id) . '">#' . $tag->name . '</a> ';
		  	}
		  	echo "</div>";
			}
		?>
			<div class="comm-content">
				<?php the_content(); ?>
			</div>
		<? endwhile; ?>	
	</div>
	<script>
	$(function () {
		setTimeout(function () {
			$('.language-red').parent('.prettyprint').addClass('red');
			$('.language-blue').parent('.prettyprint').addClass('blue');
		},500);
	})
	</script>
</article>