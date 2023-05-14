<?php
get_header();

?>

<div class="product-single">
    <main class="product-main">
        <div class="product-card">
            <div class="product-primary">
                <header class="product-header">
                    <h2 class="product-title"><a href="#"><?php echo get_the_title(); ?></a></h2>
                    <div class="product-meta">
                        <a class="meta-shockcode" href="#">Code: 650204111</a>
                        <span class="meta-price">$ 179.99</span>
                    </div>		
                    <div class="product-details product-details-table">
                        <span>Type</span><span>Washing machine</span>	
                        <span>Brand</span><span><?php get_terms( array( 'brand' ) ); ?></span>
                        <span>Model</span><span>HW80-B14939-S</span>
                    </div>

                    <div class="product-details product-details-tags">
                        <div class="product-details-label">Tags</div>
                        <span>Laundry</span>
                        <span>Washing</span>
                    </div>
                </header>

                <?php if( ! empty( get_posts_visit( get_the_ID() ) ) ) {
                    echo 'This product was visited ' . get_posts_visit( get_the_ID() ) . ' times';
                } ?>

                <div class="product-body">
                    <?php echo get_the_content(); ?>    
                </div>
            </div>
        </div>
    </main>
    <aside class="product-secondary">
        <div class="product-logo">
            <div class="product-logo-box">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
            </div>
        </div>
        <a href="#" class="button button-wide">Buy now</a>
    </aside>
    </div>
<?php

get_footer();