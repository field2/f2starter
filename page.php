<?php
get_header();
?>
<main id="site_main">
<?php 	if ( have_posts() ) : 	
?>

				<?php


			/* Start the Loop */

	while ( have_posts() ) : 	the_post(); 
the_content();


			endwhile;

		endif;
		 ?>
</main><!-- #site_main -->

<?php
get_footer();