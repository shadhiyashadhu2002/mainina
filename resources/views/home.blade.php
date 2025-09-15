<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INA</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quando" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            background-color: #f8fafc;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            margin: 0;
        }

        /* Hero Section - Full screen with embedded navigation */
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
                rgba(0, 0, 0, 0.3) 0%,
                rgba(0, 0, 0, 0.1) 50%,
                rgba(0, 0, 0, 0.5) 100%
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
        }

        .hero-text {
            text-align: center;
            color: white;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
            line-height: 1.2;
        }

        .hero-subtitle {
            font-size: 1.3rem;
            font-weight: 300;
            margin-bottom: 2rem;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.7);
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .read-more-btn {
            background: #241571;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            box-shadow: 0 6px 20px rgba(36, 21, 113, 0.4);
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .read-more-btn:hover {
            background: #1e1259;
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(36, 21, 113, 0.6);
        }

        .hero-bottom {
            position: relative;
            z-index: 3;
            padding-bottom: 2rem;
            display: flex;
            justify-content: center;
        }

        .dots-indicator {
            display: flex;
            gap: 12px;
        }

        .dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.5);
            cursor: pointer;
            transition: all 0.3s;
        }

        .dot.active {
            background: #ffd700;
            box-shadow: 0 0 10px rgba(255, 215, 0, 0.5);
        }

        .dot:hover {
            background: #ffd700;
        }

        /* About Section */
        .about-section {
            padding: 4rem 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .about-content {
            margin-bottom: 3rem;
        }

        .about-content p {
            font-size: 1rem;
            line-height: 1.8;
            color: #555;
            margin-bottom: 1.5rem;
        }

        .service-section {
            margin-bottom: 3rem;
        }

        .service-title {
            font-size: 1.8rem;
            font-weight: 600;
            color: #2d7c47;
            margin-bottom: 1.5rem;
        }

        .service-description {
            font-size: 1rem;
            line-height: 1.8;
            color: #555;
            margin-bottom: 1rem;
        }

        .service-features {
            margin: 1.5rem 0;
        }

        .feature-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 1rem;
            color: #555;
        }

        .feature-icon {
            color: #2d7c47;
            margin-right: 0.5rem;
            margin-top: 0.2rem;
        }

        /* Services Carousel Section */
        .services-carousel-section {
            background: #f8fafc;
            padding: 4rem 2rem;
            overflow: hidden;
        }

        .services-header {
            text-align: center;
            margin-bottom: 3rem;
        }

        .services-header h2 {
            font-size: 2.5rem;
            font-weight: 700;
            color: #111;
            margin-bottom: 1rem;
        }

        .carousel-container {
            max-width: 1200px;
            margin: 0 auto;
            position: relative;
            overflow: hidden;
            border-radius: 15px;
        }

        .carousel-track {
            display: flex;
            animation: slideLeft 20s infinite linear;
            gap: 2rem;
        }

        @keyframes slideLeft {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-50%);
            }
        }

        .carousel-track:hover {
            animation-play-state: paused;
        }

        .service-card {
            background: white;
            padding: 3rem 2rem;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
            transition: all 0.4s ease;
            min-width: 350px;
            flex-shrink: 0;
            border: 1px solid #e5e7eb;
            position: relative;
            overflow: hidden;
        }

        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }

        .service-card:hover::before {
            left: 100%;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
            border-color: #241571;
        }

        .service-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 1.5rem;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: white;
            margin-bottom: 2rem;
        }

        .service-card:nth-child(1) .service-icon { background: linear-gradient(135deg, #ff6b6b, #ee5a24); }
        .service-card:nth-child(2) .service-icon { background: linear-gradient(135deg, #4ecdc4, #44a08d); }
        .service-card:nth-child(3) .service-icon { background: linear-gradient(135deg, #feca57, #ff9ff3); }
        .service-card:nth-child(4) .service-icon { background: linear-gradient(135deg, #667eea, #764ba2); }
        .service-card:nth-child(5) .service-icon { background: linear-gradient(135deg, #f093fb, #f5576c); }
        .service-card:nth-child(6) .service-icon { background: linear-gradient(135deg, #4facfe, #00f2fe); }
        .service-card:nth-child(7) .service-icon { background: linear-gradient(135deg, #ff6b6b, #ee5a24); }
        .service-card:nth-child(8) .service-icon { background: linear-gradient(135deg, #4ecdc4, #44a08d); }
        .service-card:nth-child(9) .service-icon { background: linear-gradient(135deg, #feca57, #ff9ff3); }
        .service-card:nth-child(10) .service-icon { background: linear-gradient(135deg, #667eea, #764ba2); }
        .service-card:nth-child(11) .service-icon { background: linear-gradient(135deg, #f093fb, #f5576c); }
        .service-card:nth-child(12) .service-icon { background: linear-gradient(135deg, #4facfe, #00f2fe); }

        .service-title-card {
            font-size: 1.8rem;
            font-weight: 600;
            color: #111;
            margin-bottom: 1.5rem;
            letter-spacing: 0.5px;
        }

        .service-description-card {
            font-size: 0.95rem;
            color: #666;
            line-height: 1.6;
            margin-bottom: 2rem;
        }

        .service-btn {
            background: linear-gradient(135deg, #241571, #3b2694);
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: 8px;
            font-size: 0.9rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .service-btn:hover {
            background: linear-gradient(135deg, #1e1259, #2d1f75);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(36, 21, 113, 0.3);
        }

        /* Footer - Updated to match home page color scheme */
        .footer {
            background: #F7F3E8;
            color: #000;
            padding: 3rem 2rem 2rem;
            position: relative;
            overflow: hidden;
        }

        .footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="stars" patternUnits="userSpaceOnUse" width="100" height="100"><circle cx="25" cy="25" r="1" fill="%23ffd700" opacity="0.1"/><circle cx="75" cy="75" r="1" fill="%23ffd700" opacity="0.1"/><circle cx="50" cy="10" r="0.5" fill="%23ffffff" opacity="0.05"/><circle cx="10" cy="60" r="0.5" fill="%23ffffff" opacity="0.05"/><circle cx="90" cy="40" r="0.5" fill="%23ffffff" opacity="0.05"/></pattern></defs><rect width="100" height="100" fill="url(%23stars)"/></svg>') repeat;
            z-index: 1;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 3rem;
            position: relative;
            z-index: 2;
        }

        .footer-section h3 {
            color: #ffd700;
            font-size: 1.4rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            letter-spacing: 0.5px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
            font-family: 'Quando', serif;
            position: relative;
        }

        .footer-section h3::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 40px;
            height: 2px;
            background: #ffd700;
            border-radius: 1px;
        }

        .footer-section ul {
            list-style: none;
        }

        .footer-section ul li {
            margin-bottom: 0.8rem;
            transition: all 0.3s ease;
        }

        .footer-section ul li:hover {
            transform: translateX(5px);
        }

        .footer-section ul li a {
            color: #000;
            text-decoration: none;
            transition: all 0.3s;
            font-weight: 400;
            position: relative;
        }

        .footer-section ul li a::before {
            content: '▸';
            position: absolute;
            left: -15px;
            color: #000;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .footer-section ul li a:hover {
            color: #ffd700;
            padding-left: 15px;
        }

        .footer-section ul li a:hover::before {
            opacity: 1;
        }

        .company-info {
            margin-bottom: 1.5rem;
        }

        .company-info p {
            margin-bottom: 0.8rem;
            font-size: 0.95rem;
            color: #d1d5db;
            line-height: 1.6;
        }

        .contact-info {
            margin-bottom: 1.5rem;
        }

        .contact-info p {
            margin-bottom: 0.8rem;
            color: #d1d5db;
            font-size: 0.95rem;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .contact-info p strong {
            color: #ffd700;
            font-weight: 600;
        }

        .contact-info p a {
            color: #d1d5db;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .contact-info p a:hover {
            color: #ffd700;
        }

        .social-links {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
        }

        .social-links a {
            display: inline-block;
            width: 45px;
            height: 45px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #d1d5db;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 215, 0, 0.2);
        }

        .social-links a:hover {
            background: #000;
            color: #241571;
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(255, 215, 0, 0.3);
        }

        .footer-bottom {
            max-width: 1200px;
            margin: 2rem auto 0;
            padding-top: 2rem;
            border-top: 1px solid rgba(255, 215, 0, 0.2);
            text-align: center;
            font-size: 0.9rem;
            color: #d1d5db;
            position: relative;
            z-index: 2;
        }

        .footer-bottom a {
            color: #000;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .footer-bottom a:hover {
            color: white;
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

        /* Responsive Design */
        @media (max-width: 1024px) {
            .service-card {
                min-width: 300px;
            }
            
            .footer-content {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .hero-title {
                font-size: 3rem;
            }
            
            .nav-menu {
                gap: 2rem;
            }

            .nav-menu-container {
                margin-left: 3cm;
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

            .service-card {
                min-width: 280px;
                padding: 2rem 1.5rem;
            }

            .footer-content {
                grid-template-columns: 1fr;
                text-align: center;
                gap: 2rem;
            }

            .services-header h2 {
                font-size: 2rem;
            }

            .about-section {
                padding: 2rem 1rem;
            }

            .services-carousel-section {
                padding: 2rem 1rem;
            }
            
            .hero-title {
                font-size: 2.5rem;
            }
            
            .hero-subtitle {
                font-size: 1.1rem;
            }

            .footer {
                padding: 2rem 1rem 1rem;
            }
        }

        @media (max-width: 480px) {
            .hero-title {
                font-size: 2rem;
            }
            
            .hero-subtitle {
                font-size: 1rem;
            }
            
            .nav-menu a {
                font-size: 1rem;
            }
            
            .hero-nav {
                padding: 1rem;
            }

            .nav-menu-container {
                margin-left: 1cm;
            }

            .footer-content {
                gap: 1.5rem;
            }

            .social-links a {
                width: 40px;
                height: 40px;
            }
        }
    </style>
</head>
<body>
    <section class="hero" id="home">
        <img src="/images/home.png" alt="Home" class="hero-image">
        <div class="hero-overlay"></div>
        
        <div class="hero-nav">
            <div class="nav-container" style="width:100%; display:flex; align-items:center; justify-content:flex-end;">
                <ul class="nav-menu" style="display:flex; align-items:center; margin:0; padding:0; gap:1.5rem;">
                    <li><a href="#home" class="active">HOME</a></li>
                    <li><a href="/about">ABOUT US</a></li>
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

        <div class="hero-content">
            <div class="hero-text">
            </div>
        </div>

        <div class="hero-bottom">
            <div class="dots-indicator">
                <div class="dot active"></div>
                <div class="dot"></div>
                <div class="dot"></div>
            </div>
        </div>
    </section>

    <section class="about-section" id="about">
        <div class="about-content">
            <p>INA Matrimony is a trusted online platform designed to help individuals and families find their perfect life partner with ease and comfort from their own homes.</p>
            <p>Founded with the vision of bringing people together, INA is built and managed by a team of dedicated and experienced professionals who understand the importance of marriage in one's life. We are committed to providing a safe, reliable, and user-friendly environment for our members.
             Since our inception, we have been working tirelessly to make INA one of the most preferred matrimonial websites, offering modern features while respecting traditional values. Our mission is to connect people across communities through both online and offline services, ensuring that everyone can benefit from the opportunities we provide.
             At INA Matrimony, we believe in making meaningful connections and are constantly striving to improve our services so that you can find the right match for a happy and fulfilling future.</p>
        </div>

        <div class="service-section">
            <h2 class="service-title" style="font-weight:900;">Wedding Planners</h2>
            <p class="service-description">INA is one of India's trusted wedding planning platforms, designed to bring together everything you need for a perfect celebration. From venues to photographers, caterers to decorators, we connect you with reliable vendors who make your special day unforgettable.</p>
            <p class="service-description">We simplify the wedding journey by offering easy-to-use tools, expert resources, and a wide vendor directory, all in one place. Couples can discover, compare, and book professionals with confidence—anytime, anywhere.</p>
            <p class="service-description">Our goal is to make wedding planning stress-free and enjoyable, so you can focus on cherishing the moments that truly matter. With thousands of verified listings and genuine reviews, INA ensures every couple finds the right services to match their vision and budget.</p>
        </div>

        <div class="service-section">
            <h2 class="service-title" style="font-weight:900;">Matrimony</h2>
            <p class="service-description">At INA, our mission is to understand the unique preferences of singles and provide them with reliable and efficient matchmaking solutions. With a vast and regularly updated database, we strive to make the journey of finding a life partner simple, seamless, and stress-free. We are committed to offering flexible search options that ensure a smooth and satisfactory experience for every member.</p>
            
            <div class="service-features">
                <div class="feature-item">
                    <span class="feature-icon">✓</span>
                    <span>Your privacy and security are our top priorities. All personal information is kept safe, and no other member can access your details unless you choose to make them public. We also give you complete control over your account, empowering you to search, filter, and connect using tools designed to save time while delivering quick and meaningful results.</span>
                </div>
                <div class="feature-item">
                    <span class="feature-icon">✓</span>
                    <span> From the very beginning, INA is with you every step of the way. Our platform connects members across a wide range of communities, including Sunni, Shia, Brahmin, Nair, Parsi, Rajput, and many more—helping you meet the right partner who matches your values, lifestyle, and dreams.</span>
                </div>
            </div>
        </div>

        <div class="service-section">
            <h2 class="service-title" style="font-weight:900;">Fashion</h2>
            <p class="service-description">Masho.com is one of the best online fashion destination for Muslim women that brings something fresh, modest and modern to the table. We offer Islamic Abayas, Hijabs, Kaftans, Niqabs and a wide range of Islamic accessories at an affordable price. With the Masho app, you can pick your favorite, get quick delivery, early sales, exciting deals and promotions, and other exclusive rewards on all your purchases. Download the Masho app for Android or iOS today and indulge in an amazing shopping experience!!!</p>
            <p class="service-description">Another reason why Masho is considered one of the best online shopping stores is because it provides complete ease when you shop. Easy to pick filters, brands, prices, etc. give you the option to pick the best via a user-friendly interface. Size charts, product features, and high-resolution photos all assist you in making the best buying decisions. You can also choose your payment method, whether it's by card or cash-on-delivery. As a buyer, the 30-day return policy provides you greater leverage.</p>
            <p class="service-description">Enjoy the convenience of shopping from the comfort of your own home or office. Shop for friends, family, and loved ones, and avail of our gift services on special occasions.</p>
        </div>

        <div class="service-section">
            <h2 class="service-title" style="font-weight:900;">Mobile apps</h2>
            <p class="service-description">Stay connected anywhere, anytime...!!! Look up matrimonial prospects, shop for your favorite hijab, or pick the best photographer for your wedding with respective mobile apps available for both iOS and Android</p>
        </div>
    </section>

    <section class="services-carousel-section" id="services">
        <div class="services-header">
            <h2>Our Services</h2>
        </div>
        <div class="carousel-container">
            <div class="carousel-track">
                <!-- Main Services -->
                <div class="service-card">
                    <div class="service-icon">💕</div>
                    <h3 class="service-title-card">INA Matrimony</h3>
                    <p class="service-description-card">Find your perfect life partner with our trusted matrimonial services and verified profiles.</p>
                    <button class="service-btn">Learn More</button>
                </div>
                <div class="service-card">
                    <div class="service-icon">🎉</div>
                    <h3 class="service-title-card">Event Planning</h3>
                    <p class="service-description-card">Transform your dreams into reality with expert wedding and event planning services.</p>
                    <button class="service-btn">Learn More</button>
                </div>
                <div class="service-card">
                    <div class="service-icon">🍽️</div>
                    <h3 class="service-title-card">Food Services</h3>
                    <p class="service-description-card">Delight your guests with exceptional catering and multi-cuisine food services.</p>
                    <button class="service-btn">Learn More</button>
                </div>
                <div class="service-card">
                    <div class="service-icon">💬</div>
                    <h3 class="service-title-card">Consultation</h3>
                    <p class="service-description-card">Get expert guidance and personalized consultation for matrimonial and event needs.</p>
                    <button class="service-btn">Learn More</button>
                </div>
                <div class="service-card">
                    <div class="service-icon">📋</div>
                    <h3 class="service-title-card">Event Coordination</h3>
                    <p class="service-description-card">Seamless event coordination ensuring everything runs perfectly on your special day.</p>
                    <button class="service-btn">Learn More</button>
                </div>
                <div class="service-card">
                    <div class="service-icon">🤝</div>
                    <h3 class="service-title-card">24/7 Support</h3>
                    <p class="service-description-card">Round-the-clock customer support with multilingual assistance and quick response times.</p>
                    <button class="service-btn">Learn More</button>
                </div>
                
                <!-- Duplicate services for infinite scroll -->
                <div class="service-card">
                    <div class="service-icon">💕</div>
                    <h3 class="service-title-card">INA Matrimony</h3>
                    <p class="service-description-card">Find your perfect life partner with our trusted matrimonial services and verified profiles.</p>
                    <button class="service-btn">Learn More</button>
                </div>
                <div class="service-card">
                    <div class="service-icon">🎉</div>
                    <h3 class="service-title-card">Event Planning</h3>
                    <p class="service-description-card">Transform your dreams into reality with expert wedding and event planning services.</p>
                    <button class="service-btn">Learn More</button>
                </div>
                <div class="service-card">
                    <div class="service-icon">🍽️</div>
                    <h3 class="service-title-card">Food Services</h3>
                    <p class="service-description-card">Delight your guests with exceptional catering and multi-cuisine food services.</p>
                    <button class="service-btn">Learn More</button>
                </div>
                <div class="service-card">
                    <div class="service-icon">💬</div>
                    <h3 class="service-title-card">Consultation</h3>
                    <p class="service-description-card">Get expert guidance and personalized consultation for matrimonial and event needs.</p>
                    <button class="service-btn">Learn More</button>
                </div>
                <div class="service-card">
                    <div class="service-icon">📋</div>
                    <h3 class="service-title-card">Event Coordination</h3>
                    <p class="service-description-card">Seamless event coordination ensuring everything runs perfectly on your special day.</p>
                    <button class="service-btn">Learn More</button>
                </div>
                <div class="service-card">
                    <div class="service-icon">🤝</div>
                    <h3 class="service-title-card">24/7 Support</h3>
                    <p class="service-description-card">Round-the-clock customer support with multilingual assistance and quick response times.</p>
                    <button class="service-btn">Learn More</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h3 style="color:#000;">Company</h3>
                <div class="company-info">
                    <p style="color:#000;"><strong>INA Group</strong></p>
                    <p style="color:#000;">Connecting hearts, creating moments</p>
                    <p style="color:#000;">Your trusted partner for matrimonial services, event planning, and more.</p>
                </div>
            </div>

            <div class="footer-section">
                <h3 style="color:#000;">Services</h3>
                <ul>
                    <li><a href="/services">INA Matrimony</a></li>
                    <li><a href="/services">Event Planning</a></li>
                    <li><a href="/services">Food Services</a></li>
                    <li><a href="/services">Consultation</a></li>
                    <li><a href="/services">Event Coordination</a></li>
                    <li><a href="/services">24/7 Support</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h3 style="color:#000;">Contact</h3>
                <div class="contact-info">
                    <p style="color:#000;"><strong style="color:#000;">Phone:</strong> <a href="tel:+918086000884" style="color:#000;">+91-8086000884</a></p>
                    <p style="color:#000;"><strong style="color:#000;">Email:</strong> <a href="mailto:info@inamatrimony.com" style="color:#000;">info@inamatrimony.com</a></p>
                    <p style="color:#000;"><strong style="color:#000;">Website:</strong> <a href="https://www.inagroups.com" target="_blank" style="color:#000;">www.inagroups.com</a></p>
                    <p style="color:#000;"><strong style="color:#000;">Address:</strong> Kerala, India</p>
                </div>
                <div class="social-links">
                    <a href="#" title="Facebook">📘</a>
                    <a href="#" title="Instagram">📷</a>
                    <a href="#" title="Twitter">🐦</a>
                    <a href="#" title="LinkedIn">💼</a>
                </div>
            </div>

            <div class="footer-section" style="margin-left:1cm;">
                <h3 style="color:#000;">Key Links</h3>
                <ul>
                    <li><a href="/careers">Careers</a></li>
                    <li><a href="/privacy">Privacy Policy</a></li>
                    <li><a href="/terms">Terms of Service</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2025 INA Group. All rights reserved. | <a href="/privacy">Privacy Policy</a> | <a href="/terms">Terms of Service</a></p>
        </div>
    </footer>

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

        // Animate sections on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const sectionObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                    sectionObserver.unobserve(entry.target);
                }
            });
        }, observerOptions);

        // Set initial state and observe sections
        document.querySelectorAll('.about-section, .services-carousel-section').forEach(section => {
            section.style.opacity = '0';
            section.style.transform = 'translateY(30px)';
            section.style.transition = 'all 0.6s ease';
            sectionObserver.observe(section);
        });

        // Service button interactions
        document.querySelectorAll('.service-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const serviceTitle = this.closest('.service-card').querySelector('.service-title-card').textContent;
                alert(`Learn more about ${serviceTitle} - Contact us for detailed information!`);
            });
        });

        // Dots indicator functionality
        const dots = document.querySelectorAll('.dot');
        dots.forEach((dot, index) => {
            dot.addEventListener('click', function() {
                dots.forEach(d => d.classList.remove('active'));
                this.classList.add('active');
                // Add slide functionality here if multiple hero images
            });
        });
    </script>
</body>
</html>