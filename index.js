$('.slider-for').slick({
	slidesToShow: 1,
	slidesToScroll: 1,
	arrows: false,
	fade: true,
	asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
	slidesToShow: 3,
	slidesToScroll: 1,
	asNavFor: '.slider-for',
	dots: true,
	centerMode: true,
	focusOnSelect: true
});$('.sliderContainerMain').slick({
	slidesToShow: 1,
	dots: true,
	centerMode: false,
	infinite: false,
	arrows: true,	
})
$('.sliderContainerProduct').slick({
	slidesToShow: 4.3,
	dots: false,
	centerMode: false,
	infinite: false,
	arrows: true,	
})
$('.slidertestimonials').slick({
	slidesToShow: 1,
	dots: false,
	centerMode: false,
	infinite: false,
	arrows: true,	
})
$('.sliderContainerProductsLike').slick({
	slidesToShow: 4,
	dots: false,
	centerMode: false,
	infinite: false,
	arrows: true,	
})
$(document).ready(function() {
	$('.minus').click(function () {
		var $input = $(this).parent().find('input');
		var count = parseInt($input.val()) - 1;
		count = count < 1 ? 1 : count;
		$input.val(count);
		$input.change();
		return false;
	});
	$('.plus').click(function () {
		var $input = $(this).parent().find('input');
		$input.val(parseInt($input.val()) + 1);
		$input.change();
		return false;
	});
	$('.sliderMainImageProduct').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		asNavFor: '.sliderThumbs'
	});
	$('.sliderThumbs').slick({
		slidesToShow: 4,
		vertical: true,
		slidesToScroll: 1,
		asNavFor: '.sliderMainImageProduct',
		dots: true,
		centerMode: false,
		focusOnSelect: true,
		dots: false,
	});
	$('.menutabs').click( function(e) {
		$(this).find('p').slideToggle();
	})
});