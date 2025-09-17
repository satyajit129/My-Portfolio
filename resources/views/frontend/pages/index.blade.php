<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Header</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&family=Sora:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <div class="container header_section">
            <!-- Logo with image -->
            <a href="#" class="logo">
                <img src="{{ asset('images/satyajit_logo.png') }}" alt="Satyajit Logo">
            </a>

            <!-- Hamburger -->
            <div class="hamburger" id="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <!-- Navigation -->
            <nav id="nav-menu">
                <ul>
                    <li><a href="#portfolio">Portfolios</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#resume">Resume</a></li>
                    <li><a href="#skills">Skills</a></li>
                    <li><a href="#testimonials">Testimonials</a></li>
                    <li><a href="#pricing">Pricing</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <!-- Button inside nav for mobile -->
                <a href="#contact" class="btn-talk mobile-btn">Let’s Talk</a>
            </nav>

            <!-- Button (desktop only) -->
            <a href="#contact" class="btn-talk desktop-btn">Let’s Talk</a>
        </div>
    </header>

    <main>
        <section class="hero">
            <div class="container">

                <div class="hero-container">
                    <!-- Left side: Text -->
                    <div class="hero-text">
                        <h2>Hello <span>👋🏻</span></h2>
                        <h4>I am Satyajit</h4>
                        <h1>Full Stack Web Developer</h1>
                        <p>
                            Designing digital user-centered experiences with intuitive UI that are both beautiful and
                            functional.
                        </p>
                        <div class="hero-btns">
                            <a href="#contact" class="btn-talk">Book a Free Call</a>
                            <div class="hero-social">
                                <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                            </div>

                        </div>
                    </div>

                    <!-- Right side: Image -->
                    <div class="hero-image">
                        <img src="{{ asset('images/satyajit_1.jpg') }}" alt="Rahad Product Designer">
                    </div>
                </div>

            </div>
        </section>
        <section class="hero-stats">
            <div class="container">
                <div class="stats-container">
                    <div class="stat-item">
                        <h2 data-count="2">0<span></span></h2>
                        <p>Years of Experience</p>
                    </div>
                    <div class="stat-item">
                        <h2 data-count="30">0<span></span></h2>
                        <p>Projects Completed</p>
                    </div>
                    <div class="stat-item">
                        <h2 data-count="25">0<span></span></h2>
                        <p>Happy Clients</p>
                    </div>
                    <div class="stat-item">
                        <h2 data-count="5">0</h2>
                        <p>Big Companies</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="recent-work">
            <div class="container">
                <h2 class="section-title">My Recent Work</h2>

                <!-- Filter Buttons -->
                <div class="filter-buttons">
                    <button class="filter-btn active" data-filter="*">All</button>
                    <button class="filter-btn" data-filter=".web">Web</button>
                    <button class="filter-btn" data-filter=".uiux">UI/UX</button>
                    <button class="filter-btn" data-filter=".branding">Branding</button>
                </div>

                <!-- Projects Grid -->
                <div class="projects-grid">
                    <div class="project-item web">
                        <img src="{{ asset('images/project_1.jpg') }}" alt="">
                        <h2>Web Project 1 <i class="fas fa-arrow-right"></i></h2>
                    </div>
                    <div class="project-item uiux">
                        <img src="{{ asset('images/project_2.jpg') }}" alt="">
                        <h2>UI/UX Project 1 <i class="fas fa-arrow-right"></i></h2>
                    </div>
                    <div class="project-item branding">
                        <img src="{{ asset('images/project_3.jpg') }}" alt="">
                        <h2>Branding Project 1 <i class="fas fa-arrow-right"></i></h2>
                    </div>
                    <div class="project-item web">
                        <img src="{{ asset('images/project_4.jpg') }}" alt="">
                        <h2>Web Project 2 <i class="fas fa-arrow-right"></i></h2>
                    </div>
                    <div class="project-item uiux">
                        <img src="{{ asset('images/project_5.jpg') }}" alt="">
                        <h2>UI/UX Project 2 <i class="fas fa-arrow-right"></i></h2>
                    </div>
                    <div class="project-item branding">
                        <img src="{{ asset('images/project_6.jpg') }}" alt="">
                        <h2>Branding Project 2 <i class="fas fa-arrow-right"></i></h2>
                    </div>
                </div>
            </div>
        </section>

        <!-- My Quality Services Section -->
        <section class="quality-services">
            <div class="container">
                <h2 class="section-title">My Quality Services</h2>

                <div class="services-list">

                    <!-- Service 02 -->
                    <div class="service-item">
                        <div class="service-col service-col-10">
                            <span>01</span>
                        </div>
                        <div class="service-col service-col-30">
                            <h3>Frontend Development</h3>
                        </div>
                        <div class="service-col service-col-60">

                            <p>Building responsive and interactive web interfaces using modern technologies like HTML,
                                CSS, JavaScript, and React.js.</p>
                        </div>
                    </div>

                    <!-- Service 03 -->
                    <div class="service-item">
                        <div class="service-col service-col-10">
                            <span>02</span>
                        </div>
                        <div class="service-col service-col-30">
                            <h3>Backend Development</h3>
                        </div>
                        <div class="service-col service-col-60">

                            <p>Developing robust server-side applications and APIs using PHP, Laravel, Node.js, or other
                                backend frameworks.</p>
                        </div>
                    </div>

                    <!-- Service 04 -->
                    <div class="service-item">
                        <div class="service-col service-col-10">
                            <span>03</span>
                        </div>
                        <div class="service-col service-col-30">
                            <h3>Database Design</h3>
                        </div>
                        <div class="service-col service-col-60">

                            <p>Designing efficient and scalable database structures using MySQL, PostgreSQL, or MongoDB
                                for optimal performance.</p>
                        </div>
                    </div>

                    <!-- Service 05 -->
                    <div class="service-item">
                        <div class="service-col service-col-10">
                            <span>04</span>
                        </div>
                        <div class="service-col service-col-30">
                            <h3>API Integration</h3>
                        </div>
                        <div class="service-col service-col-60">

                            <p>Integrating third-party APIs and creating custom APIs to ensure seamless communication
                                between frontend and backend.</p>
                        </div>
                    </div>

                    <!-- Service 06 -->
                    <div class="service-item">
                        <div class="service-col service-col-10">
                            <span>05</span>
                        </div>
                        <div class="service-col service-col-30">
                            <h3>Full Stack Project Management</h3>
                        </div>
                        <div class="service-col service-col-60">

                            <p>Managing complete web development projects from design to deployment, ensuring
                                high-quality and timely delivery.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>



    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Isotope -->
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>

    <script>
        $(window).on('load', function() {
            // init Isotope
            var $grid = $('.projects-grid').isotope({
                itemSelector: '.project-item',
                layoutMode: 'fitRows'
            });

            // filter items on button click
            $('.filter-btn').on('click', function() {
                var filterValue = $(this).attr('data-filter');
                $grid.isotope({
                    filter: filterValue
                });

                // add active class to the clicked button
                $('.filter-btn').removeClass('active');
                $(this).addClass('active');
            });
        });
    </script>
    <script>
        // Hamburger toggle
        const hamburger = document.getElementById('hamburger');
        const navMenu = document.getElementById('nav-menu');

        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('active');
            navMenu.classList.toggle('active');
        });
    </script>


    <script>
        $(document).ready(function() {
            function isScrolledIntoView(elem) {
                var docViewTop = $(window).scrollTop();
                var docViewBottom = docViewTop + $(window).height();
                var elemTop = $(elem).offset().top;
                var elemBottom = elemTop + $(elem).height();
                return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
            }

            function runCounters() {
                $('.stat-item h2').each(function() {
                    var $this = $(this);
                    if (!$this.hasClass('counted') && isScrolledIntoView($this)) {
                        $this.addClass('counted');
                        var target = +$this.data('count');
                        var plusSign = $this.find('span').length ? '+' : '';
                        $({
                            countNum: 0
                        }).animate({
                            countNum: target
                        }, {
                            duration: 2000,
                            easing: 'swing',
                            step: function() {
                                $this.text(Math.floor(this.countNum) + plusSign);
                            },
                            complete: function() {
                                $this.text(target + plusSign);
                            }
                        });
                    }
                });
            }

            $(window).on('scroll', runCounters);
            runCounters(); // in case already in view
        });
    </script>

</body>

</html>
