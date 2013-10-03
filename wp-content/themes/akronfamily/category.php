<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

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

				<!--<h1 class="page-title">--><?php /*
					printf( __( 'Category Archives: %s', 'twentyten' ), '<span>' . single_cat_title( '', false ) . '</span>' );
				?></h1>
				<?php
					$category_description = category_description();
					if ( ! empty( $category_description ) )
						echo '<div class="archive-meta">' . $category_description . '</div>';

*/				/* Run the loop for the category page to output the posts.
				 * If you want to overload this in a child theme then include a file
				 * called loop-category.php and that will be used instead.
				 *//*
				get_template_part( 'loop', 'category' );
				*/?>

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
