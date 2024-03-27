<?php
get_header();
?>
    <section class="hero">
        <div class="hero-text">
            <?php
            if ( have_posts() ) :
                while ( have_posts() ) :
                    the_post();
                    the_title('<h1>', '</h1>');
                    the_content();
                endwhile;
            else :
                _e( 'Sorry, no posts matched your criteria.', 'esimerkki' );
            endif;
            ?>
        </div>

       <?php the_custom_header_markup(); ?>
        <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/map.svg" alt="hero"> -->
    </section>
    <main>
        <section class="products">
            <h2>Featured Products</h2>
            <?php
            $args = ['tag' => 'featured', 'posts_per_page' => 3];
            $products = new WP_Query($args);
            generate_article($products);
            ?>
        </section>
    </main>

<?php
get_sidebar();
get_footer();