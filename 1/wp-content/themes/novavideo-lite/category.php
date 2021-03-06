<?php get_header(); ?>

    <?php $term = $wp_query->queried_object; ?>

    <h1><?php _e( 'All videos in category', 'novavideo-lite' ); ?> <?php echo $term->name; ?>  <?php echo novavideo_lite_get_nb_video(); ?></h1>
    
    <?php if ( have_posts() ) : ?>
    
        <ul class="listing-videos listing-tube">
        
        <?php while ( have_posts() ) : the_post(); ?>
                               
            <?php get_template_part( 'content', get_post_format() ); ?>
        
        <?php endwhile; ?>
        
        </ul>
        
    <?php endif; ?>
    
    <div class="clear"></div>
    
    <div class="pagination"><?php novavideo_lite_paginate(); ?></div>
   
</div><!-- #content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>