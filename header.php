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
		<?php 
	if ( has_nav_menu( 'primary' ) ) {
	wp_nav_menu(array('theme_location'=> 'primary', 'container'=>'nav', 'menu_class'=>'primary')); 
}
?>

		<?php 
	if ( has_nav_menu( 'social' ) ) {
	wp_nav_menu(array('theme_location'=> 'social', 'container'=>'nav', 'menu_class'=>'social')); 
}
?>


	</header>