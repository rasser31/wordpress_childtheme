<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
</head>
<body>
    <?php get_header(); ?>

    <img class="mainImage" src="http://localhost/wordpress/wp-content/uploads/2024/02/testimage-4-e1709202814524.jpg" alt="Main Image">

    <div class="container">
        <!-- Main Loop -->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>
    </div>

    <?php get_footer(); ?>
</body>
</html>