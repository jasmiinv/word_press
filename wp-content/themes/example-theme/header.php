<!DOCTYPE html>
<!html <?php language_attributes();?>>

<head>
    <meta charset="UTF-8">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
</head>
<header class="page-header">
    <div class="header-top-left">
        <?php the_custom_logo(); ?>
    </div>
    <div class="header-top-right">
       <?php wp_nav_menu(['container' => 'nav', 'theme_location' => 'main-menu']);?>
    </div>

</header>


<?php
