<?php //Template Name: List Products

get_header();

$args = array(
    'posts_per_page'   => 100,
    'post_type'        => 'product',
    'status'           => 'publish'
);

$the_query = new WP_Query( $args );

?><ul class="products-listing"><?php
if ( $the_query->have_posts() ) {
	while ( $the_query-> have_posts() ) {
		$the_query->the_post(); ?>
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
        <?php
    } // end while
} // end if
?></ul><?php

get_footer();