<?php get_header(); ?>
<!--Start Article Content-->
<div class="container flex-fill pt-5">
    <div class="row">
        <!--Start Article-->
        <main class="col-12 col-md-8 my-5">
            <?php
            if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <article>
                        <?php if (has_post_thumbnail()) : ?>
                            <a href="<?php the_permalink(); ?>" alt="<?php the_title_attribute(); ?>">
                                <?php the_post_thumbnail('post-thumbnails', array('class' => 'img-fluid')); ?>
                            </a>
                        <?php endif; ?>
                        <h2 class="my-3"><?php the_title(); ?></h2>
                        <p class="lead"><?php echo get_the_date(); ?></p>
                        <!-- <p class="lead"><?php the_excerpt(); ?></p> -->
                        <div class="text-justify">
                            <?php the_content(); ?>
                        </div>
                    </article>
            <?php endwhile;
            endif;
            ?>
        </main>
        <!--End Article-->

        <!--Start Aside-->
        <aside class="col-12 col-md-4 py-5">
            <?php get_sidebar(); ?>
        </aside>
        <!--End Aside-->
    </div>
</div>
<!--End Article Content-->
<?php get_footer(); ?>