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
</div>
