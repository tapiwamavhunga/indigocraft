	<!-- JAVASCRIPT
    ================================================== -->
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery.js"></script>	
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/royal_preloader.min.js"></script>
<script type="text/javascript">
(function($) { "use strict";
            Royal_Preloader.config({
                mode           : 'logo',
                logo           : 'images/logo.png',
                timeout:        0,
                logo_size      : [160, 27],
                text_colour    : '#212121',
                showProgress   : true,
                showPercentage : true,
                background     : '#FFFFFF'
            });
})(jQuery);
</script>	
<script src="<?php echo get_template_directory_uri();?>/js/velocity.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/velocity.ui.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/main.js"></script> <!-- Resource jQuery -->

<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery.easing.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/retina-1.1.0.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/scroll.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/owl.carousel.min.js"></script>
<script type="text/javascript">
(function($) { "use strict";
	  var prevScroll = 0,
		  curDir = 'down',
		  prevDir = 'up';
	  
	  $(window).scroll(function(){
			if($(this).scrollTop() >= prevScroll){
			  curDir = 'down';
			  if(curDir != prevDir){
			  $('.cd-header').stop();
				$('.cd-header').animate({ top: '-150px' }, 300);
			  prevDir = curDir;
			  }
		  } else {
			  curDir = 'up';
			  if(curDir != prevDir){
			  $('.cd-header').stop();
			  $('.cd-header').animate({ top: '0px' }, 300);
			  prevDir = curDir;
			  }
		  }
		  prevScroll = $(this).scrollTop();
	  });
	})(jQuery);
</script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery.parallax-1.1.3.js"></script>
<script type="text/javascript"> 
(function($) { "use strict";   
			
			
$(document).ready(function(){
	
	$(".scroll-to-top").css("display", "none");
	//Check to see if the window is top if not then display button
	$(window).scroll(function(){
		if ($(this).scrollTop() > 500) {
			$('.scroll-to-top').fadeIn();
		} else {
			$('.scroll-to-top').fadeOut();
		}
	});
	
	//Click event to scroll to top
	$('.scroll-to-top').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});
	
});			



			
})(jQuery);
</script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/classie.js"></script> 
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/imagesloaded.pkgd.min.js"></script> 
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/masonry.js"></script> 
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/isotope.js"></script> 
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery.fs.tipper.min.js"></script> 
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/home-custom.js"></script>
<!-- End Document
================================================== -->