require('./bootstrap');

$(document).ready(function(){
  $('.slider').slick({
    lazyLoad: 'ondemand',
    centerMode: true,
    centerPadding: '60px',
    slidesToShow: 1,
    variableWidth: true,
    autoplay: true,
    prevArrow: '<button type="button" class="slick-prev"><</button>',
    nextArrow: '<button type="button" class="slick-next">></button>',
    responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: true,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '20px',
        slidesToShow: 1
      }
    }
  ]
  });
});
