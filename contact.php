<?php
$subject = NULL;

if (isset($_GET['service'])) {
    $subject = 'Enquiry for '. $_GET['service'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sannex - Web Services</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta
        content="sannex, web, web development, programming, graphics, contact, contact page, graphic design, designer, seo, google analytics"
        name="keywords">
    <meta content="" name="description">

    <?php include('views/_head.php')?>
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <!-- <h1 class="m-0"><i class="fa fa-search me-2"></i>SEO<span class="fs-5">Master</span></h1> -->
                    <img src="assets/img/logo.png" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div id="navbar" class="navbar-nav ms-auto py-0">
                        <a href="/#home" class="nav-item nav-link active">Home</a>
                        <a href="/#about" class="nav-item nav-link">About</a>
                        <a href="/#service" class="nav-item nav-link">Service</a>
                        <a href="/#project" class="nav-item nav-link">Project</a>
                    </div>
                    <!-- <butaton type="button" class="btn text-secondary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton> -->
                    <a href="contact.php" class="btn btn-secondary text-light rounded-pill py-2 px-4 ms-3">Contact
                        Us</a>
                </div>
            </nav>

            <div class="container-xxl py-2 bg-primary hero-header mb-5">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-12 text-center">
                            <h1 class="text-white animated zoomIn">Contact Us</h1>
                            <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li> 
                                    <li class="breadcrumb-item"><i class="fas fa-caret-right pl-2 text-white"></i></li> 
                                    <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
                                </ol>
                            </nav>
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
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded" style="max-width: 600px;">
                            <div class="service-icon flex-shrink-0">
                                <i class="fas fa-check fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Contact Info Sent!</h5>
                            <p>Your message has been sent successfully. We will get back to you shortly.</p>
                            <button class="btn btn-light px-3 mt-auto mx-auto rounded-pill" data-bs-dismiss="modal" aria-label="Close">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Full Screen Alert End -->


        <!-- Contact Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                            <h6 class="position-relative d-inline text-primary ps-4">Contact Us</h6>
                            <h2 class="mt-2">Get in Touch with Us</h2>
                        </div>
                        <div class="wow fadeInUp" data-wow-delay="0.3s">
                            <form id="contactForm">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" placeholder="Your Name" required>
                                            <label for="name">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email" placeholder="Your Email" required>
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="subject" placeholder="Subject" required value="<?php echo $subject?>">
                                            <label for="subject">Subject</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                            <label for="message">Message</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3 spinButt" type="button">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
        

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
        $(document).ready(function () {
            $(".spinButt").on("click", function () {
                var button = $(this);
                var name = $('#name').val();
                var email = $('#email').val();
                var subject = $('#subject').val();
                var message = $('#message').val();

                if (email == '') {
                    $('#email').focus()
                } else {
                    var originalText = button.html();
    
                    // Disable the button to prevent multiple clicks while the spinner is active
                    button.prop("disabled", true);
    
                    // Change the button text to the spinner
                    button.html('<span class="spinner-border spinner-border-primary mt-0 p-0" role="status" aria-hidden="true"></span>');
    
                    // Simulate an AJAX call using setTimeout
                    setTimeout(function () {
                        // Simulate the AJAX call completion
                        $.ajax({
                            url: 'model/contact.php',
                            type: 'POST',
                            data: { name: name, email: email, subject: subject, message: message  },
                            success: function (data) {
                                $("#textModal").modal('show');
    
                                // AJAX call successful, stop the spinner and update button text
                                button.html(originalText);
                                button.prop("disabled", false);

                                $("#contactForm")[0].reset();
                            }
                        });
                    }, 2000); // Simulated AJAX delay of 2 seconds
                }
            });
        });
    </script>
</body>

</html>