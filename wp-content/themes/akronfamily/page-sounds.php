<?php

get_header();


	query_posts('category_name=sounds&posts_per_page=10');

  // Get the last 10 posts in the special_cat category.
  ?>


		<div id="container">
        	
			<div id="content" role="main">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<?php //while (have_posts()) : the_post(); ?>
 
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
					<div class="entry-content">
                    <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                    
			<div class="entry-meta">
				<?php twentyten_posted_on(); ?>
			</div><!-- .entry-meta -->
						<?php the_content(); ?>
						<?php //wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-content -->
				</div><!-- #post-## -->

				<?php //comments_template( '', true ); ?>

<?php endwhile; ?>

			</div><!-- #content -->
		</div><!-- #container -->



<?php get_sidebar(); ?>
<?php get_footer(); ?>
