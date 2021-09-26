const slider = ($) => {
  Drupal.behaviors.articleslider = {};
  $(document).ready(function slider() {
    $(".nav-link-recommended-conferences").click(function(){
     
    $('.slider__one').slick({
      infinite: true,
      speed: 300,
      slidesToShow: 3,
      nextArrow: $('.slider-wrapper .slick-next'),
      prevArrow: $('.slider-wrapper .slick-previous'),
      responsive: [
        {
          breakpoint: 1800,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            
          },
        },
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 991,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true
          },
        },
      ],
    });
    
  });

  $(".nav-link-recommended-conferences").click(function(){
  $('.slider__one').slick('setPosition');
});


  $(".nav-link-past-conferences").click(function(){
    $('.slider__two').slick({
      infinite: true,
      speed: 300,
      slidesToShow: 3,
      nextArrow: $('.slider-wrapper .slick-next'),
      prevArrow: $('.slider-wrapper .slick-previous'),
      responsive: [
        {
          breakpoint: 1800,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            
          },
        },
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 991,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true
          },
        },
      ],
    });
  });

    $('.slider__three').slick({
      infinite: true,
      speed: 300,
      slidesToShow: 3,
      nextArrow: $('.slider-wrapper .slick-next'),
      prevArrow: $('.slider-wrapper .slick-previous'),
      responsive: [
        {
          breakpoint: 1800,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            
          },
        },
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 991,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true
          },
        },
      ],
    });

    $('#slider-tabs .nav-item a').attr("data-toggle", "tab");
  });
};
slider(jQuery);

;
