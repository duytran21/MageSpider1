define([
  'jquery',
  'slick'
], 
function($) {
  jQuery(document).ready(function () {
            jQuery("#hp-top-slider").slick({
                lazyload: 'progressive',
		        arrows: true,
		        dots: false,
		        slidesToShow: 1,
		        slidesToScroll: 1,
		        autoplay: false,
		        autoplaySpeed: 5000,

			});
	});
});