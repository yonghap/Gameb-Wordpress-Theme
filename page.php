<?php

// 헤더파일부르기
get_header();
?>
<div id="container" class="container container--page">
	<div id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php
			while ( have_posts() ) : the_post();
			the_title( '<h2 class="comm-title">', '</h2>' );
		?>
			<div class="comm-page">
				<?php the_content(); ?>
			</div>
		<? endwhile; ?>		
	</div>
</div>
<?php
get_footer();

?>