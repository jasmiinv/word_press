<?php
get_header();
?>

<?php

if (have_posts()) :
    while (have_posts()) :
        the_post();
        the_title();
        the_content();
    endwhile;
else :
    _e('Sorry, no posts matched your criteria.', 'textdomain');
endif;
?>

    <section class="hero">
        <div class="hero-text">
            <h1>Welcome to our website</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quos.</p>
        </div>
    </section>
<?php the_custom_header_markup();?>
 <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/map.svg" alt="hero"> -->

<?php
$products
?>
<?php
get_sidebar();
get_footer();
?>