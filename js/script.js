jQuery(document).ready(function ($) {
  $(".owl-carousel").owlCarousel({
    items: 5,
    loop: true,
    autoplay: false,
    autoplayTimeout: 3000,
    responsive: {
      0: {
        items: 1,
      },
      900: {
        items: 2,
      },
      1000: {
        items: 2,
      },
    },
  });
  $(".prev-btn").click(function () {
    $(".owl-carousel").trigger("prev.owl.carousel");
  });

  $(".next-btn").click(function () {
    $(".owl-carousel").trigger("next.owl.carousel");
  });
});
