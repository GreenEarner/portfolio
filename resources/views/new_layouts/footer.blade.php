<footer class="py-5 text-light fs">
    <div class="container py-5">
        <div class="row g-3">
            <div class="col-md-12 col-lg-4 p-2">
                <h2 class="footer-logo">Green Earner</h2>
                <div class="mt-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum nobis dolor quis libero doloribus eveniet, nihil quisquam voluptatum error ullam impedit! Tempore assumenda nihil non.
                </div>
            </div>
            <div class="col-md-12 col-lg-4 p-2 d-flex justify-content-lg-end">
                <div>
                    <h3>Address</h3>
                    <div class="mt-4">
                        <ul class="list-unstyled">
                            <li><i class="fa-solid fa-location-dot"></i> <span class="ms-2">123 Street, New York, USA</span></li>
                            <li class="my-3"><i class="fa-solid fa-phone"></i> <span class="ms-2">+012 345 67890</span></li>
                            <li><i class="fa-solid fa-envelope"></i> <span class="ms-2">info@example.com</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-4 p-2 d-flex justify-content-lg-end">
                <div>
                    <h3>Quick Links</h3>
                    <div class="mt-4">
                        <ul class="list-unstyled">
                            <li class="my-1">
                                <span class="fw-bold"> > </span> <a href="/#" class="ho ms-2 text-decoration-none text-light">Home</a>
                            </li>
                            <li class="my-1 ">
                                <span class="fw-bold"> > </span> <a href="/#featureSection" class="ho ms-2 text-decoration-none text-light">Feature</a>
                            </li>
                            <li class="my-1 ">
                                <span class="fw-bold"> > </span> <a href="/#aboutSection" class="ho ms-2 text-decoration-none text-light">About Us</a>
                            </li>
                            <li class="my-1">
                                <span class="fw-bold"> > </span> <a href="/#materialSection" class="ho ms-2 text-decoration-none text-light">Materials</a>
                            </li>
                            <li class="my-1 ">
                                <span class="fw-bold"> > </span> <a href="/#newsSection" class="ho ms-2 text-decoration-none text-light">News</a>
                            </li>
                            <li class="my-1 ">
                                <span class="fw-bold"> > </span> <a href="/#appSection" class="ho ms-2 text-decoration-none text-light">App</a>
                            </li>
                            <li class="my-1 ">
                                <span class="fw-bold"> > </span> <a href="/#contactSection" class="ho ms-2 text-decoration-none text-light">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            {{--            <div class="col-md-6 col-lg-3 p-2">--}}
            {{--                <h3>Testimonials</h3>--}}
            {{--                <div class="mt-4 d-flex flex-wrap">--}}
            {{--                    <div class="p-2">--}}
            {{--                        <img width="80px" src="https://preview.colorlib.com/theme/universityedu/assets/img/gallery/xclass-img1.jpg.pagespeed.ic.9IkgMMskuz.webp" alt="">--}}
            {{--                    </div>--}}
            {{--                    <div class="p-2">--}}
            {{--                        <img width="80px" src="https://preview.colorlib.com/theme/universityedu/assets/img/gallery/xclass-img2.jpg.pagespeed.ic.0TMWLF2PtT.webp" alt="">--}}
            {{--                    </div>--}}
            {{--                    <div class="p-2">--}}
            {{--                        <img width="80px" src="https://preview.colorlib.com/theme/universityedu/assets/img/gallery/xclass-img3.jpg.pagespeed.ic.b210CImurk.webp" alt="">--}}
            {{--                    </div>--}}
            {{--                    <div class="p-2">--}}
            {{--                        <img width="80px" src="https://preview.colorlib.com/theme/universityedu/assets/img/gallery/xclass-img2.jpg.pagespeed.ic.0TMWLF2PtT.webp" alt="">--}}
            {{--                    </div>--}}
            {{--                    <div class="p-2">--}}
            {{--                        <img width="80px" src="https://preview.colorlib.com/theme/universityedu/assets/img/gallery/xclass-img3.jpg.pagespeed.ic.b210CImurk.webp" alt="">--}}
            {{--                    </div>--}}
            {{--                    <div class="p-2">--}}
            {{--                        <img width="80px" src="https://preview.colorlib.com/theme/universityedu/assets/img/gallery/xclass-img1.jpg.pagespeed.ic.9IkgMMskuz.webp" alt="">--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}
        </div>
    </div>

    <div class="footDivider mx-auto my-3"></div>

    <div class="">
        <div class="container">
            <div class="pt-3 text-center normal-fs">
                © Copyright <span class="fs-4 footer-logo">Green Earner</span>. All Rights Reserved
            </div>
        </div>
    </div>
</footer>

<div class="fixed-bottom text-end me-3 mb-3">
    <a class="goTop d-none btn btn-lg rounded-circle border border-0 back-to-top" href="#"><i class="fa-solid fa-arrow-up"></i></a>
</div>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 0,
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
        }
    });
</script>

<script src="/assets/script.js"></script>
<!-- animation link -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        once: false,
    });
</script>
</body>

</html>
