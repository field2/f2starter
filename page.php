<?php
get_header();
?>
<main>
<?php 	if ( have_posts() ) : 	
?>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>

				<?php


			/* Start the Loop */

	while ( have_posts() ) : 	the_post(); 
the_content();


			endwhile;

		endif;
		 ?>
</main><!-- #main -->

<?php
get_footer();