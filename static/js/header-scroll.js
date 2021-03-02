
$(function() {
    const header = document.getElementById('header');
    $(window).on("scroll", function() {
        header.addClass("active");
    });
});