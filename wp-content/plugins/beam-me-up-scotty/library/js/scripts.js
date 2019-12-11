( function( $ ) {
    
    $( document ).ready( function() {
    	
    	$('.otb-beam-me-up-scotty').bind('click', function() {
			$('body').addClass('animating');
    		$('html, body').stop().animate({
    			scrollTop:0
    		},
    		'slow',
    		function () {
    			$('body').removeClass('animating');
    		});
    		return false;
    	});
    	
    });
    
    $(window).load(function() {
    	setBackToTopButtonVisibility();
    });
    
    $(window).scroll(function(e) {
		setBackToTopButtonVisibility();
    });
    
    function setBackToTopButtonVisibility() {
    	if ($(window).scrollTop() > $(window).height() / 2 ) {
    		$(".otb-beam-me-up-scotty").removeClass('gone');
    		$(".otb-beam-me-up-scotty").addClass('visible');
    	} else {
    		$(".otb-beam-me-up-scotty").removeClass('visible');
    		$(".otb-beam-me-up-scotty").addClass('gone');
    	}
    }
    
} )( jQuery );