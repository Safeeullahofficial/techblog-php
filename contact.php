<?php

include './connection.php';

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechBlog - Home</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- ================= NAVBAR ================= -->

    <nav class="navbar navbar-expand-lg navbar-dark sticky-top custom-navbar">
        <div class="container">

            <!-- Logo -->
            <a class="navbar-brand fw-bold fs-3" href="#">
                TechBlog
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">

                <!-- Center Menu -->
                <ul class="navbar-nav mx-auto">

                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Blogs
                        </a>

                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="Blog/programming.php">
                                    Programming
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="Blog/ai.php">
                                    Artificial Intelligence
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="Blog/blockchain.php">
                                    Blockchain
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>

                </ul>

                <!-- Right Side -->
                <div class="d-flex align-items-center gap-3">

                    <a href="#" class="btn custom-btn">
                        Subscribe
                    </a>

                    <div class="social-icons">

                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>

                        <a href="#">
                            <i class="fab fa-instagram"></i>
                        </a>

                        <a href="#">
                            <i class="fab fa-linkedin-in"></i>
                        </a>

                        <a href="#">
                            <i class="fab fa-x-twitter"></i>
                        </a>

                    </div>

                </div>

            </div>

        </div>
    </nav>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact Us - TechBlog</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

        <style>
            :root {
                --primary: #38bdf8;
                --dark1: #0f172a;
                --dark2: #1e293b;
            }

            body {
                background: #f8fafc;
                font-family: 'Segoe UI', sans-serif;
            }

            /* Banner */

            .contact-banner {
                height: 450px;
                background: url('https://images.unsplash.com/photo-1497366754035-f200968a6e72?q=80&w=2070') center center/cover;
                position: relative;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .contact-banner::before {
                content: '';
                position: absolute;
                inset: 0;
                background: rgba(15, 23, 42, 0.75);
            }

            .banner-content {
                position: relative;
                z-index: 2;
                text-align: center;
                color: white;
            }

            .banner-content h1 {
                font-size: 4rem;
                font-weight: 700;
            }

            .banner-content p {
                font-size: 1.1rem;
                max-width: 700px;
                margin: auto;
                color: #dbeafe;
            }

            /* Contact Section */

            .contact-section {
                padding: 100px 0;
            }

            .contact-info {
                background: linear-gradient(135deg, #0f172a, #1e293b);
                color: white;
                border-radius: 20px;
                padding: 40px;
                height: 100%;
            }

            .contact-info h2 {
                font-weight: 700;
                margin-bottom: 20px;
            }

            .contact-info p {
                color: #cbd5e1;
                margin-bottom: 30px;
            }

            .info-box {
                display: flex;
                gap: 15px;
                margin-bottom: 30px;
            }

            .info-box i {
                width: 55px;
                height: 55px;
                background: #38bdf8;
                color: white;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 20px;
            }

            .info-box h5 {
                margin-bottom: 5px;
            }

            .contact-form {
                background: white;
                padding: 40px;
                border-radius: 20px;
                box-shadow: 0 10px 35px rgba(0, 0, 0, .08);
            }

            .contact-form h2 {
                color: #0f172a;
                font-weight: 700;
                margin-bottom: 25px;
            }

            .form-control {
                padding: 14px;
                border-radius: 10px;
            }

            .form-control:focus {
                border-color: #38bdf8;
                box-shadow: none;
            }

            .btn-send {
                background: #38bdf8;
                color: white;
                padding: 12px 35px;
                border: none;
                border-radius: 10px;
                transition: .3s;
            }

            .btn-send:hover {
                background: #0ea5e9;
                color: white;
            }

            /* Map Section */

            .map-section {
                padding-bottom: 100px;
            }

            .map-section h2 {
                text-align: center;
                margin-bottom: 40px;
                font-weight: 700;
                color: #0f172a;
            }

            .map-container {
                overflow: hidden;
                border-radius: 20px;
                box-shadow: 0 10px 35px rgba(0, 0, 0, .08);
            }

            iframe {
                width: 100%;
                height: 450px;
                border: none;
            }
        </style>
    </head>

    <body>

        <!-- Header Here -->

        <!-- Banner Start -->

        <section class="contact-banner">
            <div class="banner-content">
                <h1>Contact Us</h1>
                <p>
                    We'd love to hear from you. Have questions, feedback, or business inquiries?
                    Reach out to the TechBlog team and we'll get back to you as soon as possible.
                </p>
            </div>
        </section>

        <!-- Banner End -->


        <!-- Contact Section Start -->

        <section class="contact-section">
            <div class="container">

                <div class="row g-5">

                    <div class="col-lg-5">

                        <div class="contact-info">

                            <h2>Get In Touch</h2>

                            <p>
                                Feel free to contact us regarding blog collaborations, technical support,
                                advertising opportunities, or general inquiries.
                            </p>

                            <div class="info-box">
                                <i class="fas fa-envelope"></i>
                                <div>
                                    <h5>Email Address</h5>
                                    <p>info@techblog.com</p>
                                </div>
                            </div>

                            <div class="info-box">
                                <i class="fas fa-phone"></i>
                                <div>
                                    <h5>Phone Number</h5>
                                    <p>+92 300 1234567</p>
                                </div>
                            </div>

                            <div class="info-box">
                                <i class="fas fa-location-dot"></i>
                                <div>
                                    <h5>Office Location</h5>
                                    <p>Aptech Gulshan-II, Karachi, Pakistan</p>
                                </div>
                            </div>

                            <div class="info-box">
                                <i class="fas fa-clock"></i>
                                <div>
                                    <h5>Working Hours</h5>
                                    <p>Monday - Saturday (09:00 AM - 06:00 PM)</p>
                                </div>
                            </div>

                        </div>

                    </div>


                    <?php

                    if (isset($_POST['submit'])) {

                        $fullname = $_POST['fullname'];
                        $email = $_POST['email'];
                        $number = $_POST['number'];
                        $message = $_POST['message'];


                        $query = "insert into `techblog`.`feedback`
                        (fullname, email, number, message)
                        values ('$fullname', '$email', '$number', '$message')";

                        if (mysqli_query($connection, $query)) {
                            echo "
        <script>
            alert('Your Feedback send Successfully! Thankyou😎');
            window.location.href = 'contact.php';
        </script>
    ";
                        } else {
                            die(mysqli_connect_error($connection));
                        }

                        mysqli_close($connection);
                    }


                    ?>



                    <div class="col-lg-7">

                        <div class="contact-form">

                            <h2>Send Your Feedback</h2>

                            <form method="post">

                                <div class="row">

                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control" placeholder="Full Name" name="fullname"
                                            required>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <input type="email" class="form-control" placeholder="Email Address" required
                                            name="email">
                                    </div>

                                </div>

                                <div class="mb-3">
                                    <input type="tel" class="form-control" placeholder="Phone Number" required
                                        name="number">
                                </div>

                                <div class="mb-3">
                                    <textarea rows="6" class="form-control" placeholder="Write Your Message" required
                                        name="message"></textarea>
                                </div>

                                <button class="btn btn-send" type="submit" name="submit">
                                    <i class="fas fa-paper-plane me-2"></i>
                                    Send Message
                                </button>

                            </form>

                        </div>

                    </div>

                </div>

            </div>
        </section>

        <!-- Contact Section End -->


        <!-- Google Map Start -->

        <section class="map-section">
            <div class="container">

                <h2>Our Location</h2>

                <div class="map-container">

                    <iframe
                        src="https://maps.google.com/maps?q=Aptech%20Gulshan%20II%20Karachi&t=&z=15&ie=UTF8&iwloc=&output=embed"
                        allowfullscreen="" loading="lazy">
                    </iframe>

                </div>

            </div>
        </section>

        <!-- Google Map End -->


        <!-- Footer Here -->

    </body>

    </html>
    <!-- ================= FOOTER ================= -->

    <footer class="footer">

        <div class="container">

            <div class="row">

                <div class="col-md-4">

                    <h3>TechBlog</h3>

                    <p>
                        Professional technology blog covering modern digital trends.
                    </p>

                </div>

                <div class="col-md-4">

                    <h5>Quick Links</h5>

                    <ul class="footer-links">

                        <li><a href="#">Home</a></li>
                        <li><a href="#">Blogs</a></li>
                        <li><a href="#">Contact</a></li>

                    </ul>

                </div>

                <div class="col-md-4">

                    <h5>Follow Us</h5>

                    <div class="footer-social">

                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-x-twitter"></i></a>

                    </div>

                </div>

            </div>

            <hr>

            <div class="text-center">

                © 2026 | All Rights Reserved

            </div>

        </div>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>