<?php
/**
* Header menu items and logo
*
* @package Salient WordPress Theme
* @subpackage Partials
* @version 10.5
*/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $woocommerce;

$nectar_header_options = nectar_get_header_variables();
$nectar_options        = get_nectar_theme_options();

?>
<script src="https://kit.fontawesome.com/03e73a5fd2.js"></script>
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.csss"> -->
<header id="top">
	<div class="container">
		<div class="row">
			<div class="col span_3">
				<a href="/home" class="logo">
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 130 44" style="enable-background:new 0 0 130 44;" xml:space="preserve">
						<path d="M11.5,37.6c0,3.1-2.5,5.6-5.6,5.6s-5.6-2.5-5.6-5.6c0-3.1,2.5-5.6,5.6-5.6S11.5,34.5,11.5,37.6"></path>
						<path d="M30.2,37.7c0,2.2-1.8,4-4,4s-4-1.8-4-4c0-2.2,1.8-4,4-4S30.2,35.5,30.2,37.7"></path>
						<path d="M44.7,37.7c0,1-0.8,1.8-1.8,1.8s-1.8-0.8-1.8-1.8c0-1,0.8-1.8,1.8-1.8S44.7,36.7,44.7,37.7"></path>
						<path d="M25.1,25.8c-1,0-1.7-0.8-1.7-1.7v-7.4c0-2.5-1.2-4.5-3.9-4.5s-4.4,2.1-4.4,4.5v7.3c0,1-0.7,1.7-1.7,1.7c-1,0-1.7-0.8-1.7-1.7v-7.4c0-2.5-1.3-4.5-4-4.5c-2.8,0-4.2,2.1-4.2,4.5v7.3c0,1-0.7,1.7-1.7,1.7c-1,0-1.7-0.8-1.7-1.7V11c0-1,0.7-1.8,1.7-1.8c1.2,0,1.7,0.8,1.7,1.8v1.2c1-1.9,3-3.1,5.2-3.1c2.6,0,4.6,1.3,5.6,3.3c1.4-2.2,3.5-3.3,6.1-3.3c4.4,0,6.6,3.1,6.6,7.4v7.6C26.9,25,26.2,25.8,25.1,25.8"></path>
						<path d="M31.7,25.8c-1,0-1.7-0.8-1.7-1.7V11c0-1,0.7-1.7,1.7-1.7c1,0,1.7,0.8,1.7,1.7v13.1C33.4,25,32.7,25.8,31.7,25.8z M31.7,2.7c1.1,0,2,0.9,2,2s-0.9,2-2,2c-1.1,0-2-0.9-2-2S30.6,2.7,31.7,2.7L31.7,2.7z"></path>
						<path d="M43.1,15.2l4.4-5.4c0.3-0.3,0.7-0.5,1.1-0.5c1,0,1.6,0.6,1.6,1.5c0,0.3-0.1,0.7-0.4,1L45,17.5l4.9,5.8c0.3,0.3,0.4,0.6,0.4,1c0,0.8-0.7,1.5-1.5,1.5c-0.5,0-0.9-0.2-1.2-0.6l-4.4-5.5l-4.4,5.5c-0.3,0.4-0.7,0.6-1.2,0.6c-0.8,0-1.5-0.7-1.5-1.5c0-0.4,0.1-0.7,0.4-1l4.9-5.8l-4.8-5.7c-0.3-0.3-0.4-0.7-0.4-1c0-0.9,0.6-1.5,1.6-1.5c0.5,0,0.8,0.2,1.1,0.5L43.1,15.2"></path>
						<path d="M61.2,12c-3,0-4.9,2.6-4.9,5.6c0,2.9,2,5.6,4.9,5.6c3,0,4.9-2.2,4.9-5.6C66.1,14.2,64.2,12,61.2,12z M61.9,26c-2.5,0-4.5-1.3-5.6-3.2V31c0,1-0.7,1.7-1.7,1.7c-1,0-1.7-0.8-1.7-1.7V11c0-1,0.6-1.7,1.6-1.7s1.7,0.8,1.7,1.8v1.3c1.1-1.9,3.3-3.2,5.7-3.2c4.2,0,7.6,3.5,7.6,8.4C69.5,22.6,66.1,26,61.9,26L61.9,26z"></path>
						<path d="M79.3,12.1c-2.9,0-5,2.5-5,5.5c0,3.2,1.7,5.5,5,5.5c3,0,5-2.6,5-5.5C84.2,14.1,82.2,12.1,79.3,12.1z M87.7,24.1c0,1-0.7,1.7-1.7,1.7c-1,0-1.7-0.8-1.7-1.7v-0.8c-1,1.5-3,2.7-5.3,2.7c-5.1,0-8.1-3.8-8.1-8.4c0-4.6,3.3-8.4,8.5-8.4c5.3,0,8.4,3.5,8.4,8.4V24.1L87.7,24.1z"></path>
						<path d="M98,9.1c4.4,0,7.7,3.4,7.7,7.7v7.3c0,1-0.8,1.7-1.7,1.7c-1,0-1.7-0.8-1.7-1.7v-7.7c0-2.3-1.8-4.1-4.2-4.1c-2.4,0-4.2,1.8-4.2,4.1v7.7c0,1-0.8,1.7-1.7,1.7c-1,0-1.7-0.8-1.7-1.7v-7.3C90.4,12.5,93.6,9.1,98,9.1"></path>
						<path d="M116,11.9c-2.5,0-4.2,1.8-4.6,4.1h9C120.1,13.7,118.5,11.9,116,11.9z M123.6,17.6c0,0.6-0.3,1.2-1.3,1.2h-10.9c0.2,2.5,1.9,4.4,4.9,4.4c1.9,0,3-0.7,4.2-1.8c0.3-0.3,0.7-0.6,1.1-0.6c0.8,0,1.4,0.6,1.4,1.4c0,0.4-0.2,0.7-0.4,1c-1.4,1.6-3.9,2.7-6.5,2.7c-5.5,0-8.3-3.8-8.3-8.4c0-4.8,3.5-8.4,8.2-8.4C120.6,9.1,123.6,12.9,123.6,17.6L123.6,17.6z"></path>
						<path d="M127.7,25.8c-1,0-1.7-0.8-1.7-1.7V2.5c0-1,0.7-1.7,1.7-1.7c1,0,1.7,0.8,1.7,1.7v21.6C129.4,25,128.7,25.8,127.7,25.8"></path>
					</svg>
				</a>
				
				<?php
				if ( $nectar_header_options['header_format'] === 'centered-menu-bottom-bar' ) {
					$has_pull_left_menu = ( has_nav_menu( 'top_nav_pull_left' ) ) ? 'true' : 'false';
					?>
					<nav class="left-side" data-using-pull-menu="<?php echo esc_attr( $has_pull_left_menu ); ?>">
						<?php
						// Pull left menu.
						if ( has_nav_menu( 'top_nav_pull_left' ) ) {
							wp_nav_menu(
								array(
									'walker'          => new Nectar_Arrow_Walker_Nav_Menu(),
									'theme_location'  => 'top_nav_pull_left',
									'container'       => '',
									'container_class' => 'pull-left-wrap',
									'items_wrap'      => '<ul id="%1$s" class="sf-menu">%3$s</ul>',
								)
							);
						}
						nectar_hook_pull_right_menu_items();
						?>
						<ul class="nectar-social"><li id="social-in-menu" class="button_social_group"><?php nectar_header_social_icons( 'main-nav' ); ?> </li></ul> 
					</nav>
					<nav class="right-side">
						<ul class="buttons" data-user-set-ocm="<?php echo esc_attr( $nectar_header_options['user_set_side_widget_area'] ); ?>"><?php nectar_header_button_items(); ?></ul>
						<?php if ( $nectar_header_options['side_widget_area'] === '1' || $nectar_header_options['side_widget_class'] === 'simple' ) { ?>
							<div class="slide-out-widget-area-toggle mobile-icon <?php echo esc_attr( $nectar_header_options['side_widget_class'] ); ?>" data-icon-animation="simple-transform">
								<div> <a href="#sidewidgetarea" aria-label="<?php echo esc_attr__('Navigation Menu', 'salient'); ?>" aria-expanded="false" class="closed"> <span aria-hidden="true"> <i class="lines-button x2"> <i class="lines"></i> </i> </span> </a> </div> 
							</div>
						<?php } ?>
					</nav>
				<?php } ?>
			</div><!--/span_3-->
			
			<div class="col span_9 col_last">
				<?php
				
				if ( $nectar_header_options['header_search'] != 'false' ) {
					?>
					<a class="mobile-search" href="#searchbox"><span class="nectar-icon icon-salient-search" aria-hidden="true"></span></a>
					<?php
				}
				
				if ( $nectar_header_options['user_account_btn'] != 'false' ) {
					?>
					<a class="mobile-user-account" href="<?php echo esc_url( $nectar_header_options['user_account_btn_url'] ); ?>"><span class="normal icon-salient-m-user" aria-hidden="true"></span></a>
					<?php
				}
				
				if ( ! empty( $nectar_options['enable-cart'] ) && $nectar_options['enable-cart'] === '1' ) {
					
					if ( $woocommerce ) {
						?>
						
						<a id="mobile-cart-link" href="<?php echo esc_url( wc_get_cart_url() ); ?>"><i class="icon-salient-cart"></i><div class="cart-wrap"><span><?php echo esc_html( $woocommerce->cart->cart_contents_count ); ?> </span></div></a>
						<?php
					}
				}
				
				
				if ( $nectar_header_options['side_widget_area'] === '1' || $nectar_header_options['side_widget_class'] === 'simple' ) {
					?>
					<div class="slide-out-widget-area-toggle mobile-icon <?php echo esc_attr( $nectar_header_options['side_widget_class'] ); ?>" data-icon-animation="simple-transform">
						<div> <a href="#sidewidgetarea" aria-label="<?php echo esc_attr__('Navigation Menu', 'salient'); ?>" aria-expanded="false" class="closed"> <span aria-hidden="true"> <i class="lines-button x2"> <i class="lines"></i> </i> </span> </a> </div> 
					</div>
				<?php } ?>
				
				<?php
				if ( $nectar_header_options['header_format'] === 'left-header' ) {
					echo '<div class="nav-outer">';
				}
				?>
					
					<nav>
						
						<ul class="sf-menu">	
							<?php
							if ( $nectar_header_options['has_main_menu'] === 'true' ) {
								wp_nav_menu(
									array(
										'walker'         => new Nectar_Arrow_Walker_Nav_Menu(),
										'theme_location' => 'top_nav',
										'container'      => '',
										'items_wrap'     => '%3$s',
									)
								);
							} else {
								echo '<li class="no-menu-assigned"><a href="#">No menu assigned</a></li>';
							}
							
							if ( ! empty( $nectar_options['enable_social_in_header'] ) && 
							$nectar_options['enable_social_in_header'] === '1' && 
							$nectar_header_options['using_secondary'] !== 'header_with_secondary' && 
							$nectar_header_options['header_format'] !== 'menu-left-aligned' && 
							$nectar_header_options['header_format'] !== 'centered-menu' && 
							$nectar_header_options['header_format'] !== 'left-header' && 
							$nectar_header_options['header_format'] !== 'centered-menu-bottom-bar' ) {
								
								echo '<li id="social-in-menu" class="button_social_group">';
								nectar_header_social_icons( 'main-nav' );
								echo '</li>';
							}
							
							?>
						</ul>
						

						<?php 
						if ( $nectar_header_options['header_format'] !== 'menu-left-aligned' && 
						$nectar_header_options['header_format'] !== 'centered-menu-bottom-bar' ) { ?>
							<ul class="buttons sf-menu" data-user-set-ocm="<?php echo esc_attr( $nectar_header_options['user_set_side_widget_area'] ); ?>">
								
								<?php
								
								if ( ! empty( $nectar_options['enable_social_in_header'] ) && 
								$nectar_options['enable_social_in_header'] === '1' && 
								$nectar_header_options['using_secondary'] !== 'header_with_secondary' && 
								$nectar_header_options['header_format'] === 'centered-menu' ) {
									
									echo '<li id="social-in-menu" class="button_social_group">';
									nectar_header_social_icons( 'main-nav' );
									echo '</li>';
								}
								
								// Pull right.
								if ( $nectar_header_options['header_format'] === 'centered-menu' && 
								$nectar_header_options['using_pr_menu'] === 'true' ||
								$nectar_header_options['header_format'] === 'centered-logo-between-menu' && 
								$nectar_header_options['using_pr_menu'] === 'true' ) {
									wp_nav_menu(
										array(
											'walker'         => new Nectar_Arrow_Walker_Nav_Menu(),
											'theme_location' => 'top_nav_pull_right',
											'container'      => '',
											'items_wrap'     => '%3$s',
										)
									);
									nectar_hook_pull_right_menu_items();
								}
								
								nectar_header_button_items();
								?>
								
							</ul>
						<?php } ?>
						
					</nav>
					
					<?php
					if ( $nectar_header_options['header_format'] === 'left-header' ) {
						echo '</div>';
					}
					
					if ( $nectar_header_options['header_format'] === 'centered-menu' || 
					$nectar_header_options['header_format'] === 'centered-logo-between-menu' ) {
						nectar_logo_spacing(); 
					}
					?>
					
				</div><!--/span_9-->
				
				<?php if ( $nectar_header_options['header_format'] === 'menu-left-aligned' ) { ?>
					<div class="right-aligned-menu-items">
						<nav>
							<ul class="buttons sf-menu" data-user-set-ocm="<?php echo esc_attr( $nectar_header_options['user_set_side_widget_area'] ); ?>">
								
								<?php
								// Pull right.
								if ( $nectar_header_options['using_pr_menu'] === 'true' ) {
									wp_nav_menu(
										array(
											'walker'         => new Nectar_Arrow_Walker_Nav_Menu(),
											'theme_location' => 'top_nav_pull_right',
											'container'      => '',
											'items_wrap'     => '%3$s',
										)
									);
									nectar_hook_pull_right_menu_items();
								}
								
								nectar_header_button_items();
								?>
								
							</ul>
							
							<?php
							if ( ! empty( $nectar_options['enable_social_in_header'] ) && 
							$nectar_options['enable_social_in_header'] === '1' && 
							$nectar_header_options['using_secondary'] !== 'header_with_secondary' ) {
								
								echo '<ul><li id="social-in-menu" class="button_social_group">';
								nectar_header_social_icons( 'main-nav' );
								echo '</li></ul>';
							}
							?>
						</nav>
					</div><!--/right-aligned-menu-items-->
					
					<?php
				} elseif ( $nectar_header_options['header_format'] === 'left-header' ) {
					
					if ( ! empty( $nectar_options['enable_social_in_header'] ) && 
					$nectar_options['enable_social_in_header'] === '1' && 
					$nectar_header_options['using_secondary'] !== 'header_with_secondary' ) {
						echo '<div class="button_social_group"><ul><li id="social-in-menu">';
						nectar_header_social_icons( 'main-nav' );
						echo '</li></ul></div>';
					}
				}
				?>
				
			</div><!--/row-->
			<?php
			if( $nectar_header_options['side_widget_class'] === 'simple' ) {
				get_template_part( 'includes/partials/header/classic-mobile-nav' );
			}
			?>
		</div><!--/container-->
	</header>
