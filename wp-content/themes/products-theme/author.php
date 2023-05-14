<?php
get_header();

$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));

?><p>This is <b><?php echo $curauth->nickname; ?>'s</b> page</p>

<ul class="products-listing">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <li class="product-card">
            <div class="product-primary">
                <h2 class="product-title"><a href="<?php echo esc_url( get_the_permalink() ); ?>"><?php echo esc_html( get_the_title() ); ?></a></h2>
            </div>
            <?php if( ! empty( get_the_post_thumbnail_url() ) ) { ?>
                <div class="product-logo">
                    <div class="product-logo-box">
                        <img src="<?php echo esc_url( get_the_post_thumbnail_url() ); ?>" alt="">
                    </div>
                </div>
            <?php } ?>
        </li>
    <?php endwhile; else: ?>
        <p><?php _e('No posts by this author.'); ?></p>
    <?php endif; ?>
</ul>
<?php get_footer();