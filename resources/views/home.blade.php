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
            margin-left: 5cm; /* 5cm gap between logo and menu */
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .logo-text {
            font-size: 2rem;
            font-weight: 700;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .logo-tagline {
            font-size: 0.9rem;
            color: rgba(255, 255, 255, 0.9);
            font-weight: 300;
            margin-top: 2px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
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
            animation: slideLeft 15s infinite linear;
            gap: 2rem;
        }

        @keyframes slideLeft {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-100%);
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

        .service-card:nth-child(1) .service-icon { background: linear-gradient(135deg, #8b5a3c, #a0714d); }
        .service-card:nth-child(2) .service-icon { background: linear-gradient(135deg, #2d7c47, #34a853); }
        .service-card:nth-child(3) .service-icon { background: linear-gradient(135deg, #6b7280, #9ca3af); }
        .service-card:nth-child(4) .service-icon { background: linear-gradient(135deg, #374151, #4b5563); }
        .service-card:nth-child(5) .service-icon { background: linear-gradient(135deg, #4b5563, #6b7280); }
        .service-card:nth-child(6) .service-icon { background: linear-gradient(135deg, #6b7280, #9ca3af); }
        .service-card:nth-child(7) .service-icon { background: linear-gradient(135deg, #374151, #4b5563); }
        .service-card:nth-child(8) .service-icon { background: linear-gradient(135deg, #6b7280, #9ca3af); }
        .service-card:nth-child(9) .service-icon { background: linear-gradient(135deg, #374151, #4b5563); }

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

        
        .carousel-track {
            width: calc(350px * 18 + 2rem * 17);
        }

       
        .footer {
            background: #1f2937;
            color: #9ca3af;
            padding: 3rem 2rem 2rem;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 3rem;
        }

        .footer-section h3 {
            color: #2d7c47;
            font-size: 1.4rem;
            font-weight: 700;
            margin-bottom: 1rem;
            letter-spacing: 0.5px;
        }

        .footer-section ul {
            list-style: none;
        }

        .footer-section ul li {
            margin-bottom: 0.5rem;
        }

        .footer-section ul li a {
            color: #9ca3af;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-section ul li a:hover {
            color: #2d7c47;
        }

        .company-info {
            margin-bottom: 1.5rem;
        }

        .company-info p {
            margin-bottom: 0.5rem;
            font-size: 0.9rem;
        }

        .contact-info {
            margin-bottom: 1.5rem;
        }

        .contact-info p {
            margin-bottom: 0.5rem;
            color: #9ca3af;
        }

        .social-links {
            display: flex;
            gap: 1rem;
        }

        .social-links a {
            display: inline-block;
            width: 40px;
            height: 40px;
            background: #374151;
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #9ca3af;
            transition: all 0.3s;
        }

        .social-links a:hover {
            background: #2d7c47;
            color: white;
        }

        .footer-bottom {
            max-width: 1200px;
            margin: 2rem auto 0;
            padding-top: 2rem;
            border-top: 1px solid #374151;
            text-align: center;
            font-size: 0.9rem;
        }

        .footer-bottom a {
            color: #2d7c47;
            text-decoration: none;
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
            
            .logo-text {
                font-size: 1.5rem;
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
                
                <div class="service-card">
                    <div class="service-icon">🤝</div>
                    <h3 class="service-title-card">Waytonikah</h3>
                    <p class="service-description-card">Your trusted platform for finding the perfect life partner with comprehensive matchmaking services.</p>
                    <button class="service-btn">Learn More</button>
                </div>
                <div class="service-card">
                    <div class="service-icon">💕</div>
                    <h3 class="service-title-card">Kerala Nikah</h3>
                    <p class="service-description-card">Connecting hearts across Kerala with traditional values and modern technology.</p>
                    <button class="service-btn">Learn More</button>
                </div>
                <div class="service-card">
                    <div class="service-icon">💒</div>
                    <h3 class="service-title-card">Kerala Marriage</h3>
                    <p class="service-description-card">Specialized matrimonial services for Kerala community with personalized approach.</p>
                    <button class="service-btn">Learn More</button>
                </div>
                <div class="service-card">
                    <div class="service-icon">🌟</div>
                    <h3 class="service-title-card">Ezhava Marriage</h3>
                    <p class="service-description-card">Dedicated platform for Ezhava community matrimonial services and connections.</p>
                    <button class="service-btn">Learn More</button>
                </div>
                <div class="service-card">
                    <div class="service-icon">💫</div>
                    <h3 class="service-title-card">Thiyya Marriage</h3>
                    <p class="service-description-card">Exclusive matrimonial services for Thiyya community with verified profiles.</p>
                    <button class="service-btn">Learn More</button>
                </div>
                <div class="service-card">
                    <div class="service-icon">👑</div>
                    <h3 class="service-title-card">Royal Marriage</h3>
                    <p class="service-description-card">Premium matrimonial services for those seeking royal connections and matches.</p>
                    <button class="service-btn">Learn More</button>
                </div>
                <div class="service-card">
                    <div class="service-icon">💙</div>
                    <h3 class="service-title-card">ZAWJ</h3>
                    <p class="service-description-card">Islamic matrimonial platform connecting Muslim singles worldwide.</p>
                    <button class="service-btn">Learn More</button>
                </div>
                <div class="service-card">
                    <div class="service-icon">👗</div>
                    <h3 class="service-title-card">Masho</h3>
                    <p class="service-description-card">Premium fashion destination for Muslim women with modest and modern collections.</p>
                    <button class="service-btn">Learn More</button>
                </div>
                <div class="service-card">
                    <div class="service-icon">🎉</div>
                    <h3 class="service-title-card">KOODE</h3>
                    <p class="service-description-card">Complete wedding planning and event management services for your special day.</p>
                    <button class="service-btn">Learn More</button>
                </div>
                
                
                <div class="service-card">
                    <div class="service-icon">🤝</div>
                    <h3 class="service-title-card">Waytonikah</h3>
                    <p class="service-description-card">Your trusted platform for finding the perfect life partner with comprehensive matchmaking services.</p>
                    <button class="service-btn">Learn More</button>
                </div>
                <div class="service-card">
                    <div class="service-icon">💕</div>
                    <h3 class="service-title-card">Kerala Nikah</h3>
                    <p class="service-description-card">Connecting hearts across Kerala with traditional values and modern technology.</p>
                    <button class="service-btn">Learn More</button>
                </div>
                <div class="service-card">
                    <div class="service-icon">💒</div>
                    <h3 class="service-title-card">Kerala Marriage</h3>
                    <p class="service-description-card">Specialized matrimonial services for Kerala community with personalized approach.</p>
                    <button class="service-btn">Learn More</button>
                </div>
                <div class="service-card">
                    <div class="service-icon">🌟</div>
                    <h3 class="service-title-card">Ezhava Marriage</h3>
                    <p class="service-description-card">Dedicated platform for Ezhava community matrimonial services and connections.</p>
                    <button class="service-btn">Learn More</button>
                </div>
                <div class="service-card">
                    <div class="service-icon">💫</div>
                    <h3 class="service-title-card">Thiyya Marriage</h3>
                    <p class="service-description-card">Exclusive matrimonial services for Thiyya community with verified profiles.</p>
                    <button class="service-btn">Learn More</button>
                </div>
                <div class="service-card">
                    <div class="service-icon">