<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services | INA Group</title>
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

        .services-header {
            text-align: center;
            margin-bottom: 5rem;
        }

        .services-title {
            font-size: 3.5rem;
            font-weight: 700;
            color: #111827;
            margin-bottom: 1.5rem;
            position: relative;
        }

        .services-title::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: linear-gradient(90deg, #241571, #ffd700);
            border-radius: 2px;
        }

        .services-subtitle {
            font-size: 1.3rem;
            color: #6b7280;
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.6;
        }

        /* Services Grid */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            gap: 3rem;
            margin-bottom: 4rem;
        }

        .service-card {
            background: white;
            border-radius: 20px;
            padding: 3rem;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
            border: 2px solid transparent;
        }

        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, #241571, #3b2694);
            transform: scaleX(0);
            transition: transform 0.4s ease;
        }

        .service-card:hover::before {
            transform: scaleX(1);
        }

        .service-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.15);
            border-color: #241571;
        }

        .service-icon {
            width: 80px;
            height: 80px;
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5rem;
            margin-bottom: 2rem;
            transition: all 0.3s ease;
        }

        .matrimony-card .service-icon {
            background: linear-gradient(135deg, #ff6b6b, #ee5a24);
            color: white;
        }

        .events-card .service-icon {
            background: linear-gradient(135deg, #4ecdc4, #44a08d);
            color: white;
        }

        .food-card .service-icon {
            background: linear-gradient(135deg, #feca57, #ff9ff3);
            color: white;
        }

        .consultation-card .service-icon {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
        }

        .coordination-card .service-icon {
            background: linear-gradient(135deg, #f093fb, #f5576c);
            color: white;
        }

        .support-card .service-icon {
            background: linear-gradient(135deg, #4facfe, #00f2fe);
            color: white;
        }

        .service-card:hover .service-icon {
            transform: scale(1.1) rotate(5deg);
        }

        .service-title {
            font-size: 1.8rem;
            font-weight: 600;
            color: #111827;
            margin-bottom: 1.5rem;
            line-height: 1.3;
        }

        .service-description {
            font-size: 1.1rem;
            color: #6b7280;
            line-height: 1.7;
            margin-bottom: 2rem;
        }

        .service-features {
            list-style: none;
            margin-bottom: 2rem;
        }

        .service-features li {
            padding: 0.5rem 0;
            color: #4b5563;
            position: relative;
            padding-left: 1.5rem;
            font-size: 1rem;
        }

        .service-features li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: #10b981;
            font-weight: bold;
            font-size: 1.2rem;
        }

        .learn-more-btn {
            background: linear-gradient(135deg, #241571, #3b2694);
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 10px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
            position: relative;
            overflow: hidden;
        }

        .learn-more-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }

        .learn-more-btn:hover::before {
            left: 100%;
        }

        .learn-more-btn:hover {
            background: linear-gradient(135deg, #1e1259, #2d1f75);
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(36, 21, 113, 0.4);
        }

        /* CTA Section */
        .cta-section {
            background: linear-gradient(135deg, #241571, #3b2694);
            border-radius: 20px;
            padding: 4rem 3rem;
            text-align: center;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .cta-section::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle, rgba(255,215,0,0.1) 0%, transparent 70%);
        }

        .cta-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            position: relative;
            z-index: 2;
        }

        .cta-description {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0.9;
            position: relative;
            z-index: 2;
        }

        .cta-button {
            background: #ffd700;
            color: #241571;
            padding: 18px 40px;
            border: none;
            border-radius: 12px;
            font-size: 1.1rem;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.4s ease;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            position: relative;
            z-index: 2;
        }

        .cta-button:hover {
            background: #ffed4e;
            transform: translateY(-3px);
            box-shadow: 0 12px 35px rgba(255, 215, 0, 0.4);
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

            .services-grid {
                grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
                gap: 2.5rem;
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

            .services-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
            
            .hero-title {
                font-size: 2.5rem;
            }
            
            .hero-subtitle {
                font-size: 1.2rem;
            }
            
            .services-title {
                font-size: 2.5rem;
            }
            
            .main-content {
                padding: 4rem 1rem;
            }

            .service-card {
                padding: 2.5rem;
            }

            .cta-section {
                padding: 3rem 2rem;
            }

            .cta-title {
                font-size: 2rem;
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
            
            .service-card {
                padding: 2rem;
            }

            .services-grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <!-- Hero Section with Navigation -->
    <section class="hero">
        <img src="/images/home.png" alt="INA Group Services" class="hero-image">
        <div class="hero-overlay"></div>
        
        <!-- Navigation embedded in hero -->
        <div class="hero-nav">
            <div class="nav-container" style="width:100%; display:flex; align-items:center; justify-content:flex-end;">
                <ul class="nav-menu" style="display:flex; align-items:center; margin:0; padding:0; gap:1.5rem;">
                    <li><a href="/">HOME</a></li>
                    <li><a href="/about">ABOUT US</a></li>
                    <li><a href="/services" class="active">SERVICES</a></li>
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

            </div>
        </div>
    </section>

    <!-- Main Content -->
    <div class="main-content">
        <div class="container">
            <!-- Services Header -->
            <div class="services-header">
                <h2 class="services-title">What We Offer</h2>
                <p class="services-subtitle">From finding your perfect life partner to planning unforgettable events and serving delicious cuisine, we're here to make your special moments extraordinary.</p>
            </div>

            <!-- Services Grid -->
            <div class="services-grid">
                <!-- INA Matrimony -->
                <div class="service-card matrimony-card">
                    <div class="service-icon">💕</div>
                    <h3 class="service-title">INA Matrimony</h3>
                    <p class="service-description">
                        Find your perfect life partner with our trusted matrimonial services. We connect hearts with care, privacy, and a vast database of verified profiles.
                    </p>
                    <ul class="service-features">
                        <li>Extensive verified database</li>
                        <li>Advanced matching algorithms</li>
                        <li>Complete privacy protection</li>
                        <li>Personalized assistance</li>
                        <li>Background verification</li>
                    </ul>
                    <button class="learn-more-btn">Learn More</button>
                </div>

                <!-- Event Planning -->
                <div class="service-card events-card">
                    <div class="service-icon">🎉</div>
                    <h3 class="service-title">Event Planning</h3>
                    <p class="service-description">
                        Transform your dreams into reality with our expert event planning services. From intimate gatherings to grand celebrations, we handle every detail.
                    </p>
                    <ul class="service-features">
                        <li>Wedding planning & coordination</li>
                        <li>Corporate event management</li>
                        <li>Birthday & anniversary celebrations</li>
                        <li>Venue selection & decoration</li>
                        <li>Entertainment arrangements</li>
                    </ul>
                    <button class="learn-more-btn">Learn More</button>
                </div>

                <!-- Food Services -->
                <div class="service-card food-card">
                    <div class="service-icon">🍽️</div>
                    <h3 class="service-title">Food Services</h3>
                    <p class="service-description">
                        Delight your guests with our exceptional catering services. We offer delicious, hygienic, and beautifully presented cuisine for all occasions.
                    </p>
                    <ul class="service-features">
                        <li>Multi-cuisine catering</li>
                        <li>Customized menu planning</li>
                        <li>Hygienic food preparation</li>
                        <li>Professional service staff</li>
                        <li>Special dietary accommodations</li>
                    </ul>
                    <button class="learn-more-btn">Learn More</button>
                </div>

                <!-- Consultation Services -->
                <div class="service-card consultation-card">
                    <div class="service-icon">💬</div>
                    <h3 class="service-title">Consultation</h3>
                    <p class="service-description">
                        Get expert guidance and personalized consultation for all your matrimonial and event planning needs. Our experienced team is here to help.
                    </p>
                    <ul class="service-features">
                        <li>Free initial consultation</li>
                        <li>Personalized recommendations</li>
                        <li>Budget planning assistance</li>
                        <li>Timeline development</li>
                        <li>Expert advice & tips</li>
                    </ul>
                    <button class="learn-more-btn">Learn More</button>
                </div>

                <!-- Coordination Services -->
                <div class="service-card coordination-card">
                    <div class="service-icon">📋</div>
                    <h3 class="service-title">Event Coordination</h3>
                    <p class="service-description">
                        Seamless event coordination to ensure everything runs perfectly on your special day. We handle all logistics so you can enjoy every moment.
                    </p>
                    <ul class="service-features">
                        <li>On-site event coordination</li>
                        <li>Vendor management</li>
                        <li>Timeline execution</li>
                        <li>Problem-solving support</li>
                        <li>Day-of coordination</li>
                    </ul>
                    <button class="learn-more-btn">Learn More</button>
                </div>

                <!-- Customer Support -->
                <div class="service-card support-card">
                    <div class="service-icon">🤝</div>
                    <h3 class="service-title">24/7 Support</h3>
                    <p class="service-description">
                        Round-the-clock customer support to assist you at every step. Our dedicated team is always ready to help with your questions and needs.
                    </p>
                    <ul class="service-features">
                        <li>24/7 customer support</li>
                        <li>Multiple communication channels</li>
                        <li>Quick response times</li>
                        <li>Multilingual assistance</li>
                        <li>Post-service follow-up</li>
                    </ul>
                    <button class="learn-more-btn">Learn More</button>
                </div>
            </div>

            <!-- Call to Action Section -->
            <div class="cta-section">
                <h2 class="cta-title">Ready to Get Started?</h2>
                <p class="cta-description">Contact us today to discuss your needs and let us help make your special moments unforgettable.</p>
                <button class="cta-button">Contact Us Now</button>
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

        // Animate service cards on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const cardObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }, index * 100);
                    cardObserver.unobserve(entry.target);
                }
            });
        }, observerOptions);

        // Set initial state and observe service cards
        document.querySelectorAll('.service-card').forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(30px)';
            card.style.transition = 'all 0.6s ease';
            cardObserver.observe(card);
        });

        // Learn more button interactions
        document.querySelectorAll('.learn-more-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                // You can add specific actions for each service here
                const serviceTitle = this.closest('.service-card').querySelector('.service-title').textContent;
                alert(`Learn more about ${serviceTitle} - Contact us for detailed information!`);
            });
        });

        // CTA button interaction
        document.querySelector('.cta-button').addEventListener('click', function() {
            // Scroll to contact section or show contact modal
            alert('Contact us at: +91-XXXXXXXXXX or email: info@inagroup.com');
        });
    </script>
</body>
</html>