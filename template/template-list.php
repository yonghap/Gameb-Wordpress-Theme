<article class="content">
	<ul class="comm-list">
		<?php
		while (have_posts()) : the_post();
			$output = '';
			$date = get_the_date('y-m-d');
			$id = get_the_ID();
			$post_tags = get_the_tags($id);
			if (!empty($post_tags)) {
				foreach ($post_tags as $tag) {
					$output .= '#' . $tag->name . ' ';
				}
			}
			if (get_post_thumbnail_id(get_the_ID())) {
				echo "<li class='i'><a href='" . get_permalink() . "'><span class='comm-list__img'><img src='" . wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())) . "'></span><span class='comm-list__title'>" . get_the_title() . "</span><span class='comm-list__wrap'><span class='comm-list__date'>" . $date . "</span><span class='comm-list__tags'>" . $output . "</span></span></a>" . "</li>";
			} else {
				echo "<li><a href='" . get_permalink() . "'><span class='comm-list__title'>" . get_the_title() . "</span><span class='comm-list__wrap'><span class='comm-list__date'>" . $date . "</span><span class='comm-list__tags'>" . $output . "</span></span></a>" . "</li>";
			}
		endwhile;
		?>
	</ul>
	<?
	the_posts_pagination(array(
		'mid_size' => 5,
		'prev_text' => __('<'),
		'next_text' => __('>'),
	));
	?>
</article>