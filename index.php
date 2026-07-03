<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechBlog - Home</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

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

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <!-- Center Menu -->
            <ul class="navbar-nav mx-auto">

                <li class="nav-item">
                    <a class="nav-link active" href="index.php">Home</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"
                        href="#"
                        role="button"
                        data-bs-toggle="dropdown">
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

<!-- ================= SLIDER ================= -->

<div id="blogSlider" class="carousel slide carousel-fade"
    data-bs-ride="carousel">

    <div class="carousel-inner">

        <div class="carousel-item active">
            <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3"
                class="d-block w-100 slider-img"
                alt="Programming">

            <div class="carousel-caption">
                <h1>Programming Blogs</h1>
                <p>Latest coding tutorials and development guides.</p>
            </div>
        </div>

        <div class="carousel-item">
            <img src="https://images.unsplash.com/photo-1677442136019-21780ecad995"
                class="d-block w-100 slider-img"
                alt="AI">

            <div class="carousel-caption">
                <h1>Artificial Intelligence</h1>
                <p>Explore future technologies and innovations.</p>
            </div>
        </div>

        <div class="carousel-item">
            <img src="https://images.unsplash.com/photo-1639762681485-074b7f938ba0"
                class="d-block w-100 slider-img"
                alt="Blockchain">

            <div class="carousel-caption">
                <h1>Blockchain Technology</h1>
                <p>Learn Web3, Crypto and Blockchain systems.</p>
            </div>
        </div>

    </div>

    <button class="carousel-control-prev"
        type="button"
        data-bs-target="#blogSlider"
        data-bs-slide="prev">

        <span class="carousel-control-prev-icon"></span>
    </button>

    <button class="carousel-control-next"
        type="button"
        data-bs-target="#blogSlider"
        data-bs-slide="next">

        <span class="carousel-control-next-icon"></span>
    </button>

</div>

<!-- ================= FEATURED BLOGS ================= -->

<section class="featured-section py-5">

    <div class="container">

        <div class="text-center mb-5">

            <h2 class="section-title">
                Featured Blogs
            </h2>

            <p class="text-muted">
                Discover our latest articles and technology insights.
            </p>

        </div>

        <div class="row g-4">

            <!-- Card 1 -->
            <div class="col-md-4">

                <div class="card blog-card h-100">

                    <img src="https://images.unsplash.com/photo-1515879218367-8466d910aaa4"
                        class="card-img-top">

                    <div class="card-body">

                        <h5>Programming Fundamentals</h5>

                        <p>
                            Learn modern programming concepts and improve your coding skills.
                        </p>

                        <a href="Blog/programming.php"
                            class="btn custom-btn">
                            Read More
                        </a>

                    </div>

                </div>

            </div>

            <!-- Card 2 -->
            <div class="col-md-4">

                <div class="card blog-card h-100">

                    <img src="https://images.unsplash.com/photo-1677442136019-21780ecad995"
                        class="card-img-top">

                    <div class="card-body">

                        <h5>Artificial Intelligence</h5>

                        <p>
                            Explore machine learning, automation and AI powered solutions.
                        </p>

                        <a href="Blog/ai.php"
                            class="btn custom-btn">
                            Read More
                        </a>

                    </div>

                </div>

            </div>

            <!-- Card 3 -->
            <div class="col-md-4">

                <div class="card blog-card h-100">

                    <img src="https://images.unsplash.com/photo-1639762681485-074b7f938ba0"
                        class="card-img-top">

                    <div class="card-body">

                        <h5>Blockchain Future</h5>

                        <p>
                            Discover decentralized technologies shaping tomorrow's internet.
                        </p>

                        <a href="Blog/blockchain.php"
                            class="btn custom-btn">
                            Read More
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ================= BANNER ================= -->

<section class="banner-section">

    <div class="overlay">

        <div class="container text-center">

            <h1>
                Explore The Future Of Technology
            </h1>

            <p>
                Stay updated with programming, AI and blockchain trends.
            </p>

            <a href="#" class="btn custom-btn">
                Explore Now
            </a>

        </div>

    </div>

</section>

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