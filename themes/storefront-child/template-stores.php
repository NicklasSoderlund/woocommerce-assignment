<?php
    /**
    * Template Name: Stores
    */
get_header(); ?>

<div id="primary" class="content-area">
<main id="main" class="site-main" role="main">


<?php
$args = array( 'post_type' => 'store', 'posts_per_page' => 10 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
get_template_part( 'content', get_post_format() );


endwhile;

 ?>

</main><!-- #main -->
	</div><!-- #primary -->

<?php
do_action( 'storefront_sidebar' );
get_footer();