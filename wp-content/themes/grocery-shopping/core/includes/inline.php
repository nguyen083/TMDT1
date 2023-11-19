<?php


$grocery_shopping_custom_css = '';

	/*---------------------------text-transform-------------------*/

	$grocery_shopping_text_transform = get_theme_mod( 'menu_text_transform_grocery_shopping','CAPITALISE');
    if($grocery_shopping_text_transform == 'CAPITALISE'){

		$grocery_shopping_custom_css .='#main-menu ul li a{';

			$grocery_shopping_custom_css .='text-transform: capitalize ; font-size: 14px;';

		$grocery_shopping_custom_css .='}';

	}else if($grocery_shopping_text_transform == 'UPPERCASE'){

		$grocery_shopping_custom_css .='#main-menu ul li a{';

			$grocery_shopping_custom_css .='text-transform: uppercase ; font-size: 14px;';

		$grocery_shopping_custom_css .='}';

	}else if($grocery_shopping_text_transform == 'LOWERCASE'){

		$grocery_shopping_custom_css .='#main-menu ul li a{';

			$grocery_shopping_custom_css .='text-transform: lowercase ; font-size: 14px;';

		$grocery_shopping_custom_css .='}';
	}

		/*---------------------------Container Width-------------------*/

	$grocery_shopping_container_width = get_theme_mod('grocery_shopping_container_width');

			$grocery_shopping_custom_css .='body{';

				$grocery_shopping_custom_css .='width: '.esc_attr($grocery_shopping_container_width).'%; margin: auto;';

			$grocery_shopping_custom_css .='}';

	/*---------------------------Slider-content-alignment-------------------*/

	$grocery_shopping_slider_content_alignment = get_theme_mod( 'grocery_shopping_slider_content_alignment','LEFT-ALIGN');

	if($grocery_shopping_slider_content_alignment == 'LEFT-ALIGN'){

		$grocery_shopping_custom_css .='.blog_box{';

			$grocery_shopping_custom_css .='text-align:left;';

		$grocery_shopping_custom_css .='}';


	}else if($grocery_shopping_slider_content_alignment == 'CENTER-ALIGN'){

		$grocery_shopping_custom_css .='.blog_box{';

			$grocery_shopping_custom_css .='text-align:center; right:20%; left:50%;';

		$grocery_shopping_custom_css .='}';


	}else if($grocery_shopping_slider_content_alignment == 'RIGHT-ALIGN'){

		$grocery_shopping_custom_css .='.blog_box{';

			$grocery_shopping_custom_css .='text-align:right; right:20%; left:50%;';

		$grocery_shopping_custom_css .='}';

	}

	/*---------------------------Copyright Text alignment-------------------*/

	$grocery_shopping_copyright_text_alignment = get_theme_mod( 'grocery_shopping_copyright_text_alignment','CENTER-ALIGN');

	 if($grocery_shopping_copyright_text_alignment == 'LEFT-ALIGN'){

			$grocery_shopping_custom_css .='.copy-text p{';

				$grocery_shopping_custom_css .='text-align:left;';

			$grocery_shopping_custom_css .='}';


		}else if($grocery_shopping_copyright_text_alignment == 'CENTER-ALIGN'){

			$grocery_shopping_custom_css .='.copy-text p{';

				$grocery_shopping_custom_css .='text-align:center;';

			$grocery_shopping_custom_css .='}';


		}else if($grocery_shopping_copyright_text_alignment == 'RIGHT-ALIGN'){

			$grocery_shopping_custom_css .='.copy-text p{';

				$grocery_shopping_custom_css .='text-align:right;';

			$grocery_shopping_custom_css .='}';

		}

		/*---------------------------related Product Settings-------------------*/


$grocery_shopping_related_product_setting = get_theme_mod('grocery_shopping_related_product_setting',true);

	if($grocery_shopping_related_product_setting == false){

		$grocery_shopping_custom_css .='.related.products, .related h2{';

			$grocery_shopping_custom_css .='display: none;';

		$grocery_shopping_custom_css .='}';
	}

		/*---------------------------Scroll to Top Alignment Settings-------------------*/

	$grocery_shopping_scroll_top_position = get_theme_mod( 'grocery_shopping_scroll_top_position','Right');

	if($grocery_shopping_scroll_top_position == 'Right'){

		$grocery_shopping_custom_css .='.scroll-up{';

			$grocery_shopping_custom_css .='right: 20px;';

		$grocery_shopping_custom_css .='}';

	}else if($grocery_shopping_scroll_top_position == 'Left'){

		$grocery_shopping_custom_css .='.scroll-up{';

			$grocery_shopping_custom_css .='left: 20px;';

		$grocery_shopping_custom_css .='}';

	}else if($grocery_shopping_scroll_top_position == 'Center'){

		$grocery_shopping_custom_css .='.scroll-up{';

			$grocery_shopping_custom_css .='right: 50%;left: 50%;';

		$grocery_shopping_custom_css .='}';
	}


		/*---------------------------Pagination Settings-------------------*/


$grocery_shopping_pagination_setting = get_theme_mod('grocery_shopping_pagination_setting',true);

	if($grocery_shopping_pagination_setting == false){

		$grocery_shopping_custom_css .='.nav-links{';

			$grocery_shopping_custom_css .='display: none;';

		$grocery_shopping_custom_css .='}';
	}

