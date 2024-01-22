<?php
// Define a multidimensional associative array with 6 keys, each having its own associated array
$myArray = array(
    'portfolio-1' => array(
        'name' => 'E-voting Web App',
        'category' => 'Web Design',
        'link' => 'e-voting1.sannex.ng/',
        'tags' => 'edtech',
    ),
    'portfolio-2' => array(
        'name' => 'Fash Shot It',
        'category' => 'Portfolio Design',
        'link' => 'portfolio.sannex.ng/fashshotit/',
        'tags' => 'portfolio business',
    ),
    'portfolio-3' => array(
        'name' => 'Starto Heights',
        'category' => 'Crypto Investment Website',
        'link' => 'stratoheight.com',
        'tags' => 'portfolio business',
    ),
    'portfolio-4' => array(
        'name' => 'TBB E-commerce',
        'category' => 'E-Commerce Development',
        'link' => 'tbb-ecommerce.sannex.ng/',
        'tags' => 'business ecommerce',
    ),
    'portfolio-5' => array(
        'name' => 'Copy Doc',
        'category' => 'Web Design',
        'link' => 'bit.ly/freecopydoc',
        'tags' => 'opensource',
    ),
    'portfolio-6' => array(
        'name' => 'Shine Business',
        'category' => 'Web Design',
        'link' => 'shinebusiness.org/',
        'tags' => 'portfolio business',
    ),
    'portfolio-7' => array(
        'name' => 'Altwires',
        'category' => 'Attendance Management System',
        'link' => 'bit.ly/altwires_staging',
        'tags' => 'business faithtech',
    ),
    'portfolio-8' => array(
        'name' => 'Samakins Portfolio',
        'category' => 'Portfolio Design',
        'link' => 'bit.ly/samakins-portfolio',
        'tags' => 'portfolio',
    ),
    'portfolio-9' => array(
        'name' => 'Breast Cancer ML Model',
        'category' => 'Machine Learning Web App',
        'link' => 'breast-cancer-pred-qdlv.onrender.com/',
        'tags' => 'opensource mlmodel',
    ),
);

// Shuffle the keys randomly
$keys = array_keys($myArray);
shuffle($keys);

// Select the first 6 shuffled keys
$randomKeys = array_slice($keys, 0, 6);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sannex - Web Services</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta
        content="sannex, web, web design, web services, web development, programming, graphics, home, homepage, graphic design, designer, seo, google analytics"
        name="keywords">

    <?php include('views/_head.php')?>
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <?php include('views/_navbar.php')?>

            <div id="home" class="container-xxl py-5 bg-primary hero-header mb-5">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated zoomIn">Boost Your Online Presence with Our Complete Web
                                Services</h1>
                            <p class="text-white pb-3 animated zoomIn">Experience the power of our all-in-one web
                                services. From stunning website
                                design to seamless search engine optimization, we've got you covered.</p>
                            <a href="#get-qoute"
                                class="btn btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Free
                                Quote</a>
                            <a href="contact.php"
                                class="btn btn-outline-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Contact
                                Us</a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <img class="img-fluid" src="assets/img/hero.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Full Screen Alert Start -->
        <div class="modal fade" id="textModal" tabindex="-1">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content" style="background: rgba(29, 29, 39, 0.7);">
                    <div class="modal-header border-0">
                        <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center justify-content-center">
                        <div id="alertBox" class="service-item d-flex flex-column justify-content-center text-center rounded" style="max-width: 600px;">
                            <div class="service-icon flex-shrink-">
                                <i class="fas fa-envelope fa-2x alertIcon_"></i>
                                <i class="fas fa-window-close fa-2x d-none alertIcon"></i>
                            </div>
                            <h5 class="mb-3 alertTitle">Quote Request Sent!</h5>
                            <p id="textModal_">Your quote request has been sent successfully. We'll get back to you shortly via email. If you don't receive our email in your inbox, please check your spam folder.</p>
                            <button class="btn btn-light px-3 mt-auto mx-auto rounded-pill" data-bs-dismiss="modal" aria-label="Close">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Full Screen Alert End -->


        <!-- About Start -->
        <div id="about" class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="section-title position-relative mb-4 pb-2">
                            <h6 class="position-relative text-primary ps-4">About Us</h6>
                            <h2 class="mt-2">Excellence in Comprehensive <br> Web Services</h2>
                        </div>
                        <p class="mb-4">With our extensive expertise in comprehensive web services, we are dedicated to
                            delivering
                            exceptional solutions that drive success for your online presence. Let us help you reach
                            your goals.</p>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Trusted by Clients</h6>
                                <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Professional Team</h6>
                            </div>
                            <div class="col-sm-6">
                                <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>24/7 Support</h6>
                                <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Fair Prices</h6>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mt-4">
                            <a class="btn btn-primary rounded-pill px-4 me-3" href="#service">Learn More</a>
                            <a class="btn btn-outline-primary btn-square me-3" href="https://github.com/sannex-01"
                                target="_blank"><i class="fab fa-github"></i></a>
                            <a class="btn btn-outline-primary btn-square me-3"
                                href="https://www.linkedin.com/company/sannex-ng/" target="_blank"><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-facebook-f"
                                    target="_blank"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="assets/img/about.jpg">
                    </div>
                </div>
            </div>
            <div id="get-qoute"></div>
        </div>
        <!-- About End -->


        <!-- Get Qoute Start -->
        <div class="container-xxl bg-primary newsletter my-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container px-lg-5">
                <div class="row align-items-center" style="height: 250px;">
                    <div class="col-12 col-md-6">
                        <h3 class="text-white">Quick Start</h3>
                        <small class="text-white">Get a quote and let's bring your web dreams to life!</small>
                        <form>
                            <div class="row">
                                <div class="col-md-5 position-relative mt-3">
                                    <select class="form-control border-0 rounded-pill w-100 ps-4 pe-5 bg-white"
                                        id="serviceSelect" style="height: 48px;">
                                        <option value="Web Services">All Services</option>
                                        <option value="Website Design" selected>Website Design</option>
                                        <option value="SEO Services">SEO Services</option>
                                        <option value="ML Model Development">ML Model Development</option>
                                        <option value="Email Marketing">Email Marketing</option>
                                        <option value="Analytics and Reporting">Analytics & Reporting</option>
                                        <option value="Content Management">Content Management</option>
                                    </select>
                                    <button type="button"
                                        class="btn shadow-none position-absolute top-0 end-0 mt-1 me-3">
                                        <i class="fa fa-caret-down text-primary fs-4"></i>
                                    </button>
                                </div>
                                <div class="col-md-7 position-relative mt-3">
                                    <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="email"
                                        placeholder="Enter Your Email" id="email" style="height: 48px;" required>
                                    <button name="get-quote" type="submit"
                                        class="btn shadow-none position-absolute top-0 end-0 mt-1 me-3 spinButt">
                                        <i class="fa fa-paper-plane text-primary fs-4"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 text-center mb-n5 d-none d-md-block">
                        <img class="img-fluid mt-5" style="height: 250px;" src="assets/img/newsletter.png">
                    </div>
                </div>
            </div>
        </div>
        <!-- Get Qoute End -->


        <!-- Service Start -->
        <div id="service" class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="position-relative d-inline text-primary ps-4">Our Services</h6>
                    <h2 class="mt-2">What Solutions We Provide</h2>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fas fa-desktop fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Website Design</h5>
                            <p>Create stunning and functional websites that reflect your brand's identity.</p>
                            <a class="btn px-3 mt-auto mx-auto" href="contact.php?service=Website Design">Request
                                Service</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fas fa-chart-line fa-2x"></i>
                            </div>
                            <h5 class="mb-3">SEO Services</h5>
                            <p>Improve your online visibility and drive more organic traffic to your website.</p>
                            <a class="btn px-3 mt-auto mx-auto" href="contact.php?service=SEO Service">Request
                                Service</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fas fa-cogs fa-2x"></i>
                            </div>
                            <h5 class="mb-3">ML Model Development</h5>
                            <p>Harness the power of machine learning to unlock valuable insights and enhance
                                decision-making.</p>
                            <a class="btn px-3 mt-auto mx-auto" href="contact.php?service=ML Model Development">Request
                                Service</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fas fa-envelope fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Email Marketing</h5>
                            <p>Engage your audience and promote your products or services through effective email
                                campaigns.</p>
                            <a class="btn px-3 mt-auto mx-auto" href="contact.php?service=Email Marketing">Request
                                Service</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fas fa-chart-bar fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Analytics & Reporting</h5>
                            <p>Gain valuable insights into your website's performance with data-driven analytics.</p>
                            <a class="btn px-3 mt-auto mx-auto" href="contact.php?service=Analytics and Reporting">Request
                                Service</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fas fa-cogs fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Content Management</h5>
                            <p>Easily manage and update your website's content with our user-friendly CMS solutions.</p>
                            <a class="btn px-3 mt-auto mx-auto" href="contact.php?service=Content Management">Request
                                Service</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- Portfolio Start -->
        <div id="project" class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="position-relative d-inline text-primary ps-4">Our Projects</h6>
                    <h2 class="mt-2">Recently Launched Projects</h2>
                </div>
                <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="col-12 text-center">
                        <ul class="list-inline mb-5" id="portfolio-flters">
                            <li class="btn px-3 pe-4 active" data-filter="*">All</li>
                            <li class="btn px-3 pe-4" data-filter=".portfolio">Portfolio</li>
                            <li class="btn px-3 pe-4" data-filter=".business">Business</li>
                            <li class="btn px-3 pe-4" data-filter=".opensource">Open Source</li>
                            <li class="btn px-3 pe-4" data-filter=".ecommerce">E-commerce</li>
                            <li class="btn px-3 pe-4" data-filter=".edtech">Ed-Tech</li>
                            <li class="btn px-3 pe-4" data-filter=".mlmodel">ML Model</li>
                            <li class="btn px-3 pe-4" data-filter=".faithtech">Faith-Tech</li>
                        </ul>
                    </div>
                </div>
                <div class="row g-4 portfolio-container">
                    <?php
                    // Iterate through and display the data for the randomly selected keys
                    foreach ($randomKeys as $key) {
                    ?>
                    <div class="col-lg-4 col-md-6 portfolio-item <?php echo $myArray[$key]['tags'] ?> wow zoomIn" data-wow-delay="0.1s">
                        <div class="position-relative rounded overflow-hidden">
                            <img class="img-fluid w-100" src="assets/img/portfolios/<?php echo $key?>.png" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-light" href="assets/img/portfolios/<?php echo $key ?>.png" data-lightbox="portfolio"><i class="fa fa-expand fa-2x text-primary"></i></a>
                                <div class="mt-auto">
                                    <small class="text-white"><i class="fa fa-folder me-2"></i><?php echo $myArray[$key]['category'] ?></small>
                                    <a class="h5 d-block text-white mt-1 mb-0" target="_blank" href="https://<?php echo $myArray[$key]['link'] ?>"><?php echo $myArray[$key]['name'] ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- Portfolio End -->


        <!-- Testimonial Start -->
        <div id="testimonial" class="container-xxl bg-primary testimonial py-5 my-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item bg-transparent border rounded text-white p-4">
                        <i class="fa fa-quote-left fa-2x mb-3"></i>
                        <p>Sam @sannex is highly skilled in his field, and I greatly appreciate his approach
                            to client interactions. His punctuality and ability to deliver results on time are commendable.
                        </p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="assets/img/testimonial/testimonial-1.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h6 class="text-white mb-1">Festus Fasina</h6>
                                <small>Photographer & Cinematographer</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded text-white p-4">
                        <i class="fa fa-quote-left fa-2x mb-3"></i>
                        <p>Sannex, you provided exceptional service, displaying professionalism,
                            expertise, and dedication. You tailored your service to my specific needs,
                            delivering an outstanding results.
                        </p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="assets/img/testimonial/testimonial-2.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h6 class="text-white mb-1">Victor Alede</h6>
                                <small>Educational Technologist</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Team Start -->
        <div id="team" class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="position-relative d-inline text-primary ps-4">Our Team</h6>
                    <h2 class="mt-2">Meet Our Team Members</h2>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp mx-auto" data-wow-delay="0.1s">
                        <div class="team-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5"
                                    style="width: 75px;">
                                    <a class="btn btn-square text-primary bg-white my-1"
                                        href="https://wa.me/+2347048706198" target="_blank"><i
                                            class="fab fa-whatsapp"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1"
                                        href="https://web.facebook.com/sannexceo/" target="_blank"><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1"
                                        href="https://www.linkedin.com/in/samuel-akinyemi-927751225/" target="_blank"><i
                                            class="fab fa-linkedin-in"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1"
                                        href="https://github.com/samakins672" target="_blank"><i
                                            class="fab fa-github"></i></a>
                                </div>
                                <img class="img-fluid rounded w-75" src="assets/img/team-1-1.jpg" alt="">
                            </div>
                            <div class="px-4 py-3">
                                <h5 class="fw-bold m-0">Samuel Akinyemi</h5>
                                <small>CEO / Back-end Developer</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp mx-auto" data-wow-delay="0.3s">
                        <div class="team-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5"
                                    style="width: 75px;">
                                    <a class="btn btn-square text-primary bg-white my-1"
                                        href="https://wa.me/+234705375950" target="_blank"><i
                                            class="fab fa-whatsapp"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1"
                                        href="https://twitter.com/beetechdivva?t=z3en2QIfqo2qL_mVxr-WEw&s=09"
                                        target="_blank"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1"
                                        href="https://www.linkedin.com/in/blessing-patrick-1b16b626a/"
                                        target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1"
                                        href="https://github.com/TechDivva20" target="_blank"><i
                                            class="fab fa-github"></i></a>
                                </div>
                                <img class="img-fluid rounded w-75" src="assets/img/team-2.jpg" alt="">
                            </div>
                            <div class="px-4 py-3">
                                <h5 class="fw-bold m-0">Blessing Patrick</h5>
                                <small>Front-end Developer</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- Footer Start -->
        <?php include('views/_footer.php') ?>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/lib/wow/wow.min.js"></script>
    <script src="assets/lib/easing/easing.min.js"></script>
    <script src="assets/lib/waypoints/waypoints.min.js"></script>
    <script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="assets/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="assets/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="assets/js/main.js"></script>
    <script>
        const sections = document.querySelectorAll('.container-xxl');
        const navLinks = document.querySelectorAll('#navbar a');

        window.addEventListener('scroll', () => {
            let current = '';

            sections.forEach((section) => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;

                if (pageYOffset >= sectionTop - sectionHeight / 2) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach((a) => {
                a.classList.remove('active');
                if (a.getAttribute('href').includes(current)) {
                    a.classList.add('active');
                }
            });
        });

        $(document).ready(function () {
            $(".spinButt").on("click", function () {
                var button = $(this);
                var serviceSelect = $('#serviceSelect').val();
                var email = $('#email').val();
                var get_quote = 1;

                if (email == '') {
                    $('#email').focus();
                } else {
                    var originalText = button.html();

                    // Disable the button to prevent multiple clicks while the spinner is active
                    button.removeClass('mt-1');
                    button.prop("disabled", true);

                    // Change the button text to the spinner
                    button.html('<span class="spinner-border spinner-border-primary mt-0 p-0" role="status" aria-hidden="true"></span>');

                    // Make the AJAX call
                    $.ajax({
                        url: 'model/contact.php',
                        type: 'POST',
                        data: { service: serviceSelect, email: email, get_quote: get_quote },
                        success: function (data) {
                            // Handle success
                            $("#textModal").modal('show');
                            $('#textModal_').html(data.message);
                            $('.alertTitle').html(data.title);

                            if (data.status == 'failed') {
                                $('.alertIcon_').hide();
                                $('.alertIcon').removeClass('d-none');
                                $('#alertBox').addClass('bg-danger');
                                $('#textModal_').addClass('text-white');
                            } else {
                                $('.alertIcon_').show();
                                $('.alertIcon').addClass('d-none');
                                $('#alertBox').removeClass('bg-danger');
                                $('#textModal_').removeClass('text-white');
                            }
                        },
                        error: function (data) {
                            // Handle success
                            $("#textModal").modal('show');
                            $('#textModal_').html(data.message);
                            $('.alertTitle').html(data.title);

                            $('.alertIcon_').show();
                            $('.alertIcon').addClass('d-none');
                            $('#alertBox').removeClass('bg-danger');
                            $('#textModal_').removeClass('text-white');
                        },
                        complete: function () {
                            // Regardless of success or error, stop the spinner and update button text
                            button.addClass('mt-1');
                            button.html(originalText);
                            button.prop("disabled", false);
                        }
                    });
                }
            });
        });

    </script>
</body>

</html>