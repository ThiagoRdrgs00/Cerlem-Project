
window.addEventListener("scroll", () => {
    if (window.scrollY > 100) {
        $('.btn-scroll-top').addClass("show-btn-scroll-top");
    } else {
        $('.btn-scroll-top').removeClass("show-btn-scroll-top");
    }
});

function goUp() {
    $("html").scrollTop(0);
}

function goDown() {
    $("html").scrollTop(100000);
}