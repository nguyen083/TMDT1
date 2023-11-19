<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta http-equiv="Content-Type" content="<?php echo esc_attr(get_bloginfo('html_type')); ?>; charset=<?php echo esc_attr(get_bloginfo('charset')); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php
	if ( function_exists( 'wp_body_open' ) )
	{
		wp_body_open();
	}else{
		do_action('wp_body_open');
	}
?>

<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'grocery-shopping' ); ?></a>

<?php if ( get_theme_mod('grocery_shopping_site_loader', false) == true ) : ?>
	<div class="cssloader">
    	<div class="sh1"></div>
    	<div class="sh2"></div>
    	<h1 class="lt"><?php esc_html_e( 'loading',  'grocery-shopping' ); ?></h1>
    </div>
<?php endif; ?>

<div class="topheader py-2 text-center text-md-left">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-3 align-self-center">
				<?php if ( get_theme_mod('grocery_shopping_header_discount') ) : ?>
					<p class="mb-0"><?php echo esc_html( get_theme_mod('grocery_shopping_header_discount' ) ); ?></p>
				<?php endif; ?>
			</div>
			<div class="col-lg-7 col-md-7 col-sm-7 align-self-center">
				<?php if ( get_theme_mod('grocery_shopping_header_location') ) : ?>
					<span class="mr-3"><i class="fas fa-map-marker-alt mr-2"></i><?php echo esc_html( get_theme_mod('grocery_shopping_header_location' ) ); ?></span>
				<?php endif; ?>
				<?php if ( get_theme_mod('grocery_shopping_header_email') ) : ?>
					<span class="mr-3"><i class="fas fa-paper-plane mr-2"></i><a href="mailto:<?php echo esc_html(get_theme_mod('grocery_shopping_header_email','')); ?>"><?php echo esc_html(get_theme_mod('grocery_shopping_header_email','')); ?></a></span>
				<?php endif; ?>
				<?php if ( get_theme_mod('grocery_shopping_header_phone_number') ) : ?>
					<span class="mr-3"><i class="fas fa-phone mr-2"></i><a href="callto:<?php echo esc_html(get_theme_mod('grocery_shopping_header_phone_number','')); ?>"><?php echo esc_html(get_theme_mod('grocery_shopping_header_phone_number','')); ?></a></span>
				<?php endif; ?>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 align-self-center">
				<?php $grocery_shopping_settings = get_theme_mod( 'grocery_shopping_social_links_settings' ); ?>
				<div class="social-links">
					<?php if ( is_array($grocery_shopping_settings) || is_object($grocery_shopping_settings) ){ ?>
				    	<?php foreach( $grocery_shopping_settings as $grocery_shopping_setting ) { ?>
					        <a href="<?php echo esc_url( $grocery_shopping_setting['link_url'] ); ?>">
					            <i class="<?php echo esc_attr( $grocery_shopping_setting['link_text'] ); ?> mr-3"></i>
					        </a>
				    	<?php } ?>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>

<header id="site-navigation" class="header text-center text-md-left py-2">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 col-md-12 col-sm-12 align-self-center">
				<button class="menu-toggle my-2 py-2 px-3" aria-controls="top-menu" aria-expanded="false" type="button">
					<span aria-hidden="true"><?php esc_html_e( 'Menu', 'grocery-shopping' ); ?></span>
				</button>
				<nav id="main-menu" class="close-panal">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'main-menu',
							'container' => 'false'
						));
					?>
					<button class="close-menu my-2 p-2" type="button">
						<span aria-hidden="true"><i class="fa fa-times"></i></span>
					</button>
				</nav>
			</div>
			<div class="col-lg-2 col-md-12 col-sm-12 align-self-center">
				<div class="logo text-center">
		    		<div class="logo-image">
		    			<?php echo the_custom_logo(); ?>
			    	</div>
			    	<div class="logo-content">
				    	<?php
				    		if ( get_theme_mod('grocery_shopping_display_header_title', true) == true ) :
					      		echo '<a href="' . esc_url(home_url('/')) . '" title="' . esc_attr(get_bloginfo('name')) . '">';
					      			echo esc_attr(get_bloginfo('name'));
					      		echo '</a>';
					      	endif;

					      	if ( get_theme_mod('grocery_shopping_display_header_text', false) == true ) :
				      			echo '<span>'. esc_attr(get_bloginfo('description')) . '</span>';
				      		endif;
			    		?>
					</div>
				</div>
		   	</div>
			<div class="col-lg-5 col-md-12 col-sm-12 align-self-center">
				<div class="row">
					<div class="col-lg-8 col-md-8 col-sm-8 align-self-center">
						<div class="header-search text-center text-md-right py-3 py-md-0">
				        	<?php if ( get_theme_mod('grocery_shopping_search_box_enable', true) == true ) : ?>
								<?php if(class_exists('woocommerce')){ ?>
						          	<form method="get" class="woocommerce-product-search" action="<?php echo esc_url(home_url('/')); ?>">
							            <label class="screen-reader-text" for="woocommerce-product-search-field"><?php esc_html_e('Search for:', 'grocery-shopping'); ?></label>
							            <input type="search" id="woocommerce-product-search-field" class="search-field " placeholder="<?php echo esc_html('Search Here','grocery-shopping'); ?>" value="<?php echo get_search_query(); ?>" name="s"/>
							            <button type="submit" value="" class="search-button"><i class="fas fa-search"></i></button>
							            <input type="hidden" name="post_type" value="product"/>
						          	</form>
						        <?php }?>
				        	<?php endif; ?>
				        </div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 align-self-center">
						<?php if ( get_theme_mod('grocery_shopping_cart_box_enable', true) == true ) : ?>
							<?php if ( class_exists( 'woocommerce' ) ) {?>
								<a class="cart-customlocation" href="<?php if(function_exists('wc_get_cart_url')){ echo esc_url(wc_get_cart_url()); } ?>" title="<?php esc_attr_e( 'View Shopping Cart','grocery-shopping' ); ?>"><i class="fas fa-shopping-basket mr-2"></i><span class="cart-item-box"><?php esc_html_e('CART','grocery-shopping'); ?>( <?php echo esc_html(wp_kses_data( WC()->cart->get_cart_contents_count() ));?> )</span></a>
							<?php }?>
						<?php endif; ?>
					</div>
				</div>
	       	</div>
	   	</div>
	</div>
</header>
