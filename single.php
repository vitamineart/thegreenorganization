
	<header class="entry-header">

		<?php the_title( '<h1 class="title-post entry-title">', '</h1>' ); ?>


	</header>


<!-- breadcrumb -->
<?php restoneu_get_breadcrumb() ?>


    <div class="restoneu-banner-area">
		<?php if( is_front_page() ) : ?>
			<?php
				$banner_type = get_theme_mod('banner_type', 'image');
				if ( $banner_type == 'video' && is_front_page() ) :
					restoneu_banner_video();
				elseif ( $banner_type == 'carousel' && is_front_page() ) :
					restoneu_banner_slider();
				else :
					restoneu_banner_background();
				endif;
			?>
		<?php else : ?>
			<div class="other-header">
				<div class="header-content other">
					<?php if(function_exists('is_shop')) : ?>
						<h3 class="title-post entry-title"><?php wp_title(''); ?></h3>
					<?php else : ?>
						<h3 class="title-post entry-title"><?php wp_title(''); ?></h3>
					<?php endif; ?>
					<hr class="divider-separator"/>
					<?php if( get_theme_mod('show_breadcrumb', 1) != 0 ): ?>
					<div class = "breadcrumb" ><?php if (class_exists('WooCommerce')){
							( (is_woocommerce())? woocommerce_breadcrumb() :restoneu_get_breadcrumb() );
						}else{
							restoneu_get_breadcrumb();
						}?></div>
					<?php endif; ?>
				</div>
			</div>
		<?php endif; ?>
	</div>








	<?php if ( has_post_thumbnail() ) : ?>
		<div class="entry-thumb">
			<?php the_post_thumbnail('restoneu-large-thumb'); ?>
		</div>
	<?php endif; ?>
