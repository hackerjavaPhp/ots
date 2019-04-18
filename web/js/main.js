/*price range*/

 $('#sl2').slider();

	var RGBChange = function() {
	  $('#RGB').css('background', 'rgb('+r.getValue()+','+g.getValue()+','+b.getValue()+')')
	};	
		
/*scroll to top*/

$(document).ready(function(){
	$(function () {
		$.scrollUp({
	        scrollName: 'scrollUp', // Element ID
	        scrollDistance: 300, // Distance from top/bottom before showing element (px)
	        scrollFrom: 'top', // 'top' or 'bottom'
	        scrollSpeed: 300, // Speed back to top (ms)
	        easingType: 'linear', // Scroll to top easing (see http://easings.net/)
	        animation: 'fade', // Fade, slide, none
	        animationSpeed: 200, // Animation in speed (ms)
	        scrollTrigger: false, // Set a custom triggering element. Can be an HTML string or jQuery object
					//scrollTarget: false, // Set a custom target element for scrolling to the top
	        scrollText: '<i class="fa fa-angle-up"></i>', // Text for element, can contain HTML
	        scrollTitle: false, // Set a custom <a> title if required.
	        scrollImg: false, // Set true to use image
	        activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
	        zIndex: 2147483647 // Z-Index for the overlay
		});
	});
});

//custom accordion && cookie
$(function () {

	$('.catalog li ul').prev().addClass('lp');

	$('.lp').click(function (e) {
		e.preventDefault();

		if( $(e.target).siblings('ul').css('display') === 'none' ) {
			$(".catalog li ul").slideUp();
			$(e.target).siblings('ul').slideDown();

			// получить значение существующих кукисов можно так:
			$.cookie('cookie_name', $(e.target).text());
			// если запрашиваемых кукисов не существует, то эта функция вернет null

		} else {
			$(".catalog li ul").slideUp();
			// а так можно удалить кукисы
			$.cookie('cookie_name', null);
		}

	});

	$(".lp").each(function(i,elem) {
		if( $(elem).text() == $.cookie('cookie_name') ) {
			$(elem).siblings('ul').css('display', 'block');
		}
	});

	$('.el_click').on('click', function (e) {
		e.preventDefault();
		var id = $(this).data('id');
		$.ajax({
			url: '/cart/add',
			data: {id: id},
			type: "GET",
			success: function (res) {
				if ( !res) alert("error");
				console.log(res);
			},
			error: function () {
				alert("error");
			}
		});
	});



});