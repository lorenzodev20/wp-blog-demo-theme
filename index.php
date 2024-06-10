<?php get_header(); ?>
<!-- Start Main -->
<main class="flex-fill">
    <!--Star Welcome Message-->
    <section class="container-fluid suscribe d-flex flex-column justify-content-center aling-items-center">
        <div class="text-center text-white">
            <h1 class="display-4">Bienvenido a mi Blog</h1>
            <h2 class="display-6">Lee mis últimos artículos</h2>
        </div>
    </section>
    <!--End Welcome Message-->

    <!--Start Content-->
    <section class="container my-5">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <!--Start Articulo-->
            <?php
            if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <article class="col">
                        <div class="card shadow-sm">
                            <!-- card-img-top img-fluid  -->
                            <?php if (has_post_thumbnail()) : ?>
                                <a href="<?php the_permalink(); ?>" alt="<?php the_title_attribute(); ?>">
                                    <?php the_post_thumbnail('post-thumbnails', array('class' => 'card-img-top img-fluid')); ?>
                                </a>
                            <?php endif; ?>
                            <div class="card-body">
                                <a href="<?php the_permalink(); ?>">
                                    <h5 class="card-title"><?php the_title(); ?></h5>
                                </a>
                                <p class="card-text"> <?php the_excerpt(); ?></p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted"> <?php echo get_the_date(); ?> / <?php the_category(', '); ?> / <?php the_author(); ?> </small>
                            </div>
                        </div>
                    </article>
            <?php endwhile;
            endif;
            ?>
            <!--End Articulo-->
        </div>
    </section>
    <!--End Content-->
</main>
<!-- End Main -->
<?php get_footer(); ?>