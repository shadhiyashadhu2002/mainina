<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | INA Group</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quando" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            margin: 0;
            background: #f8fafc;
            color: #636b6f;
        }

        /* Hero Section with Navigation */
        .hero {
            height: 100vh;
            position: relative;
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }

        .hero-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            z-index: 1;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(
                rgba(0, 0, 0, 0.4) 0%,
                rgba(0, 0, 0, 0.2) 50%,
                rgba(0, 0, 0, 0.6) 100%
            );
            z-index: 2;
        }

        /* Navigation embedded in hero */
        .hero-nav {
            position: relative;
            z-index: 3;
            padding: 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }

        .nav-container {
            display: flex;
            align-items: center;
            width: 100%;
            justify-content: space-between;
        }

        .logo-section {
            display: flex;
            align-items: center;
        }

        .logo-img {
            height: 150px;
            width: auto;
            position: relative;
            top: -35px;
        }

        .nav-menu-container {
            display: flex;
            align-items: center;
            margin-left: 5cm;
        }

        .nav-menu {
            display: flex;
            list-style: none;
            gap: 3rem;
            align-items: center;
        }

        .nav-menu a {
            text-decoration: none;
            font-family: 'Quando', serif;
            color: white;
            font-weight: 700;
            font-size: 1.2rem;
            letter-spacing: 1px;
            transition: all 0.3s;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            position: relative;
        }

        .nav-menu a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 3px;
            background: #ffd700;
            transition: width 0.3s ease;
        }

        .nav-menu a:hover::after,
        .nav-menu a.active::after {
            width: 100%;
        }

        .nav-menu a:hover {
            color: #ffd700;
            transform: translateY(-2px);
        }

        .nav-menu .active {
            color: #ffd700;
        }

        /* Hero content area - centered */
        .hero-content {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            z-index: 3;
            text-align: center;
        }

        .hero-text {
            color: white;
            max-width: 800px;
            padding: 0 2rem;
        }

        .hero-title {
            font-size: 4rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
            line-height: 1.2;
            background: linear-gradient(45deg, #ffd700, #ffffff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero-subtitle {
            font-size: 1.4rem;
            font-weight: 300;
            margin-bottom: 2.5rem;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.7);
            line-height: 1.6;
        }

        .cta-button {
            background: linear-gradient(135deg, #241571, #3b2694);
            color: white;
            padding: 18px 40px;
            border: none;
            border-radius: 12px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.4s ease;
            box-shadow: 0 8px 25px rgba(36, 21, 113, 0.4);
            text-transform: uppercase;
            letter-spacing: 1.5px;
            position: relative;
            overflow: hidden;
        }

        .cta-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }

        .cta-button:hover::before {
            left: 100%;
        }

        .cta-button:hover {
            background: linear-gradient(135deg, #1e1259, #2d1f75);
            transform: translateY(-3px);
            box-shadow: 0 12px 35px rgba(36, 21, 113, 0.6);
        }

        .mobile-menu-toggle {
            display: none;
            flex-direction: column;
            cursor: pointer;
            gap: 4px;
        }

        .hamburger-line {
            width: 25px;
            height: 3px;
            background: white;
            transition: all 0.3s;
        }

        /* Main Content Section */
        .main-content {
            background: #f8fafc;
            padding: 6rem 2rem;
            position: relative;
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
        }

        /* Stats Section */
        .stats-section {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            margin-bottom: 6rem;
            background: white;
            padding: 3rem;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
        }

        .stat-item {
            text-align: center;
            padding: 1.5rem;
            border-radius: 15px;
            background: linear-gradient(135deg, #f8fafc 0%, #e5e7eb 100%);
            transition: all 0.3s ease;
        }

        .stat-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: #241571;
            margin-bottom: 0.5rem;
        }

        .stat-label {
            font-size: 1rem;
            color: #6b7280;
            font-weight: 500;
        }

        /* About Content Grid */
        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: start;
        }

        .images-section {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: auto auto;
            gap: 1.5rem;
        }

        .image-card {
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
            transition: all 0.4s ease;
            height: 200px;
            position: relative;
        }

        .image-card.main-matrimony {
            grid-column: 1;
            grid-row: 1 / span 2;
            height: 100%;
        }

        .image-card.events {
            grid-column: 2;
            grid-row: 1;
        }

        .image-card.food {
            grid-column: 2;
            grid-row: 2;
        }

        .image-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 20px 60px rgba(0,0,0,0.2);
        }

        .image-card::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, rgba(36, 21, 113, 0.8), rgba(59, 38, 148, 0.6));
            opacity: 0;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .image-card:hover::after {
            opacity: 1;
        }

        .image-placeholder {
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 3rem;
            position: relative;
            overflow: hidden;
        }

        .matrimony { background: linear-gradient(135deg, #ff6b6b 0%, #ee5a24 100%); }
        .events { background: linear-gradient(135deg, #4ecdc4 0%, #44a08d 100%); }
        .food { background: linear-gradient(135deg, #feca57 0%, #ff9ff3 100%); }

        .content-section {
            background: white;
            border-radius: 20px;
            padding: 4rem;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
            position: relative;
            overflow: hidden;
        }

        .content-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #241571, #3b2694, #ffd700);
        }

        .section-title {
            font-size: 3rem;
            font-weight: 700;
            color: #111827;
            margin-bottom: 2rem;
            line-height: 1.2;
            position: relative;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, #241571, #ffd700);
        }

        .section-description {
            font-size: 1.2rem;
            line-height: 1.8;
            color: #4b5563;
            margin-bottom: 3rem;
        }

        /* Services Grid */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2.5rem;
            margin-top: 4rem;
        }

        .service-item {
            background: white;
            padding: 2.5rem;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
            border: 1px solid #e5e7eb;
            position: relative;
            overflow: hidden;
        }

        .service-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, #241571, #3b2694);
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        .service-item:hover::before {
            transform: scaleX(1);
        }

        .service-item:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.15);
            border-color: #241571;
        }

        .service-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #241571, #3b2694);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .service-title {
            font-size: 1.4rem;
            font-weight: 600;
            color: #111827;
            margin-bottom: 1rem;
        }

        .service-description {
            font-size: 0.95rem;
            color: #6b7280;
            line-height: 1.6;
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .nav-menu {
                gap: 2rem;
            }
            
            .nav-menu-container {
                margin-left: 3cm;
            }
            
            .hero-title {
                font-size: 3rem;
            }
        }

        @media (max-width: 768px) {
            .hero-nav {
                padding: 1.5rem;
            }
            
            .nav-menu {
                display: none;
            }
            
            .mobile-menu-toggle {
                display: flex;
            }

            .nav-menu-container {
                margin-left: 2cm;
            }

            .about-grid {
                grid-template-columns: 1fr;
                gap: 3rem;
            }
            
            .hero-title {
                font-size: 2.5rem;
            }
            
            .hero-subtitle {
                font-size: 1.2rem;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .content-section {
                padding: 2.5rem;
            }
            
            .main-content {
                padding: 4rem 1rem;
            }
        }

        @media (max-width: 480px) {
            .hero-title {
                font-size: 2rem;
            }
            
            .hero-subtitle {
                font-size: 1rem;
            }
            
            .nav-menu-container {
                margin-left: 1cm;
            }
            
            .content-section {
                padding: 2rem;
            }
        }
    </style>
</head>
<body>
    <!-- Hero Section with Navigation -->
    <section class="hero">
        <img src="/images/home.png" alt="About INA Group" class="hero-image">
        <div class="hero-overlay"></div>
        
        <!-- Navigation embedded in hero -->
        <div class="hero-nav">
            <div class="nav-container" style="width:100%; display:flex; align-items:center; justify-content:flex-end;">
                <ul class="nav-menu" style="display:flex; align-items:center; margin:0; padding:0; gap:1.5rem;">
                    <li><a href="/">HOME</a></li>
                    <li><a href="/about" class="active">ABOUT US</a></li>
                    <li><a href="/services">SERVICES</a></li>
                    <li><a href="/careers">CAREERS</a></li>
                    <li><a href="/contact">CONTACT US</a></li>
                    <li class="logo-section" style="margin-left:0.7rem;">
                        <img src="/images/logo.png" alt="Logo" class="logo-img" />
                    </li>
                </ul>
                <div class="mobile-menu-toggle">
                    <div class="hamburger-line"></div>
                    <div class="hamburger-line"></div>
                    <div class="hamburger-line"></div>
                </div>
            </div>
        </div>

        <!-- Hero content area - centered -->
        <div class="hero-content">
            <div class="hero-text">
                <!-- Removed About INA Group and subtitle -->

            </div>
        </div>
    </section>

    <!-- Main Content -->
    <div class="main-content">
        <div class="container">
            <!-- Stats Section -->
            <div class="stats-section">
                <div class="stat-item">
                    <div class="stat-number">10K+</div>
                    <div class="stat-label">Happy Couples</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">5K+</div>
                    <div class="stat-label">Events Planned</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">15K+</div>
                    <div class="stat-label">Satisfied Clients</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">8+</div>
                    <div class="stat-label">Years Experience</div>
                </div>
            </div>

            <!-- About Content -->
            <div class="about-grid">
                <!-- Images Section -->
                <div class="images-section">
                    <div class="image-card main-matrimony">
                        <img src="/images/marr.jpg" alt="INA Matrimony" style="width:100%;height:100%;object-fit:cover;display:block;">
                    </div>
                    <div class="image-card events">
                        <img src="/images/event.jpg" alt="Event Planners" style="width:100%;height:100%;object-fit:cover;display:block;">
                    </div>
                    <div class="image-card food">
                        <img src="/images/food.jfif" alt="Food Services" style="width:100%;height:100%;object-fit:cover;display:block;">
                    </div>
                </div>

                <!-- Content Section -->
                <div class="content-section">
                    <h2 class="section-title">Our Story</h2>
                    <p class="section-description">
                        INA Group of Services is your trusted partner in creating beautiful experiences. Through INA Matrimony, we help individuals find their perfect life partner with care, privacy, and a vast database. Our Event Planners team brings dreams to life by organizing weddings, celebrations, and corporate events with creativity and perfection. To complete every occasion, INA Food Services offers delicious and hygienic catering that delights every guest. Together, we make life's special moments memorable and stress-free.
                    </p>
                    
                    <!-- Services Grid removed as requested -->
                </div>
            </div>
        </div>
    </div>

    <script>
        // Mobile menu toggle
        document.querySelector('.mobile-menu-toggle').addEventListener('click', function() {
            const navMenu = document.querySelector('.nav-menu');
            navMenu.style.display = navMenu.style.display === 'flex' ? 'none' : 'flex';
        });

        // Smooth scroll for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Parallax effect for hero image
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            const heroImage = document.querySelector('.hero-image');
            if (heroImage) {
                heroImage.style.transform = `translateY(${scrolled * 0.5}px)`;
            }
        });

        // Animate stats on scroll
        const observerOptions = {
            threshold: 0.5,
            rootMargin: '0px 0px -100px 0px'
        };

        const statsObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const statNumbers = entry.target.querySelectorAll('.stat-number');
                    statNumbers.forEach(stat => {
                        const finalNumber = stat.textContent;
                        const number = parseInt(finalNumber.replace(/\D/g, ''));
                        const suffix = finalNumber.replace(/\d/g, '');
                        
                        let current = 0;
                        const increment = number / 50;
                        const timer = setInterval(() => {
                            current += increment;
                            if (current >= number) {
                                stat.textContent = finalNumber;
                                clearInterval(timer);
                            } else {
                                stat.textContent = Math.floor(current) + suffix;
                            }
                        }, 30);
                    });
                    statsObserver.unobserve(entry.target);
                }
            });
        }, observerOptions);

        const statsSection = document.querySelector('.stats-section');
        if (statsSection) {
            statsObserver.observe(statsSection);
        }
    </script>
</body>
</html>