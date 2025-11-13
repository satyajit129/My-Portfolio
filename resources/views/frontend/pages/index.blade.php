<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Satyajit  Roy | Full Stack Web Developer | HTML, CSS, JavaScript, React, Next.js, PHP, Laravel</title>
   <meta name="description" content="Professional Full Stack Web Developer skilled in HTML, CSS, JavaScript, React, Next.js, PHP, and Laravel. Building responsive, user-centered web applications that are both visually appealing and highly functional.">
    <meta name="keywords" content="Full Stack Web Developer, Web Development, HTML, CSS, JavaScript, React, Next.js, PHP, Laravel, Responsive Design, Web Applications, Frontend Development, Backend Development">
    <meta name="author" content="Satyajit Roy">
    <link rel="icon" type="image/png" href="{{ asset('images/L.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" />


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
                <img src="{{ asset('images/AI_LOGO.png') }}" alt="Satyajit Logo">
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
                    <li><a href="#education">Education</a></li>
                    <li><a href="#experience">Experience</a></li>
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
                            Creating intuitive and interactive digital experiences using HTML, CSS, JavaScript, React, Next.js, PHP, and Laravel for scalable and user-centered web solutions.
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
        <section class="recent-work" id="portfolio">
            <div class="container">
                <h2 class="section-title">My Recent Work</h2>

                <!-- Filter Buttons -->
                <div class="filter-buttons">
                    <button class="filter-btn active" data-filter="*">All Projects</button>
                    <button class="filter-btn" data-filter=".ai-project">AI Project</button>
                    <button class="filter-btn" data-filter=".management">Management Project</button>
                    <button class="filter-btn" data-filter=".e-gov">E-Government</button>
                    <button class="filter-btn" data-filter=".ecomerce">Ecommerce</button>
                </div>

                <!-- Projects Grid -->
                <div class="projects-grid">
                    <div class="project-item ai-project">
                        <a href="http://f16.220.mytemp.website/">

                       
                        <img src="{{ asset('images/project_1.PNG') }}" alt="">
                        <h2> AI-Powered Veterinary KPI Dashboard (MVP) <i class="fas fa-arrow-right"></i></h2>
                         </a>
                    </div>
                    <div class="project-item management">
                        <a href="https://account.solvexa24.com/admin/login">
                            <img src="{{ asset('images/project_2.PNG') }}" alt="">
                        <h2>Accounting Software Solution <i class="fas fa-arrow-right"></i></h2>
                        </a>
                        
                    </div>
                    <div class="project-item e-gov">
                        <a href="https://noc.kda.gov.bd/">
                        <img src="{{ asset('images/project_3.PNG') }}" alt="">
                        <h2>NOC Project E Government Solutions <i class="fas fa-arrow-right"></i></h2>
                        </a>
                    </div>
                    <div class="project-item ecomerce">
                        <a href="https://spacefactor.design/">
                        <img src="{{ asset('images/project_4.PNG') }}" alt="">
                        <h2>Space Factor Interior Design Ecommerce Solution <i class="fas fa-arrow-right"></i></h2>
                        </a>
                    </div>
                    
                    <div class="project-item e-gov">
                        <a href="https://kcctl.gov.bd/">
                        <img src="{{ asset('images/project_5.PNG') }}" alt="">
                        <h2>Trade License E Government Project <i class="fas fa-arrow-right"></i></h2>
                        </a>
                    </div>
                    
                    <div class="project-item management">
                        <a href="https://hr.edutune.com/">
                        <img src="{{ asset('images/project_6.PNG') }}" alt="">
                        <h2>Hr Management Solution <i class="fas fa-arrow-right"></i></h2>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- My Quality Services Section -->
        <section class="quality-services" id="services">
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

        <!-- My Education Section -->
        <section class="education" id="education">
            <div class="container">
                <h2 class="section-title">My Education</h2>

                <div class="services-list">

                    <!-- Education 01 -->
                    <div class="service-item">
                        <div class="service-col service-col-10">
                            <span>01</span>
                        </div>
                        <div class="service-col service-col-30">
                            <h3>Khulna University</h3>
                        </div>
                        <div class="service-col service-col-60">
                            <h3>Masters of Science - Computer Science and Engineering</h3>
                            <p>January 2023 - Now | Khulna 9208, Bangladesh<br>
                                Courses: Advance Probability and Statistics, Advance Software Engineering, Research
                                Methodology, Blockchain.</p>
                        </div>
                    </div>

                    <!-- Education 02 -->
                    <div class="service-item">
                        <div class="service-col service-col-10">
                            <span>02</span>
                        </div>
                        <div class="service-col service-col-30">
                            <h3>North Western University</h3>
                        </div>
                        <div class="service-col service-col-60">
                            <h3>Bachelor of Science - Computer Science and Engineering</h3>
                            <p>January 2018 - July 2022 | Khulna 9100, Bangladesh<br>
                                Courses: Operating Systems, Data Structures, Digital Logic Circuit Design, Artificial
                                Intelligence, Machine Learning, Networking, Databases.</p>
                        </div>
                    </div>

                    <!-- Education 03 -->
                    <div class="service-item">
                        <div class="service-col service-col-10">
                            <span>03</span>
                        </div>
                        <div class="service-col service-col-30">
                            <h3>Shaheed Muktijodhya Mahabidyalya</h3>
                        </div>
                        <div class="service-col service-col-60">
                            <h3>Science</h3>
                            <p>July 2015 - July 2017 | Tala, Satkhira<br></p>
                        </div>
                    </div>

                    <!-- Education 04 -->
                    <div class="service-item">
                        <div class="service-col service-col-10">
                            <span>04</span>
                        </div>
                        <div class="service-col service-col-30">
                            <h3>A.K.B.K High School</h3>
                        </div>
                        <div class="service-col service-col-60">
                            <h3>Science</h3>
                            <p>Jan 2013 – May 2015 | Dumuria, Khulna<br></p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- My Experience Section -->
        <section class="experience" id="experience">
            <div class="container">
                <h2 class="section-title">My Experience</h2>

                <div class="services-list">

                    <!-- Experience 05 -->
                    <div class="service-item">
                        <div class="service-col service-col-10">
                            <span>01</span>
                        </div>
                        <div class="service-col service-col-30">
                            <h3>Senior Software Engineer | Towndevs</h3>
                        </div>
                        <div class="service-col service-col-60">
                            <h3>July 2024 - Present</h3>
                            <p>At Towndevs, I serve as a Senior Software Engineer leading full-stack development
                                projects. My responsibilities include architecting scalable systems, guiding junior
                                developers, and delivering enterprise-grade solutions using Laravel, React, Next.js,
                                RESTful APIs, and cloud deployment strategies.</p>
                        </div>
                    </div>
                    <!-- Experience 01 -->
                    <div class="service-item">
                        <div class="service-col service-col-10">
                            <span>02</span>
                        </div>
                        <div class="service-col service-col-30">
                            <h3>Web Developer | Solvexa (Marketing Agency)</h3>
                        </div>
                        <div class="service-col service-col-60">
                            <h3>July 2025 - Present</h3>
                            <p>As a Freelance Web Developer at Solvexa, I worked on contract-based projects focusing on
                                delivering tailored web solutions. My role involved developing backend functionality
                                using Laravel (PHP), integrating MySQL databases, and building modern frontend
                                interfaces with Bootstrap.</p>
                        </div>
                    </div>

                    <!-- Experience 02 -->
                    <div class="service-item">
                        <div class="service-col service-col-10">
                            <span>03</span>
                        </div>
                        <div class="service-col service-col-30">
                            <h3>Web Developer | Edutune (Edtech)</h3>
                        </div>
                        <div class="service-col service-col-60">
                            <h3>February 2025 - Present</h3>
                            <p>As a Web Developer at Edutune, I am responsible for designing, developing, and
                                maintaining scalable web applications. My role primarily focuses on building robust
                                backend systems using Laravel (PHP) and developing interactive and responsive user
                                interfaces with React.</p>
                        </div>
                    </div>

                    <!-- Experience 03 -->
                    <div class="service-item">
                        <div class="service-col service-col-10">
                            <span>04</span>
                        </div>
                        <div class="service-col service-col-30">
                            <h3>Web Developer | Amreen Info Tech Limited (Software Company)</h3>
                        </div>
                        <div class="service-col service-col-60">
                            <h3>December 2023 - Present</h3>
                            <p>At Amreen Info Tech Limited, I worked as a Full Stack Developer, building and maintaining
                                scalable SaaS platforms, HRM solutions, and data-driven applications. My expertise
                                included PHP, Laravel, React, Next.js, Bootstrap, jQuery, and Ajax, with strong backend
                                development in RESTful APIs, MySQL optimization, and secure authentication systems.</p>
                        </div>
                    </div>

                    <!-- Experience 04 -->
                    <div class="service-item">
                        <div class="service-col service-col-10">
                            <span>05</span>
                        </div>
                        <div class="service-col service-col-30">
                            <h3>Software Engineer | SpaceFactor</h3>
                        </div>
                        <div class="service-col service-col-60">
                            <h3>July 2023 - November 2023</h3>
                            <p>At SpaceFactor, I worked as a Web Developer focusing on building and maintaining
                                scalable, high-performance web applications. My responsibilities included developing
                                backend systems with Laravel (PHP), designing and managing MySQL databases, and
                                implementing RESTful APIs to support seamless application functionality.</p>
                        </div>
                    </div>



                </div>
            </div>
        </section>


        <!-- Pricing Section -->
        <section class="pricing" id="pricing">
            <div class="container">
                <h2 class="section-title">Pricing</h2>

                <div class="pricing-cards">

                    <!-- Card 01 -->
                    <div class="pricing-card">
                        <h3>Frontend Development</h3>
                        <p class="price">$500</p>
                        <ul class="features">
                            <li>Responsive Web Interfaces</li>
                            <li>React.js / NextJs / HTML / CSS / JS</li>
                            <li>Cross-browser Compatibility</li>
                            <li>UI/UX Design Implementation</li>
                            <li>Performance Optimization</li>
                            <li>Interactive Components</li>
                            <li>Version Control with Git</li>
                            <li>Accessibility Compliance</li>
                            <li>SPA (Single Page Application) Development</li>
                            <li>Integration with Backend APIs</li>
                        </ul>
                        <div class="card-buttons">
                            <a href="mailto:youremail@example.com?subject=Book%2030min%20Call%20Frontend%20Development"
                                class="btn-talk">Book a 30-min Call</a>
                            <a href="mailto:youremail@example.com">Want to chat? (Mail)</a>
                        </div>
                    </div>

                    <!-- Card 02 -->
                    <div class="pricing-card">
                        <h3>Backend Development</h3>
                        <p class="price">$600</p>
                        <ul class="features">
                            <li>Laravel / Node.js / PHP</li>
                            <li>API & Server-side Logic</li>
                            <li>Database Integration</li>
                            <li>RESTful API Development</li>
                            <li>Authentication & Authorization</li>
                            <li>Error Handling & Logging</li>
                            <li>Performance Optimization</li>
                            <li>Security Best Practices</li>
                            <li>Testing & Debugging</li>
                            <li>Scalable Architecture Design</li>
                        </ul>
                        <div class="card-buttons">
                            <a href="mailto:youremail@example.com?subject=Book%2030min%20Call%20Backend%20Development"
                                class="btn-talk">Book a 30-min Call</a>
                            <a href="mailto:youremail@example.com">Want to chat? (Mail)</a>
                        </div>
                    </div>

                    <!-- Card 03 -->
                    <div class="pricing-card">
                        <h3>Database Design</h3>
                        <p class="price">$400</p>
                        <ul class="features">
                            <li>MySQL / PostgreSQL / MongoDB</li>
                            <li>Optimized & Scalable</li>
                            <li>ER Diagrams & Data Modeling</li>
                            <li>Normalization & Schema Design</li>
                            <li>Query Optimization</li>
                            <li>Data Security & Backup</li>
                            <li>Indexing & Performance Tuning</li>
                            <li>Stored Procedures & Triggers</li>
                            <li>Database Migration</li>
                            <li>Integration with Backend Systems</li>
                        </ul>
                        <div class="card-buttons">
                            <a href="mailto:youremail@example.com?subject=Book%2030min%20Call%20Database%20Design"
                                class="btn-talk">Book a 30-min Call</a>
                            <a href="mailto:youremail@example.com">Want to chat? (Mail)</a>
                        </div>
                    </div>

                    <!-- Card 04 -->
                    <div class="pricing-card">
                        <h3>API Integration</h3>
                        <p class="price">$450</p>
                        <ul class="features">
                            <li>Third-party API Integration</li>
                            <li>Custom API Development</li>
                            <li>Seamless Frontend-Backend</li>
                            <li>REST & GraphQL APIs</li>
                            <li>Authentication & Tokens</li>
                            <li>Error Handling & Logging</li>
                            <li>Versioning & Documentation</li>
                            <li>Performance Optimization</li>
                            <li>API Security & Rate Limiting</li>
                            <li>Integration Testing</li>
                        </ul>
                        <div class="card-buttons">
                            <a href="mailto:youremail@example.com?subject=Book%2030min%20Call%20API%20Integration"
                                class="btn-talk">Book a 30-min Call</a>
                            <a href="mailto:youremail@example.com">Want to chat? (Mail)</a>
                        </div>
                    </div>

                    <!-- Card 05 -->
                    <div class="pricing-card">
                        <h3>Full Stack Project Management</h3>
                        <p class="price">$1100</p>
                        <ul class="features">
                            <li>Complete Project Handling</li>
                            <li>Frontend + Backend + Database</li>
                            <li>Deployment & Maintenance</li>
                            <li>Team Coordination & Management</li>
                            <li>Agile / Scrum Methodology</li>
                            <li>Version Control & Git Workflow</li>
                            <li>FTP Setup</li>
                            <li>Code Review & Quality Assurance</li>
                            <li>Documentation & Reporting</li>
                            <li>Client Communication & Support</li>
                        </ul>
                        <div class="card-buttons">
                            <a href="mailto:youremail@example.com?subject=Book%2030min%20Call%20Full%20Stack%20Project"
                                class="btn-talk">Book a 30-min Call</a>
                            <a href="mailto:youremail@example.com">Want to chat? (Mail)</a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Let's Work Together Section -->
        <section class="lets-work" id="contact">
            <div class="container">
                <h2 class="section-title">Let’s Work Together</h2>
                <div class="work-grid">

                    <!-- Left: Contact Form -->
                    <div class="work-form">
                        <form>
                            <input type="text" name="name" placeholder="Your Name" required>
                            <input type="email" name="email" placeholder="Your Email" required>
                            <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
                            <button type="submit" class="btn-talk">Send Message</button>
                        </form>
                    </div>

                    <!-- Right: Contact Info -->
                    <div class="work-info">
                        <ul>
                            <li><i class="fab fa-whatsapp"></i> <strong>WhatsApp:</strong> +880 1234 567890</li>
                            <li><i class="fas fa-envelope"></i> <strong>Email:</strong> example@email.com</li>
                            <li><i class="fas fa-map-marker-alt"></i> <strong>Location:</strong> Khulna, Bangladesh
                            </li>
                            <li><i class="fab fa-facebook"></i> <strong>Facebook:</strong>
                                <a href="#" target="_blank">facebook.com/yourprofile</a>
                            </li>
                        </ul>

                    </div>

                </div>
            </div>
        </section>

        <!-- Footer Section -->
        <footer class="site-footer">
            <div class="container">
                <p>&copy; 2025 Satyajit Roy. All Rights Reserved.</p>
                <ul class="footer-social">
                    <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-github"></i></a></li>
                </ul>
            </div>
        </footer>




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

    <script>
    const hamburger = document.getElementById('hamburger');
    const navMenu = document.getElementById('nav-menu');
    const navLinks = document.querySelectorAll('#nav-menu a');

    // Hamburger toggle
    hamburger.addEventListener('click', () => {
        hamburger.classList.toggle('active');
        navMenu.classList.toggle('active');
    });

    // Smooth scroll & close mobile menu
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                e.preventDefault();
                window.scrollTo({
                    top: target.offsetTop - 50, // adjust for header height
                    behavior: 'smooth'
                });
            }

            // Close mobile menu
            if (navMenu.classList.contains('active')) {
                navMenu.classList.remove('active');
                hamburger.classList.remove('active');
            }
        });
    });

    // Highlight active link on scroll
    window.addEventListener('scroll', () => {
        let fromTop = window.scrollY + 60; // adjust for header height
        navLinks.forEach(link => {
            const section = document.querySelector(link.getAttribute('href'));
            if (section && section.offsetTop <= fromTop && section.offsetTop + section.offsetHeight > fromTop) {
                link.classList.add('active');
            } else {
                link.classList.remove('active');
            }
        });
    });
</script>
<script>
const navLinks = document.querySelectorAll('#nav-menu a');

navLinks.forEach(link => {
    link.addEventListener('click', function(e) {
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            e.preventDefault();
            const headerOffset = 70; // adjust this to your header height
            const elementPosition = target.offsetTop;
            const offsetPosition = elementPosition - headerOffset;

            window.scrollTo({
                top: offsetPosition,
                behavior: 'smooth'
            });
        }
    });
});
</script>


</body>

</html>
