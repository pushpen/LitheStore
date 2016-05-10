<?php
/**
 * Welcome screen intro template
 */
?>
<?php
$lithestore = wp_get_theme( 'lithestore' );

?>
<div class="col two-col" style="overflow: hidden;">
	<h1><?php echo '<strong>LitheStore</strong> <sup class="version">' . esc_attr( $lithestore['Version'] ) . '</sup>'; ?></h1>


	<div class="col boxed enrich">
		<h2><?php esc_html_e( 'Build a Elegant online store.', 'lithestore'); ?></h2>

		<p><?php esc_html_e( 'LitheStore is a free elegant E-commerce WordPress theme based on WooCommerce. It\'s easy to set up for WordPress beginners if you follow these steps below.', 'lithestore'); ?></p>
        
        <h3><?php esc_html_e( 'Getting Started Step by step', 'lithestore'); ?></h3>
        <ol>
		<?php if ( class_exists( 'WooCommerce' ) ) { ?>
			<li><span class="activated"><span class="dashicons dashicons-yes"></span> <?php printf( esc_html__( '%s is activated', 'lithestore' ), 'WooCommerce' ); ?></span></li>
		<?php } else { ?>
			<li><a href="<?php echo esc_url( wp_nonce_url( self_admin_url( 'update.php?action=install-plugin&plugin=woocommerce' ), 'install-plugin_woocommerce' ) ); ?>" class="button button-primary"><?php printf( esc_html__( 'Install %s', 'lithestore' ), 'WooCommerce' ); ?></a></li>
		<?php } ?>
		<li><?php printf(__('Download <a href="%s" target="_blank">LitheStore dummy data</a>','lithestore'),'http://demo.themevan.com/lithestore/wp-content/uploads/sites/16/2016/01/dummy-data.zip');?></li>
		
		<li>
		<?php printf(__('Unzip the package, you will get two xml files. Go to <a href="%s" target="_blank">Tools > Import</a> page, upload those two xml files.','lithestore'), home_url('/').'/wp-admin/admin.php?import=wordpress');?>
		</li>
		<li>
		<?php printf(__('Go to <a href="%s" target="_blank">Appearance > Menus</a>, select "Primary Menu", and check "primary menu" for "Theme locations".','lithestore'), home_url('/').'wp-admin/nav-menus.php');?>
		
		<p><a href="<?php echo get_template_directory_uri();?>/framework/functions/welcome/img/menu-setting.jpg" target="_blank"><img src="<?php echo get_template_directory_uri();?>/framework/functions/welcome/img/menu-setting.jpg" /></a></p></li>
		
		<li>
		<?php printf(__("Go to <a href='%s' target='_blank'>Settings > Reading</a>, select the 'Home' as the front page.That's it! Your website will look as same as the <a href='%s' target='_blank'>demo site</a>. You can modify the posts or products content based on the dummy data.",'lithestore'), home_url('/').'wp-admin/nav-menus.php','http://demo.themevan.com/lithestore/');?>
		
		 </li>
		 
		 <li>		 		 
		 <?php printf(__('There are some custom options included in the <a href="%s" target="_blank">Appearance > Customize</a> that allow you to change the fonts or color.
','lithestore'), home_url('/').'wp-admin/customize.php');?>
		 </li>
        </ol>
	</div>

	<div class="col boxed faq">
	    <h2>Premium Version: Focux Theme</h2>
	    <a href="http://themeforest.net/item/focux-multipurpose-single-product-woocommerce-wordpress-theme/15322470?ref=themevan" target="_blank"><img src="http://www.themevan.com/main/wp-content/uploads/edd/2016/05/focux-1024x933.jpg" /></a>
	      <p><?php esc_html_e('The premium version Focux is based on Lithestore framework. We include Visual Composer Page Builder and Revolution Slider into this version, and there are more amazing new features in it.','lithestore');?></p>
	      <p> <a href="http://focuxtheme.com" target="_blank" class="button button-primary"><?php esc_html_e('Learn More','lithestore');?></a> <a href="http://themeforest.net/item/focux-multipurpose-single-product-woocommerce-wordpress-theme/15322470?ref=themevan" target="_blank" class="button"><?php esc_html_e('Buy Now','lithestore');?></a></p>
	    
		<h2><?php esc_html_e( 'REQUENTLY ASKED QUESTIONS', 'lithestore' ); ?></h2>
		<div class="questions">
		    <div class="item">
			  <h4><?php esc_html_e("Why I can't import the dummy data?",'lithestore');?></h4>
			  <p><?php esc_html_e("You'd better deactivated all plugins before you import the dummy data. After the data is imported, then reactivate the plugins.","lithestore");?></p>
			
			</div>
		
			<div class="item">
			  <h4><?php esc_html_e("What's the safe way to customize the theme without lose my changes when I upgrade the theme in the future?",'lithestore');?></h4>
			  <p><?php esc_html_e("First of all, We strongly suggest you don't modify the LitheStore parent theme, otherwise, you will not able to upgrade the theme smoothly in the future. ",'lithestore');?> </p>
			  <p><?php printf(__("The best way is create your own child theme, you can put all your custom changes in your child theme folder without worry about your custom codes will be lost when you upgrade the parent theme in the future. Learn more about the <a href='%s' target='_blank'>Child Theme in WordPress Codex</a>. ",'lithestore'),'https://codex.wordpress.org/Child_Themes');?></p>
			  
			  <p>
			  <?php printf(__("If you don't want to create child theme, we recommend you to install <a href='%s' target='_blank'>Custom css-js-php plugin</a>, it allows you to insert your own custom CSS, JS and PHP functions through your WordPress backend. ",'lithestore'),'https://wordpress.org/plugins/custom-css-js-php/');?>
			  </p>
			</div>
			
			<div class="item">
			  <h4><?php esc_html_e("How to remove the specific sections from homepage?",'lithestore');?></h4>
			  <p><?php esc_html_e("You can use the remove_action() to remove the  the specific sections. For example, you can use the following code to remove the product categories section.",'lithestore');?> </p>
			  <p><code>&lt;?php remove_action( 'lithestore_product_categories', 'lithestore_product_categories');?&gt;</code></p>
			  <p><?php printf(__("More hooks you can find in %s",'lithestore'),'/framework/hooks.php');?> </p>
			  
			</div>
		</div>
		
			
		
	</div>
	
</div>


<div class="col two-col" style="overflow: hidden;">
   <div class="col boxed news">
		<h2><?php printf( esc_html__( 'Latest %s News', 'lithestore' ), 'lithestore' ); ?></h2>
				<?php
				$rss		= fetch_feed( 'http://www.themevan.com/category/blog/themevan-news/feed/' );
				$rss_items	= array();

				if ( ! is_wp_error( $rss ) ) {
					$maxitems 	= $rss->get_item_quantity( 5 );
					$rss_items 	= $rss->get_items( 0, $maxitems );
				}

				foreach ( $rss_items as $item ) : ?>
					<h5>
						<a href="<?php echo esc_url( $item->get_permalink() ); ?>">
							<?php echo esc_html( $item->get_title() ); ?>
						</a>
					</h5>
					<span class="date"><?php echo esc_attr( $item->get_date( 'j F Y' ) ); ?></span>
				<?php endforeach; ?>
			
		</div>
		
		
		<div class="col boxed themes">
		<h2><?php printf( esc_html__( 'The Other %s Themes', 'lithestore' ), 'lithestore' ); ?></h2>
			<div class="themes">
			  <a href="http://themeforest.net/item/citynews-comprehensive-newspaper-wordpress-theme/12575848?ref=themevan" target="_blank"><img src="http://www.themevan.com/main/wp-content/uploads/2015/09/screenshot-citynews-theme-461x292.jpg" /></a>
			  
			  <a href="http://www.themevan.com/item/magicbook" target="_blank"><img src="http://www.themevan.com/main/wp-content/uploads/2014/09/magicbook-thumbnail1.jpg" /></a>
			  
			   <a href="http://www.themevan.com/item/simplekey" target="_blank"><img src="http://www.themevan.com/main/wp-content/uploads/2014/03/simplekey-thumbnail1.jpg" /></a>
			   
			   <a href="http://www.themevan.com/item/wonders" target="_blank"><img src="http://www.themevan.com/main/wp-content/uploads/2014/11/default1.jpg" /></a>
			   
			   <a href="http://www.themevan.com/themes" target="_blank" class="button button-primary"><?php esc_html_e('More Themes','lithestore');?></a>
			 
			</div>
			
		</div>

</div>