<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - INA</title>
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

        /* Hero Section - Same as home page */
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
            font-size: 4rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
            line-height: 1.2;
        }

        .hero-subtitle {
            font-size: 1.3rem;
            font-weight: 300;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.7);
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
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

        /* Contact Content Section */
        .contact-section {
            background: #f8fafc;
            padding: 4rem 2rem;
            min-height: 100vh;
        }

        .contact-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: start;
        }

        /* Contact Form */
        .contact-form-section {
            background: white;
            padding: 3rem;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
            border: 1px solid #e5e7eb;
        }

        .form-title {
            color: #333;
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .form-subtitle {
            color: #666;
            font-size: 1rem;
            margin-bottom: 2rem;
            line-height: 1.5;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            color: #333;
            font-weight: 600;
            margin-bottom: 0.5rem;
            font-size: 0.9rem;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 1rem;
            transition: all 0.3s;
            font-family: 'Nunito', sans-serif;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #ff6b35;
            box-shadow: 0 0 0 3px rgba(255, 107, 53, 0.1);
        }

        .form-group textarea {
            resize: vertical;
            min-height: 120px;
        }

        .submit-btn {
            background: #ff6b35;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 25px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            text-transform: uppercase;
            letter-spacing: 1px;
            width: 100%;
        }

        .submit-btn:hover {
            background: #e55a2b;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 107, 53, 0.3);
        }

        /* Contact Info Section */
        .contact-info-section {
            padding: 3rem 0;
        }

        .info-title {
            color: #333;
            font-size: 2.2rem;
            font-weight: 700;
            margin-bottom: 2rem;
        }

        .info-text {
            color: #666;
            font-size: 1rem;
            line-height: 1.6;
            margin-bottom: 2rem;
        }

        .contact-methods {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .contact-method {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 1rem;
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            transition: all 0.3s;
        }

        .contact-method:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .method-icon {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            color: white;
            flex-shrink: 0;
        }

    .method-icon.call { background: #000; }
        .method-icon.email { background: #4285f4; }
        .method-icon.website { background: #34a853; }
        .method-icon.address { background: #6c757d; }

        .method-info {
            flex: 1;
        }

        .method-title {
            font-weight: 700;
            color: #333;
            font-size: 1.1rem;
            margin-bottom: 0.3rem;
        }

        .method-details {
            color: #666;
            font-size: 0.9rem;
        }

        .social-section {
            margin-top: 2rem;
        }

        .social-title {
            color: #333;
            font-weight: 700;
            font-size: 1.1rem;
            margin-bottom: 1rem;
        }

        .social-links {
            display: flex;
            gap: 1rem;
        }

        .social-links a {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none;
            transition: all 0.3s;
            font-size: 1.2rem;
        }

        .social-links a:nth-child(1) { background: #ff6b35; }
        .social-links a:nth-child(2) { background: #1da1f2; }
        .social-links a:nth-child(3) { background: #0077b5; }
        .social-links a:nth-child(4) { background: #e4405f; }

        .social-links a:hover {
            transform: translateY(-3px) scale(1.1);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        /* Map Section */
        .map-section {
            margin-top: 4rem;
            height: 400px;
            background: #e5e7eb;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
            position: relative;
        }

        .map-placeholder {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            font-size: 1.2rem;
            font-weight: 600;
        }

        /* Office Hours Section */
        .office-hours {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            margin-top: 2rem;
        }

        .hours-title {
            color: #333;
            font-weight: 700;
            font-size: 1.3rem;
            margin-bottom: 1rem;
        }

        .hours-list {
            list-style: none;
        }

        .hours-list li {
            display: flex;
            justify-content: space-between;
            padding: 0.5rem 0;
            border-bottom: 1px solid #f1f3f4;
            color: #666;
        }

        .hours-list li:last-child {
            border-bottom: none;
        }

        .day {
            font-weight: 600;
            color: #333;
        }

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

        .footer-social-links {
            display: flex;
            gap: 1rem;
        }

        .footer-social-links a {
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

        .footer-social-links a:hover {
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
            .contact-container {
                grid-template-columns: 1fr;
                gap: 3rem;
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

            .contact-section {
                padding: 2rem 1rem;
            }

            .contact-form-section {
                padding: 2rem;
            }

            .footer-content {
                grid-template-columns: 1fr;
                text-align: center;
            }
            
            .hero-title {
                font-size: 2.5rem;
            }
            
            .logo-text {
                font-size: 1.5rem;
            }

            .info-title {
                font-size: 1.8rem;
            }

            .social-links {
                justify-content: center;
            }
        }

        @media (max-width: 480px) {
            .hero-title {
                font-size: 2rem;
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

            .info-title {
                font-size: 1.5rem;
            }

            .contact-form-section {
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <section class="hero" id="home">
        <img src="/images/home.png" alt="Home" class="hero-image">
        <div class="hero-overlay"></div>
        
        <!-- Navigation -->
        <div class="hero-nav">
            <div class="nav-container" style="width:100%; display:flex; align-items:center; justify-content:flex-end;">
                <ul class="nav-menu" style="display:flex; align-items:center; margin:0; padding:0; gap:1.5rem;">
                    <li><a href="/">HOME</a></li>
                    <li><a href="/about">ABOUT US</a></li>
                    <li><a href="/services">SERVICES</a></li>
                    <li><a href="/careers">CAREERS</a></li>
                    <li><a href="/contact" class="active">CONTACT US</a></li>
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

        <!-- Hero Content -->
        <div class="hero-content">
            <div class="hero-text">

            </div>
        </div>

        <!-- Hero Bottom -->
        <div class="hero-bottom">
            <div class="dots-indicator">
                <div class="dot active"></div>
                <div class="dot"></div>
                <div class="dot"></div>
            </div>
        </div>
    </section>

    <!-- Contact Content Section -->
    <section class="contact-section">
        <div class="contact-container">
            <!-- Contact Form -->
            <div class="contact-form-section">
                <h2 class="form-title">Your Name</h2>
                <p class="form-subtitle">Feel free to reach out! We're here to help and answer any questions you may have.</p>
                
                <form class="contact-form" id="contactForm">
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone">
                    </div>

                    <div class="form-group">
                        <label for="message">Your Message</label>
                        <textarea id="message" name="message" placeholder="Write your message here..." required></textarea>
                    </div>

                    <button type="submit" class="submit-btn">Send Message</button>
                </form>
            </div>

            <!-- Contact Info -->
            <div class="contact-info-section">
                <h2 class="info-title">Get In Touch</h2>
                <p class="info-text">
                    We'd love to hear from you. Send us a message and we'll respond as soon as possible. Our team is dedicated to providing you with the best service and support.
                </p>

                <div class="contact-methods">
                    <div class="contact-method">
                        <div class="method-icon call">📞</div>
                        <div class="method-info">
                            <div class="method-title">Call Us</div>
                            <div class="method-details">+91-123-456-7890</div>
                        </div>
                    </div>

                    <div class="contact-method">
                        <div class="method-icon email">✉️</div>
                        <div class="method-info">
                            <div class="method-title">Email Us</div>
                            <div class="method-details">info@inagroup.com</div>
                        </div>
                    </div>

                    <div class="contact-method">
                        <div class="method-icon website">🌐</div>
                        <div class="method-info">
                            <div class="method-title">Website</div>
                            <div class="method-details">www.inagroup.com</div>
                        </div>
                    </div>

                    <div class="contact-method">
                        <div class="method-icon address">📍</div>
                        <div class="method-info">
                            <div class="method-title">Address</div>
                            <div class="method-details">123, INA Group, Main Street, Kanayannur, Kerala, India</div>
                        </div>
                    </div>
                </div>

                <div class="social-section">
                    <div class="social-title">Follow Us On</div>
                    <div class="social-links">
                        <a href="#" aria-label="Instagram">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.5" y2="6.5"/></svg>
                        </a>
                        <a href="#" aria-label="LinkedIn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="2" ry="2"/><path d="M16 8a6 6 0 0 1 6 6v6h-4v-6a2 2 0 0 0-4 0v6h-4v-6a6 6 0 0 1 6-6z"/><circle cx="8" cy="8" r="2"/></svg>
                        </a>
                        <a href="#" aria-label="Facebook">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H6v4h4v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
                        </a>
                        <a href="#" aria-label="Twitter">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53A4.48 4.48 0 0 0 22.43.36a9.09 9.09 0 0 1-2.88 1.1A4.52 4.52 0 0 0 16.5 0c-2.5 0-4.5 2.01-4.5 4.5 0 .35.04.69.1 1.02A12.94 12.94 0 0 1 3 1.64a4.48 4.48 0 0 0-.61 2.27c0 1.57.8 2.95 2.02 3.76A4.48 4.48 0 0 1 2 6.13v.06c0 2.2 1.56 4.03 3.64 4.45-.38.1-.78.16-1.19.16-.29 0-.57-.03-.85-.08.58 1.81 2.26 3.13 4.25 3.17A9.05 9.05 0 0 1 1 19.54a12.8 12.8 0 0 0 6.95 2.04c8.34 0 12.9-6.91 12.9-12.9 0-.2 0-.39-.01-.58A9.22 9.22 0 0 0 23 3z"/></svg>
                        </a>
                    </div>
                </div>

                <div class="office-hours">
                    <div class="hours-title">Opening Hours</div>
                    <ul class="hours-list">
                        <li><span class="day">Monday - Friday</span><span>9:00 AM - 6:00 PM</span></li>
                        <li><span class="day">Saturday</span><span>9:00 AM - 2:00 PM</span></li>
                        <li><span class="day">Sunday</span><span>Closed</span></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Map Section -->
        
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h3>Contact Info</h3>
                <div class="contact-info">
                    <p>📧 info@ina.com</p>
                    <p>📞 +91 123 456 7890</p>
                    <p>📍 Kanayannur, Kerala, India</p>
                </div>
                <div class="footer-social-links">
                    <a href="#" aria-label="Facebook">📘</a>
                    <a href="#" aria-label="Twitter">🐦</a>
                    <a href="#" aria-label="Instagram">📷</a>
                    <a href="#" aria-label="LinkedIn">💼</a>
                </div>
            </div>
            
            <div class="footer-section">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="/about">About Us</a></li>
                    <li><a href="/services">Services</a></li>
                    <li><a href="/careers">Careers</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            
            <div class="footer-section">
                <h3>Services</h3>
                <ul>
                    <li><a href="#">Matrimony</a></li>
                    <li><a href="#">Wedding Planning</a></li>
                    <li><a href="#">Fashion</a></li>
                    <li><a href="#">Mobile Apps</a></li>
                </ul>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; 2025 INA. All rights reserved. | Designed with ❤️ for better connections</p>
        </div>
    </footer>

    <script>
        // Form validation and submission
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const name = document.getElementById('name').value.trim();
            const email = document.getElementById('email').value.trim();
            const message = document.getElementById('message').value.trim();
            
            if (!name || !email || !message) {
                alert('Please fill in all required fields.');
                return;
            }
            
            if (!email.includes('@')) {
                alert('Please enter a valid email address.');
                return;
            }
            
            // Success message
            alert('Thank you for your message! We will get back to you soon.');
            this.reset();
        });

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
</body>
</html>