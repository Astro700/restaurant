<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Blue Moon Restaurant</title>
    <link rel="icon" href="img/core-img/favicon.ico">
    <link href="style.css" rel="stylesheet">
    <link href="css/responsive/responsive.css" rel="stylesheet">

</head>

<body>
    <div class="kt-search-form d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-close-btn" id="closeBtn">
                        <i class="pe-7s-close-circle" aria-hidden="true"></i>
                    </div>
                    <form action="#" method="get">
                        <input type="search" name="ktSearch" id="search" placeholder="Search Your Favourite Dish ...">
                        <input type="submit" class="d-none" value="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <header class="header_area" id="header">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <nav class="h-100 navbar navbar-expand-lg align-items-center">
                        <a class="navbar-brand" href="index.html">Blue Moon Restaurant</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ktNav" aria-controls="ktNav" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                        <div class="collapse navbar-collapse" id="ktNav">
                            <ul class="navbar-nav ml-auto" id="ktMenu">
                                <li class="nav-item ">
                                    <a class="nav-link" href="index">Home </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="regular-page">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="menu">Menu</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="reservation">Reservation</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="contact">Contact <span class="sr-only">(current)</span></a>
                                </li>
                            </ul>
                            <!-- Search Btn -->
                            <div class="kt-search-btn">
                                <a id="search-btn" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Breadcumb Area Start ***** -->
    <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/hero-4.jpg)">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h2>Contact</h2>
                        <p><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:+916283740573">+91 6283 740 573</a> <a href="tel:+918919123052">+91 8919 123 052</a></p>
                        <p><i class="fa fa-map-marker" aria-hidden="true"></i> Lovely Professional University ,Phagwara , Jalandar  city,  Punjab  ,India  144411</p>
                        <p><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:inbox@kitchenthreads.com">inbox@bluemoonrestaurant.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Breadcumb Area End ***** -->

    <!-- ***** Contact Area Start ***** -->
    <div class="kt-contact-area d-md-flex align-items-center" id="contact">
        <div class="contact-form-area d-flex justify-content-end">
            <div class="contact-form">
                <div class="contact-form-title">
                    <p>Get in touch</p>
                </div>
                <form action="#">
                    <div class="row">
                        <div class="col-12">
                            <input type="text" class="form-control" placeholder="Your Name" required>
                        </div>
                        <div class="col-12">
                            <input type="email" class="form-control" placeholder="Your Email" required>
                        </div>
                        <div class="col-12">
                            <textarea name="message" class="form-control" id="Message" cols="30" rows="10" placeholder="Your Message" required></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn kt-btn"><span></span> Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="kt-map-area wow fadeInRightBig" data-wow-delay="0.5s">
            <div id="googleMap"></div>
        </div>
    </div>
    <footer class="kt-footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-text">
                        <a href="#" class="navbar-brand">Blue Moon Restaurant</a>
                        <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved by <a href="#" target="_blank">Ravindra Singh Bhati</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <script src="js/bootstrap/popper.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <script src="js/others/plugins.js"></script>
    <script src="https://www.google.com/maps/place/Lovely+Professional+University/@31.2536076,75.7014803,17z/data=!3m1!4b1!4m5!3m4!1s0x391a5a594d22b88d:0x4cc934c58d0992ec!8m2!3d31.253603!4d75.703669"></script>
    <script src="js/google-map/map-active.js"></script>
    <script src="js/active.js"></script>
</body>