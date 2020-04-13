define([
  'jquery',
  'slick'
], 
function($) {
	jQuery(document).ready(function (){
		jQuery("#home-top-slider").slick({
			arrows: false,
			dots: true,
			slidesToShow: 1,
			slidesToScroll: 1
		});
	});
});
