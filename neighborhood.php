<?php
/*
Template Name: Neighborhood
*/
?>

<?php get_header(); ?>
 
<main class="main-content-left" role="main">
    
    <!-- breadcrumbs -->
    <div id="breadcrumbs">
        <?php bcn_display(); ?>
    </div>
    <!-- end breadcrumbs -->
    
    <!-- slider -->
    <?php

        echo do_shortcode("[metaslider id=262]");

        echo do_shortcode("[metaslider id=241]");

    ?>
    <!-- end slider -->
    
    <!-- start loop -->
    <?php if (have_posts()) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <article class="article-post">
                <?php the_content(); ?>
            </article>
        <?php endwhile; ?>
    <?php endif; // ?>
    <!-- end loop -->
 
    <div class="main-content-social-media">
        <h3>Stay Connected</h3>
        <?php if ( function_exists('cn_social_icon') ) echo cn_social_icon(); ?>
    </div>
    <!--closing div for main-content-social-media-->	
</main>

<!-- remove sub nav on all neighborhood pages -->
<?php get_sidebar(); ?>

<?php get_footer(); ?>