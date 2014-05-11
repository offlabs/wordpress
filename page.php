<?php get_header(); ?>
 
    <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
         
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
 
            <?php the_content(); ?>
 
                <p class="postmetadata" style="display:none;">
                <?php _e('Filed under&#58;'); ?> <?php the_category(', ') ?> <?php _e('by'); ?> <?php  the_author(); ?><br />
                <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?> <?php edit_post_link('Edit', ' &#124; ', ''); ?>
                </p>
         
<?php endwhile; ?>
 
    <div class="navigation" style="display:none;">
        <?php posts_nav_link(); ?>
    </div>
 
<?php endif; ?>
 
<!--<?php get_sidebar(); ?>   -->
<?php get_footer(); ?>
