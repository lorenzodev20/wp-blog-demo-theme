<?php get_header(); ?>
<!-- Start Main -->
<main class="flex-fill">
    <!--Start Menu Content-->
    <section class="container py-5">
        <?php
        if (have_posts()) : while (have_posts()) : the_post(); ?>
                <h2 class="pt-5" ><?php the_title(); ?></h2>
                <div class="text-justify">
                    <?php the_content(); ?>
                </div>
        <?php endwhile;
        endif;
        ?>
    </section>
    <!--End Menu Content-->
</main>
<!-- End Main -->
<?php get_footer(); ?>