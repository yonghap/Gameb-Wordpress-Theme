<?php
register_nav_menus(array('primary' => "메인메뉴"));
add_theme_support('menus');
add_theme_support('custom-header');
add_theme_support('post-formats', array('aside', 'link', 'gallery', 'status', 'quote', 'image'));
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_filter('excerpt_length', 'custom_excerpt_length', 999);
show_admin_bar(false);
function custom_excerpt_length($length) {
	return 30;
}

function wpdocs_excerpt_more($more) {
	return ' [...]';
}

add_filter('excerpt_more', 'wpdocs_excerpt_more');
remove_filter('the_exceprt', 'wpautop');



?>