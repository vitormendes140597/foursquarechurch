window.onload = function() {

	function loadImages(className) {
		var elements = document.getElementsByClassName(className);
		for (var i = 0; i < elements.length; i++) {
			var path = elements[i].getAttribute('data-bg');
			elements[i].style.backgroundImage = 'url(' + path + ')';
		}
	}

	loadImages('news-image');

	$('.menu-icon').click(function(){
		$('.menu-responsive').fadeIn();
	});

	$('.menu-close-icon svg').click(function(){
		$('.menu-responsive').fadeOut();
	});
};