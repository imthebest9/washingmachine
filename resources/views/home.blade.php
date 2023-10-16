<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')

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
</head>

<body class="">
    <div class="container-fluid bg-primary pt-3 pb-14 -mb-[57px]">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-lg-left mb-lg-0">
                    <div class="d-inline-flex">
                        <a class="text-white px-3" href="">
                            <i class="fa fa-phone header-icon"></i>
                        </a>
                        <p class="text-white">+6018-235 8815</p>
                    </div>
                </div>
                <div class="col-md-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="relative container-fluid p-0 flex">
        <div class="container-lg relative p-0 lg:px-3 z-30 flex flex-col">
            <nav class="bg-white p-4 flex flex-col lg:flex-row">
                <div class="container mx-auto flex justify-between items-center">
                    <!-- Logo or Site Name -->
                    <a href="" class="navbar-brand">
                        <h1 class="m-0 text-secondary"><span class="text-primary">EASY</span>BUBBLE<span class="text-primary">CLEAN</span></h1>
                    </a>

                    <!-- Toggle Button (Visible on Small Screens) -->
                    <button class="lg:hidden block hover:text-gray-300 focus:outline-none focus:text-gray-300" id="navbar-toggle">
                        <svg class="w-6 h-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M2 5C2 4.44772 2.44772 4 3 4H21C21.5523 4 22 4.44772 22 5C22 5.55228 21.5523 6 21 6H3C2.44772 6 2 5.55228 2 5ZM21 10C21.5523 10 22 10.4477 22 11C22 11.5523 21.5523 12 21 12H3C2.44772 12 2 11.5523 2 11C2 10.4477 2.44772 10 3 10H21ZM21 16C21.5523 16 22 16.4477 22 17C22 17.5523 21.5523 18 21 18H3C2.44772 18 2 17.5523 2 17C2 16.4477 2.44772 16 3 16H21Z" />
                        </svg>
                    </button>
                </div>

                <!-- Navigation Links (Hidden by Default on Small Screens) -->
                <div class="hidden lg:flex lg:items-left lg:text-left flex-col space-x-0 lg:space-x-6 lg:flex-row ml-16" id="navbar-links">
                    <a href="#" class="block lg:inline-block lg:mt-0 text-left lg:text-left opacity-50 px-2 py-3 font-bold hover:no-underline hover:text-gray-600">Home</a>
                    <a href="#about-us" class="block lg:inline-block lg:mt-0 text-left lg:text-left opacity-50 px-2 py-3 font-bold hover:no-underline hover:text-gray-600">About</a>
                    <a href="#service" class="block lg:inline-block lg:mt-0 text-left lg:text-left opacity-50 px-2 py-3 font-bold hover:no-underline hover:text-gray-600">Services</a>
                    <a href="#contact" class="block lg:inline-block lg:mt-0 text-left lg:text-left opacity-50 px-2 py-3 font-bold hover:no-underline hover:text-gray-600">Contact</a>
                </div>
            </nav>
        </div>
    </div>




    {{-- Carousel --}}
    <div class="container-fluid p-0 mb-24">
        <div class="carousel-container">
            <div id="header-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100 h-100" src="images/carousel-1.jpg" alt="Image">
                        <div class="carousel-caption right-0 left-0 bottom-0 z-5 flex items-center justify-center">
                            <div class="p-3" style="max-width: 900px;">
                                <h4 class="text-white text-uppercase mb-md-3 text-center">Laundry & Dry Cleaning</h4>
                                <h1 class="text-5xl text-white mb-md-4 text-center">Best For Laundry Services</h1>
                                {{-- <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Learn More</a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100 h-100" src="images/carousel-2.jpg" alt="Image">
                        <div class="carousel-caption right-0 left-0 bottom-0 z-5 flex items-center justify-center">
                            <div class="p-3" style="max-width: 900px;">
                                <h4 class="text-white text-uppercase mb-md-3 text-center">Laundry & Dry Cleaning</h4>
                                <h1 class="text-5xl text-white mb-md-4 text-center">Highly Professional Staff</h1>
                                {{-- <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Learn More</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev z-10" href="#header-carousel" data-slide="prev">
                    <div class="btn btn-secondary w-12 h-12">
                        <span class="carousel-control-prev-icon mb-n2"></span>
                    </div>
                </a>
                <a class="carousel-control-next z-10" href="#header-carousel" data-slide="next">
                    <div class="btn btn-secondary w-12 h-12">
                        <span class="carousel-control-next-icon mb-n2"></span>
                    </div>
                </a>
            </div>
        </div>
    </div>

    {{-- End Carousel --}}

    {{-- Learn about us --}}
    <section id="about-us" class="container mb-32">
        <div class="row mb-32">
            <div class="col-12 col-md-6">
                <img src="images/about-us.jpg" class="about-img w-full" alt="About-us">
            </div>
            <div class="col-12 col-md-6">
                <h1 class="title mb-5">ABOUT US</h1>
                <p class="about-content">
                    At EASYBUBBLECLEAN, we are dedicated to providing top-quality laundry services with a commitment to excellence. Our mission is to make your laundry experience as convenient and hassle-free as possible.
                </p>
            </div>
        </div>

        <h1 class="justify-center text-center mt-7 mb-4">WHY CHOOSE US</h1>

        <div class="grid grid-cols-3 gap-8">
            <div class="group relative rounded-xl">
                <div class="item text-center p-6 border border-solid border-gray-300 rounded-lg shadow transition-transform duration-300 ease-in-out transform hover:scale-105 hover:bg-red-500 hover:text-white">
                    <img src="images/washer.png" class=" w-24 h-auto m-auto transition-opacity duration-300 group-hover:hidden" alt="washer">
                    <img src="images/washer-white.png" class=" w-24 h-auto m-auto hidden group-hover:block" alt="washer" alt="washer">
                    <p class="text-xl font-bold mt-4 hover:text-white">Modern Equipment</p>
                    <p class="mt-4">
                        We invest in the latest laundry technology and equipment to ensure your clothes are treated with the utmost care and efficiency.
                    </p>
                </div>
            </div>

            <div class="group relative rounded-xl">
                <div class="item   text-center p-6 border border-solid border-gray-300 rounded-lg shadow transition duration-300 ease-in-out transform hover:scale-105 hover:bg-red-500 hover:text-white">
                    <img src="images/staff.png" class=" w-24 h-auto m-auto transition-opacity duration-300 group-hover:hidden" alt="washer">
                    <img src="images/staff-white.png" class=" w-24 h-auto m-auto hidden group-hover:block" alt="washer" alt="washer">
                    <p class="text-xl font-bold mt-4">Professional Care</p>
                    <p class="mt-4">
                        Our experienced staff takes pride in providing expert care for your garments, ensuring they look their best after every wash.
                    </p>
                </div>
            </div>
            <div class="group relative rounded-xl">
                <div class="item   text-center p-6 border border-solid border-gray-300 rounded-lg shadow transition duration-300 ease-in-out transform hover:scale-105 hover:bg-red-500 hover:text-white">
                    <img src="images/247.png" class=" w-24 h-auto m-auto transition-opacity duration-300 group-hover:hidden" alt="washer">
                    <img src="images/247-white.png" class=" w-24 h-auto m-auto hidden group-hover:block" alt="washer" alt="washer">
                    <p class="text-xl font-bold mt-4">24/7 Availability</p>
                    <p class="mt-4">
                        We are here for you around the clock, providing 24/7 support to address any questions or concerns you may have regarding our laundry services.
                    </p>
                </div>
            </div>
        </div>


    </section>


    <section id="service" class="container mb-32">
        <h1 class="title text-center capitalize mb-4">OUR SERVICES</h1>

        <div class="row">
            <div class="col-md-6">
                <div class="service-card flex items-center border border-black p-4">
                    <div class="col-12 col-md-6">
                        <img src="images/washdry.png" class="about-img h-36 w-auto m-auto" alt="Washdry">
                    </div>
                    <div class="service-content ml-4">
                        <h2 class="service-title text-xl font-semibold">Washing and Drying</h2>
                        <p class="service-description mt-2">
                            We provide professional washing and drying services to ensure your clothes are clean and fresh.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="service-card flex items-center border border-black p-4">
                    <div class="col-12 col-md-6">
                        <img src="images/dry.png" class="about-img h-36 w-auto m-auto" alt="dry">
                    </div>
                    <div class="service-content ml-4">
                        <h2 class="service-title text-xl font-semibold">Dry Cleaning</h2>
                        <p class="service-description mt-2">
                            Our dry cleaning services are perfect for delicate fabrics and special garments that require special care.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="service-card flex items-center border border-black p-4">
                    <div class="col-12 col-md-6">
                        <img src="images/iron.png" class="about-img h-36 w-auto m-auto" alt="iron">
                    </div>
                    <div class="service-content ml-4">
                        <h2 class="service-title text-xl font-semibold">Ironing and Pressing</h2>
                        <p class="service-description mt-2">
                            We offer professional ironing and pressing to make sure your clothes look neat and wrinkle-free.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="service-card flex items-center border border-black p-4">
                    <div class="col-12 col-md-6">
                        <img src="images/stain.png" class="about-img h-36 w-auto m-auto" alt="stain">
                    </div>
                    <div class="service-content ml-4">
                        <h2 class="service-title text-xl font-semibold">Stain Removal</h2>
                        <p class="service-description mt-2">
                            Our stain removal service can effectively remove tough stains, keeping your clothes spotless.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="service-card flex items-center border border-black p-4">
                    <div class="col-12 col-md-6">
                        <img src="images/sock.png" class="about-img h-36 w-auto m-auto" alt="sock">
                    </div>
                    <div class="service-content ml-4">
                        <h2 class="service-title text-xl font-semibold">Sock and Garment Pairing</h2>
                        <p class="service-description mt-2">
                            We ensure that all your socks and garments are paired correctly after laundry.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="service-card flex items-center border border-black p-4 ">
                    <div class="col-12 col-md-6">
                        <img src="images/garment.png" class="h-36 m-auto" alt="garment">
                    </div>
                    <div class="service-content ml-4 mb-7">
                        <h2 class="service-title text-xl font-semibold">Garment Folding</h2>
                        <p class="service-description mt-2">
                            We fold your garments neatly to make them easy to store and maintain.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="supporting-business" class="container mb-32">
        <h1 class="title text-center capitalize mb-4">Supporting Business</h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Professional Attires -->
            <div class="service-card border border-black p-4 mx-auto">
                <div class="flex items-center mb-4">
                    <div class="col-12 col-md-6 mx-auto">
                        <img src="images/professional.png" alt="Professional Attires">
                    </div>
                </div>
                <div class="service-content text-center">
                    <h2 class="service-title text-xl font-semibold">Professional Attires</h2>
                    <p class="service-description mt-2">
                        We ensure that your professional attire is cleaned and maintained to the highest standards.
                    </p>
                </div>
            </div>

            <!-- Airbnb & Hotels -->
            <div class="service-card border border-black p-4">
                <div class="flex items-center mb-4">
                    <div class="col-12 col-md-6 mx-auto">
                        <img src="images/airbnb.png" alt="Airbnb & Hotels">
                    </div>
                </div>
                <div class="service-content text-center">
                    <h2 class="service-title text-xl font-semibold">Airbnb & Hotels</h2>
                    <p class="service-description mt-2">
                        We provide top-notch laundry services for Airbnb and hotel linens to ensure guest satisfaction.
                    </p>
                </div>
            </div>

            <!-- Rehab & Therapy -->
            <div class="service-card border border-black p-4">
                <div class="flex items-center mb-4">
                    <div class="col-12 col-md-6 mx-auto">
                        <img src="images/rehab.png" alt="Rehab & Therapy">
                    </div>
                </div>
                <div class="service-content text-center">
                    <h2 class="service-title text-xl font-semibold">Rehab & Therapy</h2>
                    <p class="service-description mt-2">
                        We offer specialized laundry services for rehab and therapy facilities to maintain hygiene.
                    </p>
                </div>
            </div>

            <!-- Confinement Centres -->
            <div class="service-card border border-black p-4">
                <div class="flex items-center mb-4">
                    <div class="col-12 col-md-6 mx-auto">
                        <img src="images/confinement.png" alt="Confinement Centres">
                    </div>
                </div>
                <div class="service-content text-center">
                    <h2 class="service-title text-xl font-semibold">Confinement Centres</h2>
                    <p class="service-description mt-2">
                        We cater to the laundry needs of confinement centres with special care and attention.
                    </p>
                </div>
            </div>

            <!-- Salon -->
            <div class="service-card border border-black p-4">
                <div class="flex items-center mb-4">
                    <div class="col-12 col-md-6 mx-auto">
                        <img src="images/salon.png" alt="Salon">
                    </div>
                </div>
                <div class="service-content text-center">
                    <h2 class="service-title text-xl font-semibold">Salon</h2>
                    <p class="service-description mt-2">
                        We handle salon towels and linens to ensure a clean and comfortable experience for clients.
                    </p>
                </div>
            </div>

            <!-- Beauty & Spa -->
            <div class="service-card border border-black p-4">
                <div class="flex items-center mb-4">
                    <div class="col-12 col-md-6 mx-auto">
                        <img src="images/beauty-spa.png" alt="Beauty & Spa">
                    </div>
                </div>
                <div class="service-content text-center">
                    <h2 class="service-title text-xl font-semibold">Beauty & Spa</h2>
                    <p class="service-description mt-2">
                        We maintain the cleanliness of linens and robes for beauty and spa establishments.
                    </p>
                </div>
            </div>

            <!-- Gym & Training -->
            <div class="service-card border border-black p-4">
                <div class="flex items-center mb-4">
                    <div class="col-12 col-md-6 mx-auto">
                        <img src="images/gym.png" alt="Gym & Training">
                    </div>
                </div>
                <div class="service-content text-center">
                    <h2 class="service-title text-xl font-semibold">Gym & Training</h2>
                    <p class="service-description mt-2">
                        We handle gym towels and uniforms to maintain hygiene and cleanliness.
                    </p>
                </div>
            </div>

            <!-- Restaurant -->
            <div class="service-card border border-black p-4">
                <div class="flex items-center mb-4">
                    <div class="col-12 col-md-6 mx-auto">
                        <img src="images/restaurant.png" alt="Restaurant">
                    </div>
                </div>
                <div class="service-content text-center">
                    <h2 class="service-title text-xl font-semibold">Restaurant</h2>
                    <p class="service-description mt-2">
                        We ensure restaurant linens and uniforms are cleaned to the highest standards.
                    </p>
                </div>
            </div>

            <!-- Others -->
            <div class="service-card border border-black p-4">
                <div class="flex items-center mb-4">
                    <div class="col-12 col-md-6 mx-auto">
                        <img src="images/others.png" alt="Others">
                    </div>
                </div>
                <div class="service-content text-center">
                    <h2 class="service-title text-xl font-semibold">Others</h2>
                    <p class="service-description mt-2">
                        We offer laundry solutions for various businesses, ensuring cleanliness and hygiene.
                    </p>
                </div>
            </div>
        </div>
    </section>





    <section id="contact" class="container mb-32">
        <h1 class="title text-center mb-3">CONTACT US</h1>
        <p class="contact-content text-center">
            Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos,
            ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est dolor
        </p>

        <div class="row">
            <div class="col-3 mb-4">
                <h1 class="text-secondary text-center counter-text" data-number="10"></h1>
                <h5 class="font-bold text-center">Years Experience</h5>
            </div>
            <div class="col-3 mb-4">
                <h1 class="text-secondary text-center counter-text" data-number="250"></h1>
                <h5 class="font-bold text-center">Expert Worker</h5>
            </div>
            <div class="col-3 mb-4">
                <h1 class="text-secondary text-center counter-text" data-number="1250"></h1>
                <h5 class="font-bold text-center">Happy Clients</h5>
            </div>
            <div class="col-3 mb-4">
                <h1 class="text-secondary text-center counter-text" data-number="8888"></h1>
                <h5 class="font-bold text-center">Dry Cleaning</h5>
            </div>
        </div>
    </section>

    <section id="delivery-service" class="container mb-32">
        <h1 class="title text-center capitalize mb-4">PICKUP & DELIVERY SERVICE</h1>

        <div class="row">
            <div class="col-md-3">
                <div class="step-card text-center flex flex-col">
                    <div class="step-number bg-primary text-white rounded-full py-2 mx-auto w-12 ">
                        <span class="text-2xl">1</span>
                    </div>
                    <h2 class="step-title text-xl font-semibold mt-4">Schedule Pickup</h2>
                    <p class="step-description mt-2">
                        Choose a convenient pickup time for your laundry.
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="step-card text-center flex flex-col">
                    <div class="step-number bg-primary text-white rounded-full py-2 mx-auto w-12">
                        <span class="text-2xl">2</span>
                    </div>
                    <h2 class="step-title text-xl font-semibold mt-4">Laundry Collection</h2>
                    <p class="step-description mt-2">
                        Our team will collect your laundry from your doorstep.
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="step-card text-center">
                    <div class="step-number bg-primary text-white rounded-full py-2 mx-auto w-12">
                        <span class="text-2xl">3</span>
                    </div>
                    <h2 class="step-title text-xl font-semibold mt-4">Expert Cleaning</h2>
                    <p class="step-description mt-2">
                        Your laundry will undergo professional cleaning.
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="step-card text-center">
                    <div class="step-number bg-primary text-white rounded-full py-2 mx-auto w-12">
                        <span class="text-2xl">4</span>
                    </div>
                    <h2 class="step-title text-xl font-semibold mt-4">Express Delivery</h2>
                    <p class="step-description mt-2">
                        We'll deliver your clean clothes to your location.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <div class="mt-5 bg-[#344D77] py-6 w-screen-3xl">
        <div class="sm:mx-20 space-x-10 lg:mx-40">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-16">
                <div class="col-span-1 md:col-span-1">
                    <h4 class="footer-logo text-white">
                        DRYME
                    </h4>
                    <p class="footer-content1 text-white mt-3">
                        Voluptate amet magna clita tempor. Tempor sea eos vero ipsum. Lorem lorem sit sed elitr sit no,
                        sed kasd et ipsum dolor duo dolor
                    </p>

                    <div class="social-link mt-3 flex space-x-4">
                        <i class="fa fa-facebook-f footer-social-icon mr-3 text-white fa-4x"></i>
                        <i class="fa fa-whatsapp footer-social-icon text-white fa-4x"></i>
                    </div>
                </div>

                <div class="col-span-1 md:col-span-1">
                    <h4 class="footer-title text-white">
                        Get In Touch
                    </h4>
                    <p class="footer-content1 text-white mt-3">
                        Everyone is encouraged to come and visit our store.
                    </p>
                    <div class="shop-contact mt-3 flex flex-row">
                        <i class="fa fa-map-marker footer-icon mr-3 text-white mt-1 fa-lg"></i>
                        <p class="text-white">PS,G-5, Residensi Lakeville, No.68, Jalan Sibu, Taman Wahyu, 68100 Batu Caves, Selangor.</p>
                    </div>
                    <div class="shop-contact mt-2 flex flex-row">
                        <i class="fa fa-phone footer-icon mr-3 text-white mt-1 fa-lg"></i>
                        <p class="text-white">018-235 8815</p>
                    </div>
                </div>

                <div class="col-span-1 md:col-span-1">
                    <h4 class="footer-title text-white">
                        Quick Links
                    </h4>

                    <div class="flex flex-col justify-start mt-3">
                        <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                        <a class="text-white mb-2" href="#about-us"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                        <a class="text-white mb-2" href="#service"><i class="fa fa-angle-right mr-2"></i>Services</a>
                        <a class="text-white" href="#contact"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div id="whatsapp-button" class="fixed bottom-10 right-10 z-10">
        <a href="https://api.whatsapp.com/send?phone=601128289731&text=I want to make an appointment" target="_blank">
            <img src="images/WhatsApp.png" alt="WhatsApp" class="w-24 h-auto">
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

    document.addEventListener('DOMContentLoaded', function() {
        const toggleButton = document.getElementById('navbar-toggle');
        const navbarLinks = document.getElementById('navbar-links');

        toggleButton.addEventListener('click', function() {
            navbarLinks.classList.toggle('hidden');
        });
    });
</script>

</html>