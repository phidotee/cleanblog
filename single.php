<?php get_header(); ?>

    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <?php if (has_post_thumbnail( $post->ID ) ) : ?>
    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
    <header class="intro-header" style="background-image: url('<?php echo $image[0]; ?>')">
    <?php else : ?>
    <header class="intro-header" style="background-image: url('<?php echo( get_header_image() ); ?>')">
    <?php endif; ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-heading">
                        <h1><?php the_title(); ?></h1>
                        <h2 class="subheading"><?php the_subtitle(); ?></h2>
                        <span class="meta"><?php _e( 'Posted by ', 'cleanblog' ); ?><?php the_author_link(); ?><?php _e( ' on ', 'cleanblog' ); ?><?php echo get_the_date(); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </article>

    <?php endwhile; ?>
    <?php endif; ?>

<?php get_footer(); ?>
