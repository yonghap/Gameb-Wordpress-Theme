<?php get_header(); ?>
<div id="container" class="container">
<?php
	if (is_single()) :
		get_template_part( 'template/template','single');
	else :
		get_template_part( 'template/template','list');
	endif;
?>
</div>
<?php get_footer(); ?>