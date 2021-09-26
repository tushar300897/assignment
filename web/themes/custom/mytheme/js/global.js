(function ($, Drupal) {
  Drupal.behaviors.conferences = {
    attach(context) {
      const $context = $(context);
      $context.find('#slider-tabs .nav-item a').attr("data-toggle", "tab");
      $('#slider-tabs li:first a').addClass('active');
      $context.find('.slider__three').slick({
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
          breakpoint: 1025,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 993,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            prevArrow: false,
            nextArrow: false,
            dots: true,
            autoplay: false,
          },
        },
      ],
    });

    $context.find(".nav-link-past-conferences").click(function(){
      $context.find('.slider__two').slick({
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
            breakpoint: 1025,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
            },
          },
          {
            breakpoint: 993,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              autoplay: false,
              prevArrow: false,
              nextArrow: false,
              dots: true,
            },
          },
        ],
      });
    });

    $(".nav-link-recommended-conferences").click(function(){
      $('.slider__one').slick({
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 3,
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
            },
          },
          {
            breakpoint: 1025,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2,
            },
          },
          {
            breakpoint: 992,
            settings: {
              arrows: false,
              slidesToShow: 1,
              slidesToScroll: 1,
              prevArrow: false,
              nextArrow: false,
              dots: true,
              autoplay: true,
            },
          },
        ],
      });
    });
    },
  };

})(jQuery, Drupal);