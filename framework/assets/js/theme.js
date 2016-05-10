/**
 * theme.js
 * Scripts for the theme.
 * 
 */
jQuery(document).ready(function($){
	/*-------------------------
	Basic Theme Related Scripts	
	--------------------------*/
	
	/*Clone Primary menu items to the mobile menu*/
	$('#mobile_menu ul').append($('#primary-menu').html());
	$('#mobile_menu .menu-item-has-children').addClass('pushy-submenu');
	
	$('.pushy .menu-item-has-children > a').each(function(){
		$(this).after('<a href="javascript:void(0);" class="open-submeu"><i class="fa fa-plus"></i></a>');
	});
	
	  $('.pushy ul li a.open-submeu').toggle(function(){
		  $(this).next().slideDown();
		  $(this).children('i').removeClass('fa-plus').addClass('fa-minus');
	  },function(){
		  $(this).next().slideUp();
		  $(this).children('i').removeClass('fa-minus').addClass('fa-plus');
	  });
	
	/*Sticky Top*/
	$(window).on('scroll',function(){
	
	        /*Sticky Top*/
	        if($(document).scrollTop() > 20){
		      $('#ls-topbar').addClass('withbg');
			}else{
			  $('#ls-topbar').removeClass('withbg');
			}
	});
	
	/*Apply the post format to the comment content elements*/
	$('.comment-content').addClass('entry-content');
	
	/*Popup*/
    function lithestore_popup(button,obj,status){
	    $(button).on('click',function(){
	      if(status=='open'){
		   $(obj).add('.ls_popup_overlay').fadeIn();
		  }else{
		   $(obj).add('.ls_popup_overlay').fadeOut();  
		  }
	    });
    }
    lithestore_popup('#product_search','#ls_popup','open');
    lithestore_popup('.ls_popup_overlay','#ls_popup','close');
	
	
	/*-------------------------
	WooCommerce Related Scripts	
	--------------------------*/
	
	/*Center the cart button in the product thumbnail*/
	$('.woocommerce ul.products li.product .button.add_to_cart_button').each(function(){
		var buttonWidth=$(this).width();
		var imageHeight=$(this).prev().children('img').height();
		var containerHeight=$(this).parent().height();
		var buttonLeftOffset=buttonWidth/2;
		var buttonTopOffset=(containerHeight-imageHeight)/2
		$(this).css({
		   marginLeft: '-'+buttonLeftOffset+'px',
		   marginTop: '-'+buttonTopOffset+'px'
		});
	});
	$('.woocommerce ul.products li.product .button.add_to_cart_button').prepend('<i class="fa fa-shopping-cart"></i>');
	
    /*When hover on the product thumbnail, display the cart button*/
    $('.woocommerce ul.products li.product a img').hover(
      function(){$(this).parent().next().show();$(this).css('opacity',.3);},
      function(){$(this).parent().next().hide();$(this).css('opacity',1);}
    );
    
    $('.woocommerce ul.products li.product .button.add_to_cart_button').hover(
       function(){$(this).show();$(this).prev().children('img').css('opacity',.3);},
       function(){$(this).hide();$(this).prev().children('img').css('opacity',1);}
    );
	
});