(function($, Drupal) {
Drupal.behaviors.conferences = {  };
$(document).ready(function(){
  $('#slider-tabs .nav-item a').attr("data-toggle", "tab");
  $('#slider-tabs li:first a').addClass('active');
  $(".nav-link-recommended-conferences").click(function() {
    $('.slider__one').slick({
      infinite: true,
      speed: 300,
      slidesToShow: 3,
      slidesToScroll: 3,
      nextArrow: $('.slider-wrapper .slick-next'),
      prevArrow: $('.slider-wrapper .slick-previous'),
      responsive: [{
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
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
      $('.slider__one').slick('setPosition');
    })
  });


  $(".nav-link-past-conferences").click(function() {
    $('.slider__two').slick({
      infinite: true,
      speed: 300,
      slidesToShow: 3,
      nextArrow: $('.slider-wrapper .slick-next'),
      prevArrow: $('.slider-wrapper .slick-previous'),
      responsive: [{
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
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
      $('.slider__two').slick('setPosition');
    })
  });

  $('.slider__three').slick({
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    nextArrow: $('.slider-wrapper .slick-next'),
    prevArrow: $('.slider-wrapper .slick-previous'),
    responsive: [{
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
  $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
    $('.slider__three').slick('setPosition');
  })

});
})(jQuery, Drupal);