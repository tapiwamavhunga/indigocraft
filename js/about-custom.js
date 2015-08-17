(function($) { "use strict";

	
	//Top Sections Fullscreen	
				
	$(function(){"use strict";
		$('#top-section, .about-top-section').css({'height':($(window).height())+'px'});
		$(window).resize(function(){
		$('#top-section, .about-top-section').css({'height':($(window).height())+'px'});
		});
	});


		
	/* Scroll Too */
	
	$(document).ready(function(){"use strict";
		$(".scroll").click(function(event){

			event.preventDefault();

			var full_url = this.href;
			var parts = full_url.split("#");
			var trgt = parts[1];
			var target_offset = $("#"+trgt).offset();
			var target_top = target_offset.top;

			$('html, body').animate({scrollTop:target_top}, 1000);
		});

		
	//Navigation	

		var isLateralNavAnimating = false;
		
		//open/close lateral navigation
		$('.cd-nav-trigger').on('click', function(event){
			event.preventDefault();
			//stop if nav animation is running 
			if( !isLateralNavAnimating ) {
				if($(this).parents('.csstransitions').length > 0 ) isLateralNavAnimating = true; 
				
				$('body').toggleClass('navigation-is-open');
				$('.cd-navigation-wrapper').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
					//animation is over
					isLateralNavAnimating = false;
				});
			}
		});


		
		//Skills Counter 

        $('.counter-skills').counterUp({
            delay: 100,
            time: 3000
        });	


		//Parallax
	
		$('.parallax-section-quotes').parallax("50%", 0.4);	
	
	
	
		//Tooltip
	
		$(".tipped").tipper();	
	
	
	
    });	
	

 
  })(jQuery); 