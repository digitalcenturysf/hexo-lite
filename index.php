<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Hexo Lite
 */ 
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

	        <div class="blog-page-area">
	          <div class="container">
	            <div class="row">
 
	              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 acurate">
	                <div id="masonry-loop" class="all-blog-content-area">
						<?php
						if ( have_posts() ) :   while ( have_posts() ) : the_post(); 
								get_template_part( 'template-parts/content' );

							endwhile; ?>
				               
							<?php 
					else :
						get_template_part( 'template-parts/content', 'none' ); 
					endif; ?>

	                </div> 
	                <div class="pagination-area">
	                	<?php get_template_part('pagination'); ?>  
	                </div>
	              </div>
 
	              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
	                <div class="page-sidebar-area">
	                  <?php get_sidebar(); ?>
	                </div>
	              </div>   
				            
	            </div>
	          </div>
	        </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();
