// binds $ to jquery, requires you to write strict code. Will fail validation if it doesn't match requirements.
(function ($) {
	"use strict";

	// add all of your code within here, not above or below
	$(function () {

		// Get header height and insert as CSS Variable
		$(window).on('load resize', function() {
			var headerHeight = $('.header').outerHeight() + 'px';
			document.documentElement.style.setProperty('--header-height', headerHeight);
		});

	});

}(jQuery));
