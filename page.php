<?php get_header(); ?>

<main class='container'>
    <div class="d-flex justify-content-center">
        <h1 class="subtitle text-uppercase mt-5"><?php the_title(); ?></h1>
    </div>

   
    <?php the_content(); ?>
</main>

<?php get_footer(); ?>