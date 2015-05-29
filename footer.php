    <hr>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <ul class="list-inline text-center">
                        <?php if( get_theme_mod( 'twitter') !== '' ) : ?>
                        <li>
                            <a href="<?php echo get_theme_mod( 'twitter' ); ?>">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <?php endif; ?>
                        <?php if( get_theme_mod( 'facebook') !== '' ) : ?>
                        <li>
                            <a href="<?php echo get_theme_mod( 'facebook' ); ?>">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <?php endif; ?>
                        <?php if( get_theme_mod( 'github') !== '' ) : ?>
                        <li>
                            <a href="<?php echo get_theme_mod( 'github' ); ?>">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <?php endif; ?>
                    </ul>
                    <p class="copyright text-muted"><?php _e( 'Copyright', 'cleanblog' ); ?> &copy; <?php bloginfo( 'name' ); ?> <?php echo date('Y'); ?></p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php bloginfo('template_directory'); ?>/js/clean-blog.min.js"></script>

    <?php wp_footer(); ?>

</body>

</html>
