<?php
global $wp_query;
get_header();
?>


    <section class="hero">
        <div class="hero-text">
            <?php
            echo '<h1>' . single_cat_title('', false) . '</h1>';
            echo '<p>' . category_description() . '</p>';
            ?>
        </div>

        <img src="<?php echo get_random_post_image(get_queried_object_id()); ?>" alt="hero">
    </section>
    <main>
        <section class="products">
            <?php
            //haetaan alikategoriat
            $subcategories = get_categories([
                    'child_of'=> get_queried_object_id(),
                    'hide_empty' => true,
                    'post_per_page' => 3,
                ]);

            //käydään läpi alikategoriat
            foreach ($subcategories as $subcategory):
                echo '<h2>' . $subcategory->name . '</h2>';

            $args= ['post_type' => 'post' ,
                    'cat' => $subcategory->term_id];

            $products = new WP_Query( $args);

            generate_article($products);
            ?>
            <article class="product all">
                <a href="<?php echo get_category_link($subcategory->term_id); ?>">View all</a>
            </article>
            <?php
            endforeach;
            ?>
        </section>
    </main>

<?php
get_footer();
?>