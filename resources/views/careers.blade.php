<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career - INA</title>
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

        /* Career Content Section */
        .career-section {
            background: white;
            padding: 4rem 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .career-header {
            text-align: center;
            margin-bottom: 3rem;
        }

        .career-header h2 {
            color: #ff4757;
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .career-subtitle {
            font-size: 1.2rem;
            color: #666;
            line-height: 1.6;
            max-width: 600px;
            margin: 0 auto;
        }

        .join-section {
            text-align: center;
            margin-bottom: 4rem;
            padding: 2rem;
            background: #f8fafc;
            border-radius: 15px;
        }

        .join-title {
            color: #000;
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .join-description {
            font-size: 1rem;
            color: #666;
            line-height: 1.6;
            margin-bottom: 2rem;
        }

        .apply-now-btn {
            background: #2c5282;
            color: white;
            background: #000;
            color: #fff;
            padding: 15px 40px;
            border: none;
            border-radius: 25px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .apply-now-btn:hover {
            background: #1a365d;
            transform: translateY(-2px);
            background: #222;
            color: #ffd700;
            box-shadow: 0 5px 15px rgba(44, 82, 130, 0.4);
        }

        .jobs-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .job-card {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            border: 1px solid #e5e7eb;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            transition: all 0.3s;
        }

        .job-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }

        .job-category {
            color: #666;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 0.5rem;
        }

        .job-title {
            color: #333;
            font-size: 1.4rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .job-description {
            color: #666;
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }

        .apply-btn {
            background: #ff4757;
            color: white;
            background: #000;
            color: #fff;
            padding: 10px 25px;
            border: none;
            border-radius: 25px;
            font-size: 0.9rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .apply-btn:hover {
            background: #e84142;
            transform: translateY(-2px);
            background: #222;
            color: #ffd700;
            box-shadow: 0 4px 12px rgba(255, 71, 87, 0.3);
        }

        .contact-form-section {
            background: #f8fafc;
            padding: 3rem 2rem;
            border-radius: 15px;
            margin-top: 3rem;
        }

        .contact-form-title {
            text-align: center;
            color: #333;
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 2rem;
        }

        .contact-form {
            max-width: 500px;
            margin: 0 auto;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            color: #333;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.3s;
        }

        .form-group input:focus,
        .form-group textarea:focus,
        .form-group select:focus {
            outline: none;
            border-color: #ff4757;
        }

        .submit-btn {
            background: #ff4757;
            color: white;
            background: #000;
            color: #fff;
            padding: 15px 40px;
            border: none;
            border-radius: 25px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            width: 100%;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .submit-btn:hover {
            background: #e84142;
            transform: translateY(-2px);
            background: #222;
            color: #ffd700;
            box-shadow: 0 5px 15px rgba(255, 71, 87, 0.3);
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

            .jobs-grid {
                grid-template-columns: 1fr;
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

            .footer-content {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .career-section {
                padding: 2rem 1rem;
            }
            
            .hero-title {
                font-size: 2.5rem;
            }
            
            .logo-text {
                font-size: 1.5rem;
            }

            .career-header h2 {
                font-size: 2rem;
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

            .career-header h2 {
                font-size: 1.8rem;
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
                    <li><a href="/careers" class="active">CAREERS</a></li>
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

    <!-- Career Content Section -->
    <section class="career-section">
        <!-- Join Our Team Section -->
        <div class="join-section">
            <h2 class="join-title">Join Our Team!</h2>
            <p class="join-description">
                We are always looking for talented individuals who are passionate about making a difference. 
                Join our dynamic team and be part of an innovative company that values creativity, collaboration, and growth.
            </p>
            <button class="apply-now-btn">APPLY NOW</button>
        </div>

        <!-- Job Listings -->
        <div class="jobs-grid">
            <!-- Marketing Advisor -->
            <div class="job-card">
                <div class="job-category">MARKETING</div>
                <h3 class="job-title">Marketing Advisor</h3>
                <p class="job-description">
                    Join our dynamic marketing team and help drive our brand forward. We're looking for creative individuals 
                    with strong analytical skills and a passion for digital marketing strategies.
                </p>
                <button class="apply-btn">Apply</button>
            </div>

            <!-- Supervisor -->
            <div class="job-card">
                <div class="job-category">OPERATIONS</div>
                <h3 class="job-title">Supervisor</h3>
                <p class="job-description">
                    Lead and coordinate team activities while ensuring operational excellence. Perfect opportunity for 
                    experienced professionals looking to take on leadership responsibilities.
                </p>
                <button class="apply-btn">Apply</button>
            </div>

            <!-- Field Agent -->
            <div class="job-card">
                <div class="job-category">SALES</div>
                <h3 class="job-title">Field Agent</h3>
                <p class="job-description">
                    Be the face of our company in the field. Build relationships with clients and expand our market presence 
                    through direct engagement and exceptional service delivery.
                </p>
                <button class="apply-btn">Apply</button>
            </div>

            <!-- Marketing Field Rep -->
            <div class="job-card">
                <div class="job-category">MARKETING</div>
                <h3 class="job-title">Marketing Field Rep</h3>
                <p class="job-description">
                    Represent our brand in various marketing activities and events. Ideal for enthusiastic individuals 
                    who enjoy networking and promoting innovative solutions.
                </p>
                <button class="apply-btn">Apply</button>
            </div>
        </div>

        <!-- Contact Form Section -->
        <div class="contact-form-section">
            <h2 class="contact-form-title">Apply for a Position</h2>
            <form class="contact-form">
                <div class="form-group">
                    <label for="name">Full Name *</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="email">Email Address *</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone">
                </div>

                <div class="form-group">
                    <label for="position">Position Applied For *</label>
                    <select id="position" name="position" required>
                        <option value="">Select Position</option>
                        <option value="marketing-advisor">Marketing Advisor</option>
                        <option value="supervisor">Supervisor</option>
                        <option value="field-agent">Field Agent</option>
                        <option value="marketing-field-rep">Marketing Field Rep</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="experience">Years of Experience</label>
                    <select id="experience" name="experience">
                        <option value="">Select Experience</option>
                        <option value="0-1">0-1 years</option>
                        <option value="2-5">2-5 years</option>
                        <option value="6-10">6-10 years</option>
                        <option value="10+">10+ years</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="cover-letter">Cover Letter / Additional Information</label>
                    <textarea id="cover-letter" name="cover-letter" rows="4" 
                              placeholder="Tell us why you're interested in this position..."></textarea>
                </div>

                <button type="submit" class="submit-btn">Submit Application</button>
            </form>
        </div>
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
                <div class="social-links">
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
        // Simple form validation
        document.querySelector('.contact-form').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const name = document.getElementById('name').value.trim();
            const email = document.getElementById('email').value.trim();
            const position = document.getElementById('position').value;
            
            if (!name || !email || !position) {
                alert('Please fill in all required fields.');
                return;
            }
            
            if (!email.includes('@')) {
                alert('Please enter a valid email address.');
                return;
            }
            
            alert('Thank you for your application! We will review it and get back to you soon.');
            this.reset();
        });

        // Apply button functionality
        document.querySelectorAll('.apply-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const jobTitle = this.closest('.job-card').querySelector('.job-title').textContent;
                document.getElementById('position').value = jobTitle.toLowerCase().replace(/\s+/g, '-');
                document.querySelector('.contact-form-section').scrollIntoView({ behavior: 'smooth' });
            });
        });

        // Apply Now button functionality
        document.querySelector('.apply-now-btn').addEventListener('click', function() {
            document.querySelector('.contact-form-section').scrollIntoView({ behavior: 'smooth' });
        });
    </script>
</body>
</html>