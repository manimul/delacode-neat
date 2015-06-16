<?php
/**
 * Template Name: Full-Width, No Sidebars
 *
 * This template display content at full with, with no sidebars.
 * Please note that this is the WordPress construct of pages and that other 'pages' on your WordPress site will use a different template.
 *
 * @package some_like_it_neat
 */

get_header(); ?>

<div id="primary" class="content-area">
         <?php
                $args = array('post_type' => 'page', 'order' => 'ASC', 'orderby' => 'menu_order');
                $the_query = new WP_Query($args);
            ?>
            <?php if(have_posts()):while($the_query->have_posts()):$the_query->the_post(); ?>
            <?php get_template_part('page-templates/partials/content', 'page'); ?>
            <?php endwhile; endif; ?>

		
			



</div><!-- #primary -->

<?php get_footer(); ?>
