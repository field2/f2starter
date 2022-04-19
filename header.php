<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo get_bloginfo('description').' :: '.get_the_title(); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>style="background-image:url(<?php echo $featured_img_url; ?>">
	<header>
<a class="home_link" href="<?php echo home_url(); ?>"><?php echo get_bloginfo('description'); ?></a>
<div class="header_links">
			<?php 
	if ( has_nav_menu( 'social' ) ) {
	wp_nav_menu(array('theme_location'=> 'social', 'container'=>'nav', 'menu_class'=>'social')); 
}
?>
	<nav class="site_links">
<label for="menu-toggle" class="hamburger">
<svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect x="12" y="16" width="24" height="3" rx="1.5" fill="#f2f3f8"/>
<rect x="12" y="24" width="24" height="3" rx="1.5" fill="#f2f3f8"/>
<rect x="12" y="32" width="24" height="3" rx="1.5" fill="#f2f3f8"/>
</svg>
</label>
<input type="checkbox" id="menu-toggle" class="visually-hidden"/>
		<?php 
	if ( has_nav_menu( 'primary' ) ) {
	wp_nav_menu(array('theme_location'=> 'primary', 'container'=>'none', 'menu_class'=>'primary')); 
}
?>
</nav><!--  /.site_links -->

		
</div><!--  /.header_links -->
	</header>