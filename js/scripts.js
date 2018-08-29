/***************** Waypoints ******************/

$(document).ready(function() {

	$('.wp1').waypoint(function() {
		$('.wp1').addClass('animated fadeInLeft');
	}, {
		offset: '75%'
	});
	$('.wp2').waypoint(function() {
		$('.wp2').addClass('animated fadeInUp');
	}, {
		offset: '75%'
	});
	$('.wp2b').waypoint(function() {
		$('.wp2b').addClass('animated fadeInDown');
	}, {
		offset: '75%'
	});
    $('.wp2c').waypoint(function() {
		$('.wp2c').addClass('animated fadeIn');
	}, {
		offset: '75%'
	});
    $('.wp3').waypoint(function() {
		$('.wp3').addClass('animated fadeInUp');
	}, {
		offset: '75%'
	});
	$('.wp3b').waypoint(function() {
		$('.wp3b').addClass('animated fadeInDown');
	}, {
		offset: '75%'
	});
    $('.wp3c').waypoint(function() {
		$('.wp3c').addClass('animated fadeIn');
	}, {
		offset: '75%'
	});
    $('.wp4').waypoint(function() {
		$('.wp4').addClass('animated fadeInUp');
	}, {
		offset: '75%'
	});
	$('.wp4b').waypoint(function() {
		$('.wp4b').addClass('animated fadeInDown');
	}, {
		offset: '75%'
	});
    $('.wp4c').waypoint(function() {
		$('.wp4c').addClass('animated fadeIn');
	}, {
		offset: '75%'
	});
    $('.wp5').waypoint(function() {
		$('.wp5').addClass('animated fadeInUp');
	}, {
		offset: '75%'
	});
	$('.wp5b').waypoint(function() {
		$('.wp5b').addClass('animated fadeInDown');
	}, {
		offset: '75%'
	});
    $('.wp5c').waypoint(function() {
		$('.wp5c').addClass('animated fadeIn');
	}, {
		offset: '75%'
	});
    $('.wp6').waypoint(function() {
		$('.wp6').addClass('animated fadeInUp');
	}, {
		offset: '75%'
	});
	$('.wp6b').waypoint(function() {
		$('.wp6b').addClass('animated fadeInDown');
	}, {
		offset: '75%'
	});
    $('.wp6c').waypoint(function() {
		$('.wp6c').addClass('animated fadeIn');
	}, {
		offset: '75%'
	});

});



/***************** Smooth Scrolling ******************/

$(function() {

	$('a[href*=#]:not([href=#])').click(function() {
		if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {

			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
			if (target.length) {
				$('html,body').animate({
					scrollTop: target.offset().top
				}, 2000);
				return false;
			}
		}
	});

});



/***************** Overlays ******************/

$(document).ready(function(){
    if (Modernizr.touch) {
        // show the close overlay button
        $(".close-overlay").removeClass("hidden");
        // handle the adding of hover class when clicked
        $(".img").click(function(e){
            if (!$(this).hasClass("hover")) {
                $(this).addClass("hover");
            }
        });
        // handle the closing of the overlay
        $(".close-overlay").click(function(e){
            e.preventDefault();
            e.stopPropagation();
            if ($(this).closest(".img").hasClass("hover")) {
                $(this).closest(".img").removeClass("hover");
            }
        });
    } else {
        // handle the mouseenter functionality
        $(".img").mouseenter(function(){
            $(this).addClass("hover");
        })
        // handle the mouseleave functionality
        .mouseleave(function(){
            $(this).removeClass("hover");
        });
    }
});

