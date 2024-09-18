define(["jquery", "jquery/ui", "slick"], function ($) {
    $(document).ready(function () {
        $(".slider-content").slick({
            dots: true,
            infinite: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            draggable: true,
            prevArrow: '<div class="slick-prev slick-arrow"></div>',
            nextArrow: '<div class="slick-next slick-arrow"></div>',
        });
    });
});
