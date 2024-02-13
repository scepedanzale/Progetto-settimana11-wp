<?php

$adventure_travelling_tp_theme_css = '';

$adventure_travelling_theme_lay = get_theme_mod( 'adventure_travelling_tp_body_layout_settings','Full');
if($adventure_travelling_theme_lay == 'Container'){
	$adventure_travelling_tp_theme_css .='body{';
		$adventure_travelling_tp_theme_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
	$adventure_travelling_tp_theme_css .='}';
	$adventure_travelling_tp_theme_css .='@media screen and (max-width:575px){';
	$adventure_travelling_tp_theme_css .='body{';
		$adventure_travelling_tp_theme_css .='max-width: 100%; padding-right:0px; padding-left: 0px';
	$adventure_travelling_tp_theme_css .='} }';
	$adventure_travelling_tp_theme_css .='.scrolled{';
		$adventure_travelling_tp_theme_css .='width: auto; left:0; right:0;';
	$adventure_travelling_tp_theme_css .='}';
}else if($adventure_travelling_theme_lay == 'Container Fluid'){
	$adventure_travelling_tp_theme_css .='body{';
		$adventure_travelling_tp_theme_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
	$adventure_travelling_tp_theme_css .='}';
	$adventure_travelling_tp_theme_css .='@media screen and (max-width:575px){';
	$adventure_travelling_tp_theme_css .='body{';
		$adventure_travelling_tp_theme_css .='max-width: 100%; padding-right:0px; padding-left:0px';
	$adventure_travelling_tp_theme_css .='} }';
	$adventure_travelling_tp_theme_css .='.scrolled{';
		$adventure_travelling_tp_theme_css .='width: auto; left:0; right:0;';
	$adventure_travelling_tp_theme_css .='}';
}else if($adventure_travelling_theme_lay == 'Full'){
	$adventure_travelling_tp_theme_css .='body{';
		$adventure_travelling_tp_theme_css .='max-width: 100%;';
	$adventure_travelling_tp_theme_css .='}';
}

$adventure_travelling_scroll_position = get_theme_mod( 'adventure_travelling_scroll_top_position','Right');
if($adventure_travelling_scroll_position == 'Right'){
	$adventure_travelling_tp_theme_css .='#return-to-top{';
		$adventure_travelling_tp_theme_css .='right: 20px;';
	$adventure_travelling_tp_theme_css .='}';
}else if($adventure_travelling_scroll_position == 'Left'){
	$adventure_travelling_tp_theme_css .='#return-to-top{';
		$adventure_travelling_tp_theme_css .='left: 20px;';
	$adventure_travelling_tp_theme_css .='}';
}else if($adventure_travelling_scroll_position == 'Center'){
	$adventure_travelling_tp_theme_css .='#return-to-top{';
		$adventure_travelling_tp_theme_css .='right: 50%;left: 50%;';
	$adventure_travelling_tp_theme_css .='}';
}

	//Social icon Font size
$adventure_travelling_social_icon_fontsize = get_theme_mod('adventure_travelling_social_icon_fontsize');
$adventure_travelling_tp_theme_css .='.social-media a i{';
	$adventure_travelling_tp_theme_css .='font-size: '.esc_attr($adventure_travelling_social_icon_fontsize).'px !important;';
$adventure_travelling_tp_theme_css .='}';

// site title and tagline font size option
$adventure_travelling_site_title_font_size = get_theme_mod('adventure_travelling_site_title_font_size', 30);{
$adventure_travelling_tp_theme_css .='.logo h1 a, .logo p a{';
$adventure_travelling_tp_theme_css .='font-size: '.esc_attr($adventure_travelling_site_title_font_size).'px;';
	$adventure_travelling_tp_theme_css .='}';
}

$adventure_travelling_site_tagline_font_size = get_theme_mod('adventure_travelling_site_tagline_font_size', 15);{
$adventure_travelling_tp_theme_css .='.logo p{';
$adventure_travelling_tp_theme_css .='font-size: '.esc_attr($adventure_travelling_site_tagline_font_size).'px;';
	$adventure_travelling_tp_theme_css .='}';
}

$adventure_travelling_return_to_header_mob = get_theme_mod( 'adventure_travelling_return_to_header_mob',false);
	if($adventure_travelling_return_to_header_mob == true && get_theme_mod( 'adventure_travelling_return_to_header',true) != true){
		$adventure_travelling_tp_theme_css .='.return-to-header{';
		$adventure_travelling_tp_theme_css .='display:none;';
	$adventure_travelling_tp_theme_css .='} ';
	}
	if($adventure_travelling_return_to_header_mob == true){
		$adventure_travelling_tp_theme_css .='@media screen and (max-width:575px) {';
	$adventure_travelling_tp_theme_css .='.return-to-header{';
		$adventure_travelling_tp_theme_css .='display:block;';
	$adventure_travelling_tp_theme_css .='} }';
}else if($adventure_travelling_return_to_header_mob == false){
$adventure_travelling_tp_theme_css .='@media screen and (max-width:575px){';
	$adventure_travelling_tp_theme_css .='.return-to-header{';
$adventure_travelling_tp_theme_css .='display:none;';
	$adventure_travelling_tp_theme_css .='} }';
}

	$adventure_travelling_slider_buttom_mob = get_theme_mod( 'adventure_travelling_slider_buttom_mob',true);
if($adventure_travelling_slider_buttom_mob == true && get_theme_mod( 'adventure_travelling_slider_button',true) != true){
	$adventure_travelling_tp_theme_css .='#slider .more-btn{';
		$adventure_travelling_tp_theme_css .='display:none;';
	$adventure_travelling_tp_theme_css .='} ';
}
	if($adventure_travelling_slider_buttom_mob == true){
		$adventure_travelling_tp_theme_css .='@media screen and (max-width:575px) {';
	$adventure_travelling_tp_theme_css .='#slider .more-btn{';
		$adventure_travelling_tp_theme_css .='display:block;';
	$adventure_travelling_tp_theme_css .='} }';
}else if($adventure_travelling_slider_buttom_mob == false){
	 $adventure_travelling_tp_theme_css .='@media screen and (max-width:575px){';
	$adventure_travelling_tp_theme_css .='#slider .more-btn{';
		$adventure_travelling_tp_theme_css .='display:none;';
	$adventure_travelling_tp_theme_css .='} }';
}

$adventure_travelling_footer_widget_image = get_theme_mod('adventure_travelling_footer_widget_image');
	if($adventure_travelling_footer_widget_image != false){
		$adventure_travelling_tp_theme_css .='#footer{';
			$adventure_travelling_tp_theme_css .='background: url('.esc_attr($adventure_travelling_footer_widget_image).');';
		$adventure_travelling_tp_theme_css .='}';
	}

	$adventure_travelling_related_product = get_theme_mod('adventure_travelling_related_product',true);
		if($adventure_travelling_related_product == false){
			$adventure_travelling_tp_theme_css .='.related.products{';
				$adventure_travelling_tp_theme_css .='display: none;';
			$adventure_travelling_tp_theme_css .='}';
		}

//menu font size
$adventure_travelling_menu_font_size = get_theme_mod('adventure_travelling_menu_font_size', 15);{
$adventure_travelling_tp_theme_css .='.main-navigation a, .main-navigation li.page_item_has_children:after, .main-navigation li.menu-item-has-children:after{';
	$adventure_travelling_tp_theme_css .='font-size: '.esc_attr($adventure_travelling_menu_font_size).'px;';
$adventure_travelling_tp_theme_css .='}';
}

// menu text transform
$adventure_travelling_menu_text_tranform = get_theme_mod( 'adventure_travelling_menu_text_tranform','Uppercase');
if($adventure_travelling_menu_text_tranform == 'Uppercase'){
$adventure_travelling_tp_theme_css .='.main-navigation a {';
	$adventure_travelling_tp_theme_css .='text-transform: uppercase;';
$adventure_travelling_tp_theme_css .='}';
}else if($adventure_travelling_menu_text_tranform == 'Lowercase'){
$adventure_travelling_tp_theme_css .='.main-navigation a {';
	$adventure_travelling_tp_theme_css .='text-transform: lowercase;';
$adventure_travelling_tp_theme_css .='}';
}
else if($adventure_travelling_menu_text_tranform == 'Capitalize'){
$adventure_travelling_tp_theme_css .='.main-navigation a {';
	$adventure_travelling_tp_theme_css .='text-transform: capitalize;';
$adventure_travelling_tp_theme_css .='}';
}


//======================= slider Content layout ===================== //
 
$adventure_travelling_slider_content_layout = get_theme_mod('adventure_travelling_slider_content_layout', 'LEFT-ALIGN'); 
$adventure_travelling_tp_theme_css .= '#slider .carousel-caption{';
switch ($adventure_travelling_slider_content_layout) {
    case 'LEFT-ALIGN':
        $adventure_travelling_tp_theme_css .= 'text-align:left; right: 40%; left: 15%';
        break;
    case 'CENTER-ALIGN':
        $adventure_travelling_tp_theme_css .= 'text-align:center; left: 35%; right: 35%';
        break;
    case 'RIGHT-ALIGN':
    $adventure_travelling_tp_theme_css .= 'text-align:right; left: 40%; right: 15%;';
    break;
    default:
        $adventure_travelling_tp_theme_css .= 'text-align:left; right: 40%; left: 15%';
        break;
}
$adventure_travelling_tp_theme_css .= '}';

$adventure_travelling_slider_content_layout = get_theme_mod('adventure_travelling_slider_content_layout', 'LEFT-ALIGN'); 
$adventure_travelling_tp_theme_css .= '#slider .inner_carousel{';
switch ($adventure_travelling_slider_content_layout) {
    case 'LEFT-ALIGN':
        $adventure_travelling_tp_theme_css .= 'border-left: 5px solid #ffcc05;height:50px';
        break;
    case 'CENTER-ALIGN':
        $adventure_travelling_tp_theme_css .= 'border-left: 5px solid #ffcc05;height:50px';
        break;
    case 'RIGHT-ALIGN':
    	$adventure_travelling_tp_theme_css .= ' border-right: 5px solid #ffcc05;height:50px;padding-right:12px;';
    break;
    default:
        $adventure_travelling_tp_theme_css .= 'border-left: 5px solid #ffcc05;height:50px';
    	break;
}
$adventure_travelling_tp_theme_css .= '}';