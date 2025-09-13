<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nika Online - Innovating The Future</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700" rel="stylesheet">
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

        /* Header Navigation */
        .header {
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(10px);
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            padding: 1rem 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            height: 80px; /* Define header height */
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
            height: 100%;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .logo-text {
            font-size: 1.5rem;
            font-weight: 700;
            color: #2d7c47;
        }

        .logo-tagline {
            font-size: 0.8rem;
            color: #666;
            font-weight: 300;
            margin-top: 2px;
        }

        .nav-menu {
            display: flex;
            list-style: none;
            gap: 2.5rem;
            align-items: center;
        }

        .nav-menu a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            font-size: 0.9rem;
            letter-spacing: 0.5px;
            transition: color 0.3s;
        }

        .nav-menu a:hover {
            color: #241571;
        }

        .nav-menu .active {
            color: #241571;
            font-weight: 600;
        }

        /* Hero Section */
        .hero {
            height: 100vh;
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 80px; /* Add margin to push content below header */
        }

        .hero-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center top; /* Ensure image starts from top and cuts from bottom */
            z-index: 1;
        }

        .hero-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 200px;
            background: linear-gradient(transparent, rgba(0, 0, 0, 0.4));
            z-index: 2;
        }

        .read-more-btn {
            position: absolute;
            bottom: 40px;
            left: 50%;
            transform: translateX(-50%);
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            color: white;
            padding: 12px 24px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 6px;
            font-size: 0.9rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s;
            z-index: 3;
        }

        .read-more-btn:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateX(-50%) translateY(-2px);
        }

        .dots-indicator {
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 8px;
            z-index: 3;
        }

        .dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.5);
            cursor: pointer;
            transition: all 0.3s;
        }

        .dot.active {
            background: #241571;
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

        /* Services Grid Section */
        .services-grid-section {
            background: #f8fafc;
            padding: 4rem 2rem;
        }

        .services-header {
            text-align: center;
            margin-bottom: 3rem;
        }

        .services-header h2 {
            font-size: 2.5rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 1rem;
        }

        .services-grid {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
        }

        .service-card {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            transition: all 0.3s;
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
        }

        .service-logo {
            font-size: 2rem;
            font-weight: 600;
            color: #666;
            margin-bottom: 1rem;
        }

        .service-card:nth-child(1) .service-logo { color: #8b5a3c; }
        .service-card:nth-child(2) .service-logo { color: #2d7c47; }
        .service-card:nth-child(3) .service-logo { color: #6b7280; }
        .service-card:nth-child(4) .service-logo { color: #374151; font-style: italic; }
        .service-card:nth-child(5) .service-logo { color: #4b5563; font-style: italic; }
        .service-card:nth-child(6) .service-logo { color: #6b7280; font-style: italic; }
        .service-card:nth-child(7) .service-logo { color: #374151; }
        .service-card:nth-child(8) .service-logo { color: #6b7280; }
        .service-card:nth-child(9) .service-logo { color: #374151; }

        /* Footer */
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
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
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

        /* Responsive Design */
        @media (max-width: 1024px) {
            .services-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .footer-content {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .header {
                height: 70px; /* Smaller header on mobile */
            }
            
            .hero {
                margin-top: 70px; /* Adjust hero margin for mobile */
            }
            
            .nav-menu {
                display: none;
            }

            .services-grid {
                grid-template-columns: 1fr;
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

            .services-grid-section {
                padding: 2rem 1rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="nav-container">
            <div class="logo">
                <div>
                    <div class="logo-text">NIKA ONLINE</div>
                    <div class="logo-tagline">INNOVATING THE FUTURE</div>
                </div>
            </div>
            <nav>
                <ul class="nav-menu">
                    <li><a href="#home" class="active">HOME</a></li>
                    <li><a href="#about">ABOUT US</a></li>
                    <li><a href="#services">SERVICES</a></li>
                    <li><a href="#careers">CAREERS</a></li>
                    <li><a href="#contact">CONTACT US</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <img src="/images/home.jpeg" alt="Team collaboration" class="hero-image">
        <div class="hero-overlay"></div>
        <button class="read-more-btn">Read More</button>
        <div class="dots-indicator">
            <div class="dot active"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section" id="about">
        <div class="about-content">
            <p>INA Matrimony is a trusted online platform designed to help individuals and families find their perfect life partner with ease and comfort from their own homes.</p>
            <p>Founded with the vision of bringing people together, INA is built and managed by a team of dedicated and experienced professionals who understand the importance of marriage in one’s life. We are committed to providing a safe, reliable, and user-friendly environment for our members.
             Since our inception, we have been working tirelessly to make INA one of the most preferred matrimonial websites, offering modern features while respecting traditional values. Our mission is to connect people across communities through both online and offline services, ensuring that everyone can benefit from the opportunities we provide.
             At INA Matrimony, we believe in making meaningful connections and are constantly striving to improve our services so that you can find the right match for a happy and fulfilling future.</p>
        </div>

        <div class="service-section">
            <h2 class="service-title" style="color:#241571; font-weight:900;">Wedding Planners</h2>
            <p class="service-description">INA is one of India’s trusted wedding planning platforms, designed to bring together everything you need for a perfect celebration. From venues to photographers, caterers to decorators, we connect you with reliable vendors who make your special day unforgettable.</p>
            <p class="service-description">We simplify the wedding journey by offering easy-to-use tools, expert resources, and a wide vendor directory, all in one place. Couples can discover, compare, and book professionals with confidence—anytime, anywhere.</p>
            <p class="service-description">Our goal is to make wedding planning stress-free and enjoyable, so you can focus on cherishing the moments that truly matter. With thousands of verified listings and genuine reviews, INA ensures every couple finds the right services to match their vision and budget.</p>
        </div>

        <div class="service-section">
            <h2 class="service-title" style="color:#241571; font-weight:900;">Matrimony</h2>
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
            <h2 class="service-title" style="color:#241571; font-weight:900;">Fashion</h2>
            <p class="service-description">Masho.com is one of the best online fashion destination for Muslim women that brings something fresh, modest and modern to the table. We offer Islamic Abayas, Hijabs, Kaftans, Niqabs and a wide range of Islamic accessories at an affordable price. With the Masho app, you can pick your favorite, get quick delivery, early sales, exciting deals and promotions, and other exclusive rewards on all your purchases. Download the Masho app for Android or iOS today and indulge in an amazing shopping experience!!!</p>
            <p class="service-description">Another reason why Masho is considered one of the best online shopping stores is because it provides complete ease when you shop. Easy to pick filters, brands, prices, etc. give you the option to pick the best via a user-friendly interface. Size charts, product features, and high-resolution photos all assist you in making the best buying decisions. You can also choose your payment method, whether it's by card or cash-on-delivery. As a buyer, the 30-day return policy provides you greater leverage.</p>
            <p class="service-description">Enjoy the convenience of shopping from the comfort of your own home or office. Shop for friends, family, and loved ones, and avail of our gift services on special occasions.</p>
        </div>

        <div class="service-section">
            <h2 class="service-title" style="color:#241571; font-weight:900;">Mobile apps</h2>
            <p class="service-description">Stay connected anywhere, anytime...!!! Look up matrimonial prospects, shop for your favorite hijab, or pick the best photographer for your wedding with respective mobile apps available for both iOS and Android</p>
        </div>
    </section>

    <!-- Services Grid -->
    <section class="services-grid-section" id="services">
        <div class="services-header">
            <h2>Our Services</h2>
        </div>
        <div class="services-grid">
            <div class="service-card">
                <div class="service-logo">Waytonikah</div>
            </div>
            <div class="service-card">
                <div class="service-logo">KERALA NIKAH</div>
            </div>
            <div class="service-card">
                <div class="service-logo">KERALA MARRIAGE</div>
            </div>
            <div class="service-card">
                <div class="service-logo">Ezhava Marriage</div>
            </div>
            <div class="service-card">
                <div class="service-logo">Thiyya Marriage</div>
            </div>
            <div class="service-card">
                <div class="service-logo">Royal Marriage</div>
            </div>
            <div class="service-card">
                <div class="service-logo">ZAWJ</div>
            </div>
            <div class="service-card">
                <div class="service-logo">masho</div>
            </div>
            <div class="service-card">
                <div class="service-logo">KOODE</div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer" id="contact">
        <div class="footer-content">
            <div class="footer-section">
                <div class="logo">
                    <div>
                        <div class="logo-text">NIKA ONLINE</div>
                        <div class="logo-tagline">INNOVATING THE FUTURE</div>
                    </div>
                </div>
                <div class="company-info">
                    <p>Nika Online Pvt Ltd.</p>
                    <p>2nd Floor, Nesto Grand Square Mall,</p>
                    <p>Vatakara, Kerala - 673101</p>
                </div>
                <div class="contact-info">
                    <p>📞 +91 8593 868 686</p>
                    <p>✉️ info@nikaonline.net</p>
                </div>
                <div class="social-links">
                    <a href="#">🐦</a>
                    <a href="#">📘</a>
                    <a href="#">📷</a>
                </div>
            </div>
            <div class="footer-section">
                <h3>Useful Links</h3>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#terms">Terms of Service</a></li>
                    <li><a href="#privacy">Privacy policy</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Our Services</h3>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Privacy policy</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>© 2021 <a href="#">Nika Online Pvt Ltd</a>. All Rights Reserved.</p>
        </div>
    </footer>

    <script>
        // Dots indicator functionality
        document.querySelectorAll('.dot').forEach((dot, index) => {
            dot.addEventListener('click', () => {
                document.querySelectorAll('.dot').forEach(d => d.classList.remove('active'));
                dot.classList.add('active');
            });
        });

        // Read More button functionality
        document.querySelector('.read-more-btn').addEventListener('click', () => {
            document.querySelector('#about').scrollIntoView({ behavior: 'smooth' });
        });

        // Smooth scrolling for navigation
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth' });
                }
            });
        });
    </script>
</body>
</html>