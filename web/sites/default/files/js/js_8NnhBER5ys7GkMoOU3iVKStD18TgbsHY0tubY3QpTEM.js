const slider = ($) => {
  Drupal.behaviors.articleslider = {};
  $(document).ready(function slider() {
    $('.slider__tabs').slick({
      infinite: true,
      speed: 300,
      slidesToShow: 3,
      // nextArrow: $('#nav-tabContent .slick-next'),
      // prevArrow: $('#nav-tabContent .slick-previous'),
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
};
slider(jQuery);

;
