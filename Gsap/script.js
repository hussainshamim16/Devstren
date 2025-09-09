var swiper = new Swiper(".myService", {
    slidesPerView: 2,
    // loop: true,
    // centeredSlidesBounds: true,
    initialSlide: 1,
    spaceBetween: 15,
    breakpoints: {
        320: {
            slidesPerView: 1.2,
            spaceBetween: 15,
        },
        768: {
            slidesPerView: 2.2,
            spaceBetween: 15,
        },
        1024: {
            slidesPerView: 2.4,
            spaceBetween: 15,
        },
        1440: {
            slidesPerView: 4.10,
            spaceBetween: 15,
        }
    },
});


gsap.timeline(
    {
        scrollTrigger: {
            trigger: ".two",
            start: "50% 50%",
            end: "50% 50%",
            scrub: true,
            markers: true
        }
    }
)

console.log("red")


