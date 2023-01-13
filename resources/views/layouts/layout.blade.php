<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Green Earner</title>

    <!-- Primary Meta Tags -->
    <title>Green Earner</title>
    <meta name="title" content="Green Earner">
    <meta name="description" content="We should know about the benefits of maintaining the cleanliness of the environment, because keeping the environment clean is very useful for us all because it can create a safe, clean, cool and healthy life.">
    <meta name="keywords" content="green , green earner ,  recycle ">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://127.0.0.1:8000/">
    <meta property="og:title" content="Green Earner">
    <meta property="og:description" content="We should know about the benefits of maintaining the cleanliness of the environment, because keeping the environment clean is very useful for us all because it can create a safe, clean, cool and healthy life.">
    <meta property="og:image" content="http://127.0.0.1:8000/assets/images/big/normal-2.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="http://127.0.0.1:8000/">
    <meta property="twitter:title" content="Green Earner">
    <meta property="twitter:description" content="We should know about the benefits of maintaining the cleanliness of the environment, because keeping the environment clean is very useful for us all because it can create a safe, clean, cool and healthy life.">
    <meta property="twitter:image" content="http://127.0.0.1:8000/assets/images/big/normal-2.jpg">

    <!-- bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- fontawesome   -->
    <script src="https://kit.fontawesome.com/7c0ec42130.js" crossorigin="anonymous"></script>

    <!-- animation link   -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

    <!-- retroica font  -->
    <link href="http://fonts.cdnfonts.com/css/retroica" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type='text/javascript' src='//cdn.jsdelivr.net/jquery.marquee/1.4.0/jquery.marquee.min.js'></script>

    <!-- css  -->
    <link rel="stylesheet" href="assets/style.css">

    <!-- Demo styles -->
    <style>
        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .swiper {
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>

<body>

<div class="overlay px-4 pt-5 mt-5 ">
    <div class="navbar w-100 bg-light " style="height: 85%; border-radius: 10px;">
        <ul class="navbar-nav px-3 w-100 px-auto  mb-5 mt-5 text-center">
            <li class="nav-item mb-2">
                <a class="nav-link active text-dark overlay-link" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item mb-2">
                <a class="nav-link active text-dark overlay-link" href="#featureSection">Feature</a>
            </li>
            <li class="nav-item mb-2">
                <a class="nav-link active text-dark overlay-link" href="#aboutSection">About</a>
            </li>
            <li class="nav-item mb-2">
                <a class="nav-link active text-dark overlay-link" href="#materialSection">Materials</a>
            </li>
            <li class="nav-item mb-2">
                <a class="nav-link active text-dark overlay-link" href="#newsSection">News</a>
            </li>
            <li class="nav-item mb-2">
                <a class="nav-link active text-dark overlay-link" href="#appSection">App</a>
            </li>
            <li class="nav-item mb-2">
                <a class="nav-link active text-dark overlay-link" href="#contactSection">Contact</a>
            </li>
        </ul>
    </div>
</div>
<nav class="navUpDown navbar shadow fixed-top navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand " href="#">
            <img width="110" src="assets/images/logo/Style 1 (2).png" alt="">
        </a>
        <div class="ms-auto menuContainer d-lg-none">
            <div class="menu line1"></div>
            <div class="menu line2"></div>
            <div class="menu line3"></div>
        </div>
        <div class="ms-auto hideShow d-none d-lg-block me-2">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item mx-2">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link active" href="#featureSection">Feature</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link active" href="#aboutSection">About</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link active" href="#materialSection">Materials</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link active" href="#newsSection">News</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link active" href="#appSection">App</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link active" href="#contactSection">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="marquee hero-text-animation">
    <span>We had been recycled 20% of plastics on the world and planted two thousands of plants on the world.</span>
    <!-- <span>We had been recycled 20% of plastics on the world and planted two thousands of plants on the world.</span> -->
    <!-- <span>We had been recycled 20% of plastics on the world and planted two thousands of plants on the world.</span> -->
    <!-- <span>We had been recycled 20% of plastics on the world and planted two thousands of plants on the world.</span> -->
    <!-- <span>We had been recycled 20% of plastics on the world and planted two thousands of plants on the world.</span> -->
</div>


{{ $slot }}


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
                                <span class="fw-bold"> > </span> <a href="#" class="ho ms-2 text-decoration-none text-light">Home</a>
                            </li>
                            <li class="my-1 ">
                                <span class="fw-bold"> > </span> <a href="#featureSection" class="ho ms-2 text-decoration-none text-light">Feature</a>
                            </li>
                            <li class="my-1 ">
                                <span class="fw-bold"> > </span> <a href="#aboutSection" class="ho ms-2 text-decoration-none text-light">About Us</a>
                            </li>
                            <li class="my-1">
                                <span class="fw-bold"> > </span> <a href="#materialSection" class="ho ms-2 text-decoration-none text-light">Materials</a>
                            </li>
                            <li class="my-1 ">
                                <span class="fw-bold"> > </span> <a href="#newsSection" class="ho ms-2 text-decoration-none text-light">News</a>
                            </li>
                            <li class="my-1 ">
                                <span class="fw-bold"> > </span> <a href="#appSection" class="ho ms-2 text-decoration-none text-light">App</a>
                            </li>
                            <li class="my-1 ">
                                <span class="fw-bold"> > </span> <a href="#contactSection" class="ho ms-2 text-decoration-none text-light">Contact Us</a>
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

<script src="assets/script.js"></script>
<!-- animation link -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        once: false,
    });
</script>
</body>

</html>
