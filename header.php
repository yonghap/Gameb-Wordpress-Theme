<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>	
<?php if (is_single() || is_page()) { ?>
	<title><?php the_title() ?> || GAMEB</title>	
<?php } else { ?>
	<title>GAMEB</title>
<?php } ?>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">	
<meta name="description" content="Web Front-End">
<meta name="keywords" content="gameb,웹퍼블리셔,웹프론트엔드,프론트엔드,개발자">
<link rel="stylesheet" href="/wp-content/themes/gameb/common/tomorrow-night.min.css?s=1">
<link rel="apple-touch-icon" href="/wp-content/themes/gameb/logo.png" />
<script src="/wp-content/themes/gameb/common/prettify.js"></script>
<script src="/wp-content/themes/gameb/common/jquery-latest.min.js"></script>
<link rel="stylesheet" href="/wp-content/themes/gameb/style.css?c=1">
<meta property="og:title" content="gameb">
<meta property="og:image" content="http://gameb.co.kr/wp-content/uploads/2020/02/gameb.jpg">
<meta property="og:description" content="Web Front-End">
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-116650637-1', 'auto');
ga('send', 'pageview');
</script>
<script>
$(document).ready(function() {
  	$('pre').addClass('prettyprint');
});
</script>
</head>
<body <?php body_class(); ?>>

<div id="wrap" class="<?php echo get_post_format();?>">
	<header id="header" class="header">
		<div class="header__wrap">
			<h1 class="logo">
				<a href="<?php bloginfo('home'); ?>">
					<img src="<?php echo get_header_image() ?>" alt="<?php bloginfo('name'); ?>">
				</a>
			</h1>
			<div class="header__tags">
				<a href="/tag/html/">#html</a>
				<a href="/tag/css/">#css</a>
				<a href="/tag/vue/">#vue</a>
				<a href="/tag/vue기초/">#vue기초 </a>
				<a href="/tag/vue예제/">#vue예제</a>
				<a href="/tag/todo프로젝트/">#todo프로젝트</a>
				<a href="/tag/library/">#library</a>
				<a href="/tag/php/">#php</a>
				<a href="/tag/mysql/">#mysql</a>
				<a href="/tag/unity/">#unity</a>
				<a href="/tag/roadmap/">#roadmap</a>
			</div>
			<div class="header__search">
				<form role="search" method="get" class="search__form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
					<label>
						<input type="search" class="search__field" value="<?php echo get_search_query(); ?>" name="s" placeholder="검색">
					</label>
					<button type="submit" class="search__submit">
						▶
					</button>
				</form>
			</div>
		</div>
	</header>
