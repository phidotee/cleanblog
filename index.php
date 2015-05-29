<?php get_header(); ?>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <?php if (have_posts()) : ?>
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <?php while (have_posts()) : the_post(); ?>
                <div class="post-preview">
                    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
                        <h2 class="post-title">
                            <?php the_title(); ?>
                        </h2>
                        <h3 class="post-subtitle">
                            <?php the_excerpt(); ?>
                        </h3>
                    </a>
                    <p class="post-meta"><?php _e( 'Posted by ', 'cleanblog' ); ?><?php the_author_link(); ?><?php _e( ' on ', 'cleanblog' ); ?><?php echo get_the_date(); ?></p>
                </div>
                <hr>
                <?php endwhile; ?>
                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <?php previous_posts_link( '&larr; Newer posts' ); ?>
                    </li>
                    <li class="next">
                        <?php next_posts_link( 'Older Posts &rarr;' ); ?>
                    </li>
                </ul>
            </div>
            <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.', 'cleanblog' ); ?></p>
            <?php endif; ?>
        </div>
    </div>

<?php get_footer(); ?>
