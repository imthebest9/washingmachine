<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>洗衣店</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;800&display=swap" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
        html,
        body {
            background-color: #fff;
        }

        @media(max-width:1200px) {
            :root {
                font-size: 14px;
            }
        }

        @media(max-width:992px) {
            :root {
                font-size: 12px;
            }
        }

        @media(max-width:769px) {
            :root {
                font-size: 10px;
            }
        }

        .header-icon {
            font-size: 1.25rem;
        }

        .nav-bar::before {
            position: absolute;
            content: "";
            width: 100%;
            height: 50%;
            top: 0;
            left: 0;
            background: #007bff !important;
        }

        @media(min-width: 1200px) {
            .carousel-inner {
                height: 720px;
            }
        }

        @media(992px <=width < 1200px) {
            .carousel-inner {
                height: 650px;
            }
        }

        @media(767px <=width < 992px) {
            .carousel-inner {
                height: 500px;
            }
        }

        @media(680px <=width < 767px) {
            .carousel-inner {
                height: 440px;
            }
        }

        .carousel-caption {
            right: 0;
            left: 0;
            bottom: 0;
            z-index: 5;
        }

        .carousel-control-next,
        .carousel-control-prev {
            z-index: 10;
        }

        section {
            margin: 7rem 0;
        }

        .about-img {
            width: 100%;
        }

        .about-content {
            color: #6f6e6e;
        }

        .why-us {
            margin: 7rem 0;
            text-align: center;
        }

        /* Why us card */
        .item {
            background: #fff;
            text-align: center;
            padding: 30px 25px;
            -webkit-box-shadow: 0 0px 25px rgba(0, 0, 0, 0.07);
            box-shadow: 0 0px 25px rgba(0, 0, 0, 0.07);
            border-radius: 20px;
            border: 5px solid rgba(0, 0, 0, 0.07);
            margin-bottom: 30px;
            -webkit-transition: all 0.5s ease 0s;
            transition: all 0.5s ease 0s;
        }

        .item:hover {
            background: #f91942;
            box-shadow: 0 8px 20px 0px rgba(0, 0, 0, 0.2);
            -webkit-transition: all 0.5s ease 0s;
            transition: all 0.5s ease 0s;
        }

        .item:hover .item,
        .item:hover span.icon {
            background: #fff;
            border-radius: 10px;
            -webkit-transition: all 0.5s ease 0s;
            transition: all 0.5s ease 0s;
        }

        .item:hover h6,
        .item:hover p {
            color: #fff;
            -webkit-transition: all 0.5s ease 0s;
            transition: all 0.5s ease 0s;
        }

        .item .icon {
            display: inline-block;
            font-size: 40px;
            margin-bottom: 25px;
            color: #f91942;
            width: 90px;
            height: 90px;
            line-height: 96px;
            border-radius: 50px;
        }

        .item .feature_box_col_one {
            background: rgba(247, 198, 5, 0.20);
            color: #f91942
        }

        .item .feature_box_col_two {
            background: rgba(255, 77, 28, 0.15);
            color: #f91942
        }

        .item .feature_box_col_three {
            background: rgba(0, 147, 38, 0.15);
            color: #f91942
        }

        .item p {
            font-size: 15px;
            line-height: 26px;
        }

        .item h6 {
            margin-bottom: 20px;
            color: #2f2f2f;
        }

        .footer {
            background-color: #344d77;
            padding: 3rem 7%;
        }

        .footer-logo {
            color: #fff;
            font-size: 1.8rem;
            margin-bottom: 1rem;
        }

        .footer-title {
            color: #fff;
            font-size: 1.65rem;
            margin-bottom: 1rem;
        }

        .footer-content1 {
            color: #fff;
            font-size: 0.98rem;
        }

        .shop-contact {
            color: #fff;
            display: flex;
            gap: 1rem;
        }

        .social-link {
            display: flex;
            flex-direction: row;
            gap: 1.5rem;
        }

        .footer-social-icon {
            font-size: 1.6rem;
            color: white;
        }

        .footer-icon {
            font-size: 1.5rem;
        }

        .fa-phone {
            font-size: 1.4rem;
        }

        /* Floating button */
        #whatsapp-button {
            position: fixed;
            bottom: 10%;
            right: 5%;
            z-index: 999;
        }

        #whatsapp-button img {
            width: 80px;
            height: auto;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container-fluid bg-primary py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                    <!-- <div class="d-inline-flex align-items-center">
                        <a class="text-white pr-3" href="">FAQs</a>
                        <span class="text-white">|</span>
                        <a class="text-white px-3" href="">Help</a>
                        <span class="text-white">|</span>
                        <a class="text-white pl-3" href="">Support</a>
                    </div> -->
                    <a class="text-white px-3" href="">
                        <i class="fa fa-facebook-f header-icon"></i>
                    </a>
                    <p>+60123456789</p>
                </div>
                <div class="col-md-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white px-3" href="">
                            <i class="fa fa-facebook-f header-icon"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="m-0 text-secondary"><span class="text-primary">DRY</span>ME</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="#" class="nav-item nav-link">Home</a>
                        <a href="#about-us" class="nav-item nav-link">About</a>
                        <a href="#service" class="nav-item nav-link">Services</a>
                        <a href="#contact" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    {{-- Carousel --}}
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="images/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Laundry & Dry Cleaning</h4>
                            <h1 class="display-3 text-white mb-md-4">Best For Laundry Services</h1>
                            {{-- <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Learn More</a> --}}
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="images/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Laundry & Dry Cleaning</h4>
                            <h1 class="display-3 text-white mb-md-4">Highly Professional Staff</h1>
                            {{-- <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Learn More</a> --}}
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-secondary" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-secondary" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    {{-- End Carousel --}}

    {{-- Learn about us --}}
    <section id="about-us">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <img src="images/about-us.jpg" class="about-img" alt="About-us">
                </div>
                <div class="col-12 col-md-6">
                    <h1 class="title mb-5">ABOUT US</h1>
                    <p class="about-content">There are many variations of passages of Lorem Ipsum available,
                        but the majority have suffered alteration in some form, by injected humour, or randomised words which
                        don't look even slightly believable. If you are going to use a passage of Lorem Ipsum,
                        you need to be sure there isn't anything embarrassing hidden in the middle of text.
                    </p>
                </div>
            </div>

            <h1 class="title why-us">WHY CHOOSE US</h1>

            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <div class="item"> <span class="icon feature_box_col_one"><i class="fa fa-globe"></i></span>
                        <h6>Modern Design</h6>
                        <p>We use latest technology for the latest world because we know the demand of peoples.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="item"> <span class="icon feature_box_col_two"><i class="fa fa-anchor"></i></span>
                        <h6>Creative Design</h6>
                        <p>We are always creative and and always lisen our costomers and we mix these two things and make beast design.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 ">
                    <div class="item"> <span class="icon feature_box_col_three"><i class="fa fa-hourglass-half"></i></span>
                        <h6>24 x 7 User Support</h6>
                        <p>If our customer has any problem and any query we are always happy to help then.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="service">
        <div class="container">
            <h1 class="title text-center">OUR SERVICES</h1>
        </div>
    </section>

    <section class="mb-0" id="contact">
        <div class="container">
            <h1 class="title text-center mb-3">CONTACT US</h1>
            <p class="contact-content text-center">
                Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos,
                ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est dolor
            </p>

            <div class="row">
                <div class="col-3 mb-4 ">
                    <h1 class="text-secondary text-center counter-text" data-number="10"></h1>
                    <h5 class="font-weight-bold text-center">Years Expereince</h5>
                </div>
                <div class="col-3 mb-4">
                    <h1 class="text-secondary text-center counter-text" data-number="250"></h1>
                    <h5 class="font-weight-bold text-center">Expert Worker</h5>
                </div>
                <div class="col-3 mb-4">
                    <h1 class="text-secondary text-center counter-text" data-number="1250"></h1>
                    <h5 class="font-weight-bold text-center">Happy Clients</h5>
                </div>
                <div class="col-3 mb-4">
                    <h1 class="text-secondary text-center counter-text" data-number="8888"></h1>
                    <h5 class="font-weight-bold text-center">Dry Cleaning</h5>
                </div>
            </div>
        </div>

        <div class="footer mt-5">
            <div class="row">
                <div class="col-12 col-md-4 mb-5">
                    <div class="footer-logo">
                        LOGO
                    </div>
                    <p class="footer-content1">
                        Volup amet magna clita tempor. Tempor sea eos vero ipsum. Lorem lorem sit sed elitr sit no,
                        sed kasd et ipsum dolor duo dolor
                    </p>

                    <div class="social-link">
                        <i class="fa fa-facebook-f footer-social-icon"></i>
                        <i class="fa fa-whatsapp footer-social-icon"></i>
                    </div>
                </div>

                <div class="col-12 col-md-4 mb-5">
                    <div class="footer-title">
                        Get In Touch
                    </div>
                    <p class="footer-content1">
                        Everyone are encourage come and visit our store.
                    </p>
                    <div class="shop-contact">
                        <i class="fa fa-map-marker footer-icon"></i>
                        <p style="margin-left: 1%;">123 Street, New York, USA</p>
                    </div>
                    <div class="shop-contact">
                        <i class="fa fa-phone footer-icon"></i>
                        <p>0111258754</p>
                    </div>
                </div>

                <div class="col-12 col-md-4 mb-5">
                    <div class="footer-title">
                        Quick Links
                    </div>

                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                        <a class="text-white mb-2" href="#about-us"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                        <a class="text-white mb-2" href="#service"><i class="fa fa-angle-right mr-2"></i>Services</a>
                        <a class="text-white" href="#contact"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="whatsapp-button">
        <a href="https://api.whatsapp.com/send?phone=601128289731&text=I want to make appointment" target="_blank">
            <img src="images/WhatsApp.png" alt="WhatsApp">
        </a>
    </div>
</body>

<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
        const counters = document.querySelectorAll('.counter-text');
        const speed = 200; // Adjust the speed of the animation (milliseconds)

        counters.forEach(counter => {
            const target = +counter.getAttribute('data-number');
            const increment = target / speed;

            const updateCounter = () => {
                const currentValue = +counter.innerText;
                if (currentValue < target) {
                    counter.innerText = Math.ceil(currentValue + increment);
                    setTimeout(updateCounter, 1);
                } else {
                    counter.innerText = target; // Ensure the final value is exact
                }
            };

            updateCounter();
        });
    });

    $(document).ready(function() {
        $("a").on("click", function(event) {
            if (this.hash !== "") {
                event.preventDefault();

                var hash = this.hash;
                $("html, body").animate({
                        scrollTop: $(hash).offset().top
                    },
                    800,
                    function() {
                        window.location.hash = hash;
                    }
                );
            }
        });
    });
</script>

</html>