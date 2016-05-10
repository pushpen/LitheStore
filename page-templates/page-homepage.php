<?php
/**
 * Template Name: Homepage
 *
 * This is the template that displays WooCommerce content.
 * @package LitheStore
 */

get_header(); ?>
	
	<div id="page" class="hfeed site">
		    
	  <?php
	  /* Product Categories
	   * Hook lithestore_product_categories
	   * Hooked lithestore_product_categories()  
	   */ 
	  do_action( 'lithestore_product_categories'); 
	  ?>
	  
	  <div id="content" class="site-content ls-grid-1000">
	  	<?php 
	  	/* Featured Products
	     * Hook lithestore_featured_products
	     * Hooked lithestore_featured_products()  
	     */ 
	  	 do_action( 'lithestore_featured_products');
	  	 
	  	/* Popular Products
	     * Hook lithestore_popular_products
	     * Hooked lithestore_popular_products()  
	     */
	     do_action( 'lithestore_popular_products');
	     
	    /* The wrapper before main content
	     * Hook lithestore_before_main_content
	     * Hooked lithestore_before_main_content()  
	     */
		 do_action( 'lithestore_before_main_content');
		 
		/* Recent Products
	     * Hook lithestore_recent_products
	     * Hooked lithestore_recent_products()  
	     */
         do_action( 'lithestore_recent_products'); 
         
        /* OnSale Products
	     * Hook lithestore_on_sale_products
	     * Hooked lithestore_on_sale_products()  
	     */
         do_action( 'lithestore_on_sale_products'); 
         
        /* The wrapper after main content
	     * Hook lithestore_after_main_content
	     * Hooked lithestore_after_main_content()  
	     */
		 do_action( 'lithestore_after_main_content');
		 
		 get_sidebar('home');
		?>
	  </div>
	</div>
	
<?php get_footer(); ?>