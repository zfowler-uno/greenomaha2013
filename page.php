
<?php get_header(); ?>

<div class="container">
    <div class="row-fluid">
        <div class="post_content span8">

            <?php if (have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php
            if($post->post_parent) {
                $p = get_post($post->post_parent);
                echo "<h1 class=\"page_title\">" . strtoupper($p->post_title) . " &bull; " . get_the_title() . "</h1>";
            } else {
                echo "<h1 class=\"page_title\">" . get_the_title() . "</h1>";
            }
            ?>
            <?php the_content(); ?>

        </div>


        <?php get_sidebar(); ?>


        <?php endwhile; else: ?>
            <p><?php _e('Sorry! That page does not exist.');?></p>
        <?php endif; ?>

    </div>
</div>

<div id="push"></div>

<?php get_footer(); ?>