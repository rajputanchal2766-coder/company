<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeForge | Multi-Software Solutions</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary: #2a5bd7;
            --primary-dark: #1e3f9c;
            --secondary: #00c9a7;
            --dark: #1a1a2e;
            --light: #f8f9fa;
            --gray: #6c757d;
            --light-gray: #e9ecef;
            --shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
        }

        body {
            font-family: 'Roboto', sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: var(--light);
            overflow-x: hidden;
        }

        h1, h2, h3, h4, h5 {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            line-height: 1.3;
            margin-bottom: 1rem;
            color: var(--dark);
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        /* Header & Navigation */
        header {
            background-color: white;
            box-shadow: var(--shadow);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.2rem 0;
        }

        .logo {
            display: flex;
            align-items: center;
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--primary);
            text-decoration: none;
        }

        .logo i {
            margin-right: 8px;
            color: var(--secondary);
        }

        .nav-links {
            display: flex;
            list-style: none;
        }

        .nav-links li {
            margin-left: 2rem;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--dark);
            font-weight: 500;
            transition: var(--transition);
            position: relative;
        }

        .nav-links a:hover {
            color: var(--primary);
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            background: var(--primary);
            left: 0;
            bottom: -5px;
            transition: var(--transition);
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .mobile-toggle {
            display: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: var(--dark);
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, #1a1a2e 0%, #2a5bd7 100%);
            color: white;
            padding: 10rem 0 6rem;
            margin-top: 70px;
            text-align: center;
        }

        .hero h1 {
            font-size: 3.2rem;
            color: white;
            margin-bottom: 1.5rem;
        }

        .hero p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto 2rem;
            color: rgba(255, 255, 255, 0.85);
        }

        .cta-button {
            display: inline-block;
            background-color: var(--secondary);
            color: white;
            padding: 0.9rem 2.2rem;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            font-size: 1.1rem;
            transition: var(--transition);
            border: none;
            cursor: pointer;
            margin-top: 1rem;
        }

        .cta-button:hover {
            background-color: #00a88a;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        /* Software Showcase Section */
        .section-title {
            text-align: center;
            margin-bottom: 3rem;
        }

        .section-title h2 {
            font-size: 2.5rem;
            display: inline-block;
            position: relative;
        }

        .section-title h2::after {
            content: '';
            position: absolute;
            width: 70px;
            height: 4px;
            background: var(--secondary);
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
        }

        .software-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 2rem;
            padding: 2rem 0 5rem;
        }

        .software-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        .software-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }

        .software-img {
            height: 200px;
            background-color: var(--light-gray);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 4rem;
            color: var(--primary);
        }

        .software-content {
            padding: 1.8rem;
        }

        .software-content h3 {
            font-size: 1.5rem;
            margin-bottom: 0.8rem;
        }

        .software-tags {
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 1rem;
        }

        .tag {
            background-color: var(--light-gray);
            color: var(--dark);
            padding: 0.3rem 0.8rem;
            border-radius: 50px;
            font-size: 0.8rem;
            margin-right: 0.5rem;
            margin-bottom: 0.5rem;
        }

        /* Features Section */
        .features {
            background-color: var(--light-gray);
            padding: 5rem 0;
        }

        .feature-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 2rem;
        }

        .feature-card {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            text-align: center;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        .feature-card:hover {
            transform: translateY(-5px);
        }

        .feature-icon {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 1.5rem;
        }

        /* Process Section */
        .process {
            padding: 5rem 0;
        }

        .process-steps {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            margin-top: 3rem;
        }

        .step {
            flex: 1;
            min-width: 200px;
            text-align: center;
            padding: 0 1.5rem;
            position: relative;
            margin-bottom: 2rem;
        }

        .step-number {
            width: 60px;
            height: 60px;
            background: var(--primary);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: 700;
            margin: 0 auto 1.5rem;
            position: relative;
            z-index: 2;
        }

        .step:not(:last-child)::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 3px;
            background: var(--light-gray);
            top: 30px;
            left: 50%;
            z-index: 1;
        }

        /* Contact Section */
        .contact {
            padding: 5rem 0;
            background-color: var(--dark);
            color: white;
        }

        .contact h2, .contact h3 {
            color: white;
        }

        .contact-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 3rem;
        }

        .contact-info h3 {
            margin-bottom: 1.5rem;
        }

        .contact-info p {
            margin-bottom: 1.5rem;
            color: rgba(255, 255, 255, 0.8);
        }

        .contact-details {
            margin-top: 2rem;
        }

        .contact-detail {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
        }

        .contact-detail i {
            margin-right: 1rem;
            color: var(--secondary);
            font-size: 1.2rem;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 1rem;
            margin-bottom: 1.5rem;
            border: none;
            border-radius: 5px;
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
            font-family: 'Roboto', sans-serif;
        }

        .contact-form input::placeholder,
        .contact-form textarea::placeholder {
            color: rgba(255, 255, 255, 0.6);
        }

        .contact-form button {
            background-color: var(--secondary);
            color: white;
            border: none;
            padding: 1rem 2.5rem;
            border-radius: 5px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
        }

        .contact-form button:hover {
            background-color: #00a88a;
        }

        /* Footer */
        footer {
            background-color: #151522;
            color: rgba(255, 255, 255, 0.7);
            padding: 3rem 0 1.5rem;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            margin-bottom: 2rem;
        }

        .footer-column {
            flex: 1;
            min-width: 250px;
            margin-bottom: 2rem;
        }

        .footer-column h4 {
            color: white;
            margin-bottom: 1.5rem;
            font-size: 1.2rem;
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 0.8rem;
        }

        .footer-links a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: var(--transition);
        }

        .footer-links a:hover {
            color: var(--secondary);
            padding-left: 5px;
        }

        .copyright {
            text-align: center;
            padding-top: 1.5rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            font-size: 0.9rem;
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .hero h1 {
                font-size: 2.8rem;
            }
            
            .software-grid {
                grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            }
            
            .process-steps {
                justify-content: center;
            }
            
            .step {
                flex: 0 0 45%;
                margin-bottom: 3rem;
            }
        }

        @media (max-width: 768px) {
            .mobile-toggle {
                display: block;
            }
            
            .nav-links {
                position: fixed;
                top: 70px;
                left: 0;
                width: 100%;
                background-color: white;
                flex-direction: column;
                align-items: center;
                padding: 2rem 0;
                box-shadow: var(--shadow);
                transform: translateY(-100%);
                opacity: 0;
                transition: var(--transition);
                z-index: 999;
            }
            
            .nav-links.active {
                transform: translateY(0);
                opacity: 1;
            }
            
            .nav-links li {
                margin: 1rem 0;
            }
            
            .hero {
                padding: 8rem 0 4rem;
            }
            
            .hero h1 {
                font-size: 2.3rem;
            }
            
            .section-title h2 {
                font-size: 2rem;
            }
            
            .step {
                flex: 0 0 100%;
            }
            
            .step:not(:last-child)::after {
                display: none;
            }
        }

        @media (max-width: 576px) {
            .hero h1 {
                font-size: 2rem;
            }
            
            .software-grid {
                grid-template-columns: 1fr;
            }
            
            .footer-column {
                flex: 0 0 100%;
            }
        }
    </style>
</head>
<body>
    <!-- Header & Navigation -->
    <header>
        <div class="container">
            <nav class="navbar">
                <a href="#" class="logo">
                    <i class="fas fa-cube"></i> CodeForge
                </a>
                <div class="mobile-toggle">
                    <i class="fas fa-bars"></i>
                </div>
                <ul class="nav-links">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#software">Software</a></li>
                    <li><a href="#features">Features</a></li>
                    <li><a href="#process">Process</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container">
            <h1>Creating Powerful Software Solutions</h1>
            <p>We design and develop custom software applications for businesses of all sizes. From mobile apps to enterprise systems, our team delivers innovative solutions that drive growth and efficiency.</p>
            <a href="#software" class="cta-button">Explore Our Software</a>
        </div>
    </section>

    <!-- Software Showcase Section -->
    <section class="software-section" id="software">
        <div class="container">
            <div class="section-title">
                <h2>Our Software Products</h2>
            </div>
            <div class="software-grid">
                <!-- Software Card 1 -->
                <div class="software-card">
                    <div class="software-img">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div class="software-content">
                        <h3>Analytix Pro</h3>
                        <div class="software-tags">
                            <span class="tag">Data Analytics</span>
                            <span class="tag">Business Intelligence</span>
                            <span class="tag">Dashboard</span>
                        </div>
                        <p>Advanced analytics platform that transforms raw data into actionable insights with interactive dashboards and predictive modeling.</p>
                    </div>
                </div>

                <!-- Software Card 2 -->
                <div class="software-card">
                    <div class="software-img">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <div class="software-content">
                        <h3>CommerceFlow</h3>
                        <div class="software-tags">
                            <span class="tag">E-commerce</span>
                            <span class="tag">Inventory Management</span>
                            <span class="tag">Payment Processing</span>
                        </div>
                        <p>Complete e-commerce solution with inventory management, payment processing, and customer relationship tools.</p>
                    </div>
                </div>

                <!-- Software Card 3 -->
                <div class="software-card">
                    <div class="software-img">
                        <i class="fas fa-project-diagram"></i>
                    </div>
                    <div class="software-content">
                        <h3>TeamSync Pro</h3>
                        <div class="software-tags">
                            <span class="tag">Project Management</span>
                            <span class="tag">Collaboration</span>
                            <span class="tag">Task Tracking</span>
                        </div>
                        <p>Collaboration platform that helps teams organize projects, track tasks, and communicate effectively in real-time.</p>
                    </div>
                </div>

                <!-- Software Card 4 -->
                <div class="software-card">
                    <div class="software-img">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="software-content">
                        <h3>SecureVault Enterprise</h3>
                        <div class="software-tags">
                            <span class="tag">Cybersecurity</span>
                            <span class="tag">Data Protection</span>
                            <span class="tag">Encryption</span>
                        </div>
                        <p>Enterprise-grade security software with advanced encryption, threat detection, and compliance management features.</p>
                    </div>
                </div>

                <!-- Software Card 5 -->
                <div class="software-card">
                    <div class="software-img">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <div class="software-content">
                        <h3>HealthTrack Mobile</h3>
                        <div class="software-tags">
                            <span class="tag">Healthcare</span>
                            <span class="tag">Mobile App</span>
                            <span class="tag">Wellness</span>
                        </div>
                        <p>Health and wellness tracking application with personalized recommendations, medication reminders, and telehealth features.</p>
                    </div>
                </div>

                <!-- Software Card 6 -->
                <div class="software-card">
                    <div class="software-img">
                        <i class="fas fa-robot"></i>
                    </div>
                    <div class="software-content">
                        <h3>AutoBot AI</h3>
                        <div class="software-tags">
                            <span class="tag">AI Automation</span>
                            <span class="tag">Machine Learning</span>
                            <span class="tag">Workflow</span>
                        </div>
                        <p>AI-powered automation platform that streamlines business processes with intelligent workflow automation and predictive analytics.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features" id="features">
        <div class="container">
            <div class="section-title">
                <h2>Why Choose Our Software</h2>
            </div>
            <div class="feature-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3>Customizable</h3>
                    <p>Tailor every aspect of our software to fit your specific business needs and workflows.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Secure & Reliable</h3>
                    <p>Enterprise-grade security with 99.9% uptime guarantee and regular security updates.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-sync-alt"></i>
                    </div>
                    <h3>Regular Updates</h3>
                    <p>Continuous improvement with regular feature updates based on user feedback.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3>24/7 Support</h3>
                    <p>Round-the-clock customer support with dedicated account managers for enterprise clients.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Development Process Section -->
    <section class="process" id="process">
        <div class="container">
            <div class="section-title">
                <h2>Our Development Process</h2>
            </div>
            <div class="process-steps">
                <div class="step">
                    <div class="step-number">1</div>
                    <h3>Discovery & Planning</h3>
                    <p>We analyze your requirements and create a detailed project plan with timelines and milestones.</p>
                </div>
                <div class="step">
                    <div class="step-number">2</div>
                    <h3>Design & Prototyping</h3>
                    <p>Our designers create intuitive user interfaces and interactive prototypes for your approval.</p>
                </div>
                <div class="step">
                    <div class="step-number">3</div>
                    <h3>Development</h3>
                    <p>Our developers build your software using agile methodologies with regular progress updates.</p>
                </div>
                <div class="step">
                    <div class="step-number">4</div>
                    <h3>Testing & Deployment</h3>
                    <p>Rigorous testing ensures quality before deployment and ongoing maintenance.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact" id="contact">
        <div class="container">
            <div class="section-title">
                <h2>Get In Touch</h2>
            </div>
            <div class="contact-container">
                <div class="contact-info">
                    <h3>Let's Create Something Amazing</h3>
                    <p>Ready to transform your business with custom software solutions? Contact us today for a free consultation.</p>
                    <div class="contact-details">
                        <div class="contact-detail">
                            <i class="fas fa-map-marker-alt"></i>
                            <p>123 Tech Street, Silicon Valley, CA 94000</p>
                        </div>
                        <div class="contact-detail">
                            <i class="fas fa-phone"></i>
                            <p>+1 (555) 123-4567</p>
                        </div>
                        <div class="contact-detail">
                            <i class="fas fa-envelope"></i>
                            <p>info@codeforge.com</p>
                        </div>
                    </div>
                </div>
                <div class="contact-form">
                    <form id="contactForm">
                        <input type="text" placeholder="Your Name" required>
                        <input type="email" placeholder="Your Email" required>
                        <input type="text" placeholder="Subject" required>
                        <textarea rows="5" placeholder="Your Message" required></textarea>
                        <button type="submit" class="cta-button">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h4>CodeForge</h4>
                    <p>Creating innovative software solutions for businesses worldwide since 2010. We specialize in custom software development across multiple industries.</p>
                </div>
                <div class="footer-column">
                    <h4>Quick Links</h4>
                    <ul class="footer-links">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#software">Software</a></li>
                        <li><a href="#features">Features</a></li>
                        <li><a href="#process">Process</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h4>Software Products</h4>
                    <ul class="footer-links">
                        <li><a href="#">Analytix Pro</a></li>
                        <li><a href="#">CommerceFlow</a></li>
                        <li><a href="#">TeamSync Pro</a></li>
                        <li><a href="#">SecureVault</a></li>
                        <li><a href="#">HealthTrack</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h4>Connect With Us</h4>
                    <div class="social-links">
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-github"></i></a>
                    </div>
                    <p>Subscribe to our newsletter for updates</p>
                    <input type="email" placeholder="Your Email" style="width: 100%; padding: 0.5rem; margin-top: 0.5rem; border-radius: 5px; border: none;">
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2023 CodeForge Software Solutions. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile Navigation Toggle
        document.querySelector('.mobile-toggle').addEventListener('click', function() {
            document.querySelector('.nav-links').classList.toggle('active');
            this.querySelector('i').classList.toggle('fa-bars');
            this.querySelector('i').classList.toggle('fa-times');
        });

        // Close mobile menu when clicking on a link
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', () => {
                document.querySelector('.nav-links').classList.remove('active');
                document.querySelector('.mobile-toggle i').classList.remove('fa-times');
                document.querySelector('.mobile-toggle i').classList.add('fa-bars');
            });
        });

        // Form submission
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Thank you for your message! We will get back to you soon.');
            this.reset();
        });

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if(targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if(targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 70,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Add scroll effect to header
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            if (window.scrollY > 100) {
                header.style.boxShadow = '0 5px 20px rgba(0, 0, 0, 0.1)';
            } else {
                header.style.boxShadow = '0 5px 15px rgba(0, 0, 0, 0.1)';
            }
        });
    </script>
</body>
</html>