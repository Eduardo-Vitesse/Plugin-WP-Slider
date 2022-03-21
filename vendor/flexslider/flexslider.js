jQuery(window).load(function () {
  jQuery(".flexslider").flexslider({
    animation: "slider",
    touch: true,
    directionNav: false,
    smoothHeight: true,
    controlNav: SLIDER_OPTIONS.controlNav,
  });
});
