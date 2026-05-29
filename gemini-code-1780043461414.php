<?php
$message_status = "";

// Handle Form Submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = strip_tags(trim($_POST["name"]));
    $phone = strip_tags(trim($_POST["phone"]));
    $date = strip_tags(trim($_POST["date"]));
    $treatment = strip_tags(trim($_POST["treatment"]));
    $msg = strip_tags(trim($_POST["message"]));

    // Replace with your actual clinic email address
    $to = "appointment@milestonedentalcare.com"; 
    $subject = "New Appointment Request - Milestone Dental Care";
    
    $email_content = "Name: $name\n";
    $email_content .= "Phone: $phone\n";
    $email_content .= "Preferred Date: $date\n";
    $email_content .= "Treatment: $treatment\n\n";
    $email_content .= "Message:\n$msg\n";
    
    $email_headers = "From: webmaster@milestonedentalcare.com";

    if (!empty($name) && !empty($phone)) {
        // In a real cPanel environment, mail() will send the notification
        @mail($to, $subject, $email_content, $email_headers);
        $message_status = "success";
    } else {
        $message_status = "error";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best Dentist in Siliguri | Milestone Dental Care Siliguri</title>
    <meta name="description" content="Milestone Dental Care Siliguri offers trusted dental checkups, root canal, implants, teeth cleaning and advanced dental treatments by Dr. Shraddha Tripathi.">
    
    <!-- Google Fonts & FontAwesome -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --primary: #00a8cc;
            --primary-dark: #007fa2;
            --secondary: #0c2461;
            --text-dark: #2c3e50;
            --text-light: #7f8c8d;
            --bg-light: #f4f9f9;
            --white: #ffffff;
            --shadow: 0 10px 30px rgba(0,0,0,0.05);
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
            scroll-behavior: smooth;
        }

        body {
            color: var(--text-dark);
            background-color: var(--white);
            line-height: 1.6;
        }

        /* Header & Navigation */
        header {
            background: var(--white);
            box-shadow: var(--shadow);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 20px;
        }

        .logo h1 {
            font-size: 22px;
            color: var(--secondary);
            font-weight: 700;
        }
        .logo span {
            color: var(--primary);
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 25px;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--text-dark);
            font-weight: 500;
            transition: var(--transition);
        }

        .nav-links a:hover {
            color: var(--primary);
        }

        .nav-btn {
            background: var(--primary);
            color: var(--white) !important;
            padding: 8px 20px;
            border-radius: 30px;
        }

        .nav-btn:hover {
            background: var(--secondary);
        }

        .menu-toggle {
            display: none;
            font-size: 24px;
            cursor: pointer;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, #f0f8ff 0%, #e6f7ff 100%);
            padding: 100px 20px;
            position: relative;
            overflow: hidden;
        }

        .hero-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            align-items: center;
            gap: 40px;
        }

        .hero-badge {
            background: rgba(0, 168, 204, 0.1);
            color: var(--primary);
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 600;
            display: inline-block;
            margin-bottom: 15px;
        }

        .hero h2 {
            font-size: 45px;
            color: var(--secondary);
            line-height: 1.2;
            margin-bottom: 15px;
        }

        .hero p {
            font-size: 18px;
            color: var(--text-light);
            margin-bottom: 30px;
        }

        .hero-buttons {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
            margin-bottom: 30px;
        }

        .btn {
            padding: 12px 25px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            transition: var(--transition);
            border: none;
            cursor: pointer;
        }

        .btn-primary { background: var(--primary); color: var(--white); }
        .btn-primary:hover { background: var(--primary-dark); }
        .btn-call { background: #27ae60; color: var(--white); }
        .btn-whatsapp { background: #25d366; color: var(--white); }

        .rating-box {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .stars { color: #f1c40f; }

        .hero-image {
            position: relative;
            text-align: center;
        }

        /* SVG placeholder representing a high-end dynamic aesthetic medical illustration */
        .hero-image svg {
            width: 100%;
            max-width: 480px;
            height: auto;
            filter: drop-shadow(0 20px 40px rgba(0,0,0,0.1));
        }

        /* Global Section Layout */
        section {
            padding: 80px 20px;
        }

        .section-title {
            text-align: center;
            max-width: 700px;
            margin: 0 auto 50px auto;
        }

        .section-title h2 {
            font-size: 32px;
            color: var(--secondary);
            margin-bottom: 10px;
        }

        .section-title p {
            color: var(--text-light);
        }

        /* About Section */
        .about {
            background: var(--white);
        }

        .about-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            align-items: center;
        }

        .about-content h3 {
            color: var(--primary);
            font-size: 20px;
            margin-bottom: 10px;
        }

        .about-content h4 {
            font-size: 28px;
            color: var(--secondary);
            margin-bottom: 1ccd5px;
        }

        .about-features {
            margin-top: 25px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        .about-features div {
            display: flex;
            align-items: center;
            gap: 10px;
            font-weight: 500;
        }

        .about-features i {
            color: var(--primary);
        }

        /* Services Section */
        .services {
            background: var(--bg-light);
        }

        .services-grid {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
        }

        .service-card {
            background: var(--white);
            padding: 30px;
            border-radius: 15px;
            box-shadow: var(--shadow);
            transition: var(--transition);
            border-bottom: 4px solid transparent;
        }

        .service-card:hover {
            transform: translateY(-5px);
            border-color: var(--primary);
        }

        .service-icon {
            width: 60px;
            height: 60px;
            background: rgba(0, 168, 204, 0.1);
            color: var(--primary);
            border-radius: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .service-card h3 {
            font-size: 20px;
            color: var(--secondary);
            margin-bottom: 10px;
        }

        .service-card p {
            color: var(--text-light);
            font-size: 14px;
        }

        /* Why Choose Us */
        .why-choose {
            background: var(--white);
        }

        .why-grid {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 25px;
        }

        .why-card {
            text-align: center;
            padding: 20px;
        }

        .why-card i {
            font-size: 40px;
            color: var(--primary);
            margin-bottom: 15px;
        }

        .why-card h3 {
            font-size: 18px;
            color: var(--secondary);
            margin-bottom: 10px;
        }

        /* Reviews */
        .reviews {
            background: var(--bg-light);
        }

        .reviews-grid {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
        }

        .review-card {
            background: var(--white);
            padding: 30px;
            border-radius: 15px;
            box-shadow: var(--shadow);
        }

        .review-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
        }

        .client-info h4 { color: var(--secondary); }
        .client-info span { font-size: 12px; color: var(--text-light); }

        /* Gallery */
        .gallery-grid {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 15px;
        }

        .gallery-item {
            border-radius: 10px;
            overflow: hidden;
            height: 220px;
            background: #ddd;
            position: relative;
        }

        .gallery-item svg {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Contact & Appointment Section */
        .contact-section {
            background: var(--bg-light);
        }

        .contact-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
        }

        .booking-box, .info-box {
            background: var(--white);
            padding: 40px;
            border-radius: 15px;
            box-shadow: var(--shadow);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: 500;
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 15px;
            outline: none;
        }

        .form-control:focus {
            border-color: var(--primary);
        }

        .info-details {
            margin-top: 20px;
        }

        .info-item {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
            align-items: center;
        }

        .info-item i {
            width: 40px;
            height: 40px;
            background: rgba(0, 168, 204, 0.1);
            color: var(--primary);
            border-radius: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .map-container {
            margin-top: 20px;
            border-radius: 10px;
            overflow: hidden;
            height: 230px;
        }

        /* Status Alerts */
        .alert {
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-weight: 500;
        }
        .alert-success { background: #d4edda; color: #155724; }
        .alert-error { background: #f8d7da; color: #721c24; }

        /* Footer */
        footer {
            background: var(--secondary);
            color: var(--white);
            padding: 60px 20px 20px 20px;
        }

        .footer-grid {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr;
            gap: 40px;
            padding-bottom: 40px;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }

        .footer-col h3 { margin-bottom: 20px; font-size: 18px; }
        .footer-col ul { list-style: none; }
        .footer-col ul li { margin-bottom: 10px; }
        .footer-col ul li a { color: #a4b0be; text-decoration: none; transition: var(--transition); }
        .footer-col ul li a:hover { color: var(--primary); }
        .footer-bottom { text-align: center; padding-top: 20px; font-size: 14px; color: #a4b0be; }

        /* Floating Action Buttons */
        .floating-buttons {
            position: fixed;
            bottom: 30px;
            right: 30px;
            display: flex;
            flex-direction: column;
            gap: 15px;
            z-index: 9999;
        }

        .float-btn {
            width: 55px;
            height: 55px;
            border-radius: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 24px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
            text-decoration: none;
            transition: var(--transition);
        }

        .float-btn:hover { transform: scale(1.1); }
        .float-wp { background: #25d366; }
        .float-call { background: #27ae60; }

        /* Responsive Design */
        @media (max-width: 992px) {
            .hero-container, .about-container, .contact-container {
                grid-template-columns: 1fr;
            }
            .hero-image { order: -1; }
            .footer-grid { grid-template-columns: 1fr 1fr; }
        }

        @media (max-width: 768px) {
            .nav-links {
                display: none;
                flex-direction: column;
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                background: var(--white);
                padding: 20px;
                box-shadow: var(--shadow);
            }
            .nav-links.active { display: flex; }
            .menu-toggle { display: block; }
            .hero h2 { font-size: 32px; }
            .footer-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>

    <!-- Header Navigation -->
    <header>
        <div class="nav-container">
            <div class="logo"><h1>Milestone <span>Dental Care</span></h1></div>
            <i class="fa-solid fa-bars menu-toggle" id="menuToggle"></i>
            <ul class="nav-links" id="navLinks">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#why-choose">Why Choose Us</a></li>
                <li><a href="#contact" class="nav-btn">Book Appointment</a></li>
            </ul>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-container">
            <div class="hero-text">
                <span class="hero-badge"><i class="fa-solid fa-star"></i> Top Rated Clinic in Siliguri</span>
                <h2>Milestone Dental Care Siliguri</h2>
                <p>Trusted Dental Care in Siliguri. Experience premium, pain-free dental treatments managed by <strong>Dr. Shraddha Tripathi</strong> using standard hygienic practices.</p>
                <div class="hero-buttons">
                    <a href="#contact" class="btn btn-primary"><i class="fa-regular fa-calendar-check"></i> Book Appointment</a>
                    <a href="tel:+918515093450" class="btn btn-call"><i class="fa-solid fa-phone"></i> Call Now</a>
                    <a href="https://wa.me/918515093450" target="_blank" class="btn btn-whatsapp"><i class="fa-brands fa-whatsapp"></i> WhatsApp Now</a>
                </div>
                <div class="rating-box">
                    <strong>4.8</strong>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <span>(250+ Patient Reviews)</span>
                </div>
            </div>
            <div class="hero-image">
                <!-- Modern Minimal Premium SVG Illustration for Faster Loading & Crisp Look -->
                <svg viewBox="0 0 500 400" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="250" cy="200" r="180" fill="#e6f7ff"/>
                    <path d="M200 280 C200 160, 300 160, 300 280 Z" fill="#ffffff" stroke="#00a8cc" stroke-width="8"/>
                    <path d="M220 280 C220 200, 280 200, 280 280 Z" fill="#ffffff" stroke="#0c2461" stroke-width="4"/>
                    <circle cx="210" cy="140" r="15" fill="#00a8cc"/>
                    <circle cx="290" cy="110" r="25" fill="#0c2461" opacity="0.8"/>
                    <circle cx="150" cy="220" r="8" fill="#00a8cc"/>
                    <path d="M180 180 Q250 130 320 180" stroke="#00a8cc" stroke-width="4" fill="none" stroke-dasharray="5 5"/>
                </svg>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about" id="about">
        <div class="about-container">
            <div class="about-image">
                <svg viewBox="0 0 400 350" xmlns="http://www.w3.org/2000/svg">
                    <rect width="100%" height="100%" rx="15" fill="#f4f9f9"/>
                    <circle cx="200" cy="175" r="80" fill="#00a8cc" opacity="0.2"/>
                    <path d="M160 175 L190 205 L250 145" stroke="#00a8cc" stroke-width="12" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                </svg>
            </div>
            <div class="about-content">
                <h3>Welcome to Our Clinic</h3>
                <h4>Dr. Shraddha Tripathi</h4>
                <p>At Milestone Dental Care Siliguri, we prioritize your oral ecosystem. Our dental practice provides customized treatment strategies matching worldwide sterilization and medical metrics. From diagnostics to complex cosmetic corrections, your comfort remains our highest focus.</p>
                <div class="about-features">
                    <div><i class="fa-solid fa-circle-check"></i> Strict Sterilization</div>
                    <div><i class="fa-solid fa-circle-check"></i> Advanced Technology</div>
                    <div><i class="fa-solid fa-circle-check"></i> Patient-First Comfort</div>
                    <div><i class="fa-solid fa-circle-check"></i> Certified Experts</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services" id="services">
        <div class="section-title">
            <h2>Our Dental Services</h2>
            <p>Comprehensive oral healthcare engineered for lasting, beautiful smiles.</p>
        </div>
        <div class="services-grid">
            <!-- Service Cards -->
            <div class="service-card">
                <div class="service-icon"><i class="fa-solid fa-stethoscope"></i></div>
                <h3>Dental Checkup</h3>
                <p>Comprehensive oral evaluations and digital diagnostic testing for preventive wellness.</p>
            </div>
            <div class="service-card">
                <div class="service-icon"><i class="fa-solid fa-tooth"></i></div>
                <h3>Root Canal Treatment</h3>
                <p>Precise, near-painless therapeutic measures designed to protect structural natural teeth.</p>
            </div>
            <div class="service-card">
                <div class="service-icon"><i class="fa-solid fa-sparkles"></i></div>
                <h3>Teeth Cleaning</h3>
                <p>Advanced scale and polish workflows optimizing subgingival health parameters.</p>
            </div>
            <div class="service-card">
                <div class="service-icon"><i class="fa-solid fa-clipping-path"></i></div>
                <h3>Tooth Extraction</h3>
                <p>Safe, stress-free outpatient procedural care targeting compromised structures.</p>
            </div>
            <div class="service-card">
                <div class="service-icon"><i class="fa-solid fa-fill-drip"></i></div>
                <h3>Dental Fillings</h3>
                <p>Resilient biocompatible restorations tailored seamlessly to structural contours.</p>
            </div>
            <div class="service-card">
                <div class="service-icon"><i class="fa-solid fa-cubes"></i></div>
                <h3>Dental Implants</h3>
                <p>Premium titanium roots offering life-long functional structural reliability.</p>
            </div>
            <div class="service-card">
                <div class="service-icon"><i class="fa-solid fa-grip-lines-vertical"></i></div>
                <h3>Braces</h3>
                <p>Modern corrective alignments tailored meticulously for patients across all age brackets.</p>
            </div>
            <div class="service-card">
                <div class="service-icon"><i class="fa-solid fa-wand-magic-sparkles"></i></div>
                <h3>Smile Designing</h3>
                <p>Aesthetic redesigns configured structurally to highlight confident visual profiles.</p>
            </div>
            <div class="service-card">
                <div class="service-icon"><i class="fa-solid fa-face-smile"></i></div>
                <h3>Cosmetic Dentistry</h3>
                <p>Minimally invasive visual revisions maximizing standard tooth shade radiance.</p>
            </div>
            <div class="service-card">
                <div class="service-icon"><i class="fa-solid fa-child"></i></div>
                <h3>Kids Dental Care</h3>
                <p>Gentle and playful diagnostic workflows tailored for pediatric patient care.</p>
            </div>
            <div class="service-card">
                <div class="service-icon"><i class="fa-solid fa-shield-heart"></i></div>
                <h3>Gum Treatment</h3>
                <p>Therapeutic routines specialized to correct and bolster soft tissue foundations.</p>
            </div>
            <div class="service-card">
                <div class="service-icon"><i class="fa-solid fa-kit-medical"></i></div>
                <h3>Emergency Care</h3>
                <p>Rapid pain relief and surgical management for sudden oral crises.</p>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="why-choose" id="why-choose">
        <div class="section-title">
            <h2>Why Choose Milestone Dental Care</h2>
            <p>Setting precision operational milestones in patient comfort, treatment, and hygiene standards.</p>
        </div>
        <div class="why-grid">
            <div class="why-card">
                <i class="fa-solid fa-user-doctor"></i>
                <h3>Experienced Doctor</h3>
                <p>Managed directly by Dr. Shraddha Tripathi providing tailored modern clinical experience.</p>
            </div>
            <div class="why-card">
                <i class="fa-solid fa-microscope"></i>
                <h3>Modern Technology</h3>
                <p>Equipped with state-of-the-art diagnostic imaging and procedural tools.</p>
            </div>
            <div class="why-card">
                <i class="fa-solid fa-hand-holding-dollar"></i>
                <h3>Affordable Care</h3>
                <p>Transparent pricing frameworks with focus placed on procedural value.</p>
            </div>
            <div class="why-card">
                <i class="fa-solid fa-pump-medical"></i>
                <h3>Hygienic Clinic</h3>
                <p>Sterilization processes meeting elite cross-contamination prevention guidelines.</p>
            </div>
        </div>
    </section>

    <!-- Patient Reviews Section -->
    <section class="reviews">
        <div class="section-title">
            <h2>Patient Testimonials</h2>
            <p>Read true feedback outlining our clinical dedication toward gentle oral transformations.</p>
        </div>
        <div class="reviews-grid">
            <div class="review-card">
                <div class="review-header">
                    <div class="client-info">
                        <h4>Amit Sharma</h4>
                        <span>Siliguri Resident</span>
                    </div>
                    <div class="stars"><i class="fa-solid fa-star"></i> 5.0</div>
                </div>
                <p>"Dr. Shraddha Tripathi is phenomenal. The root canal treatment was completely painless, and the clinic's hygiene standards are world-class."</p>
            </div>
            <div class="review-card">
                <div class="review-header">
                    <div class="client-info">
                        <h4>Priya Banerjee</h4>
                        <span>Patient</span>
                    </div>
                    <div class="stars"><i class="fa-solid fa-star"></i> 5.0</div>
                </div>
                <p>"The best dental experience in Siliguri. Everything was explained clearly before my smile designing procedure. Highly recommended!"</p>
            </div>
            <div class="review-card">
                <div class="review-header">
                    <div class="client-info">
                        <h4>Rajesh Chettri</h4>
                        <span>Patient</span>
                    </div>
                    <div class="stars"><i class="fa-solid fa-star"></i> 5.0</div>
                </div>
                <p>"Clean environment, state-of-the-art machinery, and helpful staff. Scaling and polishing was done quickly with extreme precision."</p>
            </div>
        </div>
    </section>

    <!-- Clinic Gallery Section -->
    <section class="gallery">
        <div class="section-title">
            <h2>Clinic Gallery</h2>
            <p>Take a virtual look inside our pristine and welcoming operational infrastructure.</p>
        </div>
        <div class="gallery-grid">
            <div class="gallery-item">
                <svg viewBox="0 0 300 200" xmlns="http://www.w3.org/2000/svg"><rect width="100%" height="100%" fill="#e6f7ff"/><text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" fill="#00a8cc">Premium Consultation Suite</text></svg>
            </div>
            <div class="gallery-item">
                <svg viewBox="0 0 300 200" xmlns="http://www.w3.org/2000/svg"><rect width="100%" height="100%" fill="#e6f7ff"/><text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" fill="#00a8cc">Sterile Operatory Lounge</text></svg>
            </div>
            <div class="gallery-item">
                <svg viewBox="0 0 300 200" xmlns="http://www.w3.org/2000/svg"><rect width="100%" height="100%" fill="#e6f7ff"/><text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" fill="#00a8cc">Advanced Diagnostic Setup</text></svg>
            </div>
            <div class="gallery-item">
                <svg viewBox="0 0 300 200" xmlns="http://www.w3.org/2000/svg"><rect width="100%" height="100%" fill="#e6f7ff"/><text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" fill="#00a8cc">Comforting Reception Lounge</text></svg>
            </div>
        </div>
    </section>

    <!-- Contact & Booking Section -->
    <section class="contact-section" id="contact">
        <div class="contact-container">
            <div class="booking-box">
                <h3>Request an Appointment</h3>
                <br>
                <?php if($message_status == "success"): ?>
                    <div class="alert alert-success">Thank you! Your appointment request has been submitted successfully.</div>
                <?php elseif($message_status == "error"): ?>
                    <div class="alert alert-error">Please fill in all mandatory fields accurately.</div>
                <?php endif; ?>

                <form action="index.php#contact" method="POST">
                    <div class="form-group">
                        <label>Full Name *</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter full name" required>
                    </div>
                    <div class="form-group">
                        <label>Phone Number *</label>
                        <input type="tel" name="phone" class="form-control" placeholder="Enter active contact number" required>
                    </div>
                    <div class="form-group">
                        <label>Preferred Date</label>
                        <input type="date" name="date" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Treatment Required</label>
                        <select name="treatment" class="form-control">
                            <option value="General Checkup">Dental Checkup</option>
                            <option value="Root Canal">Root Canal Treatment</option>
                            <option value="Teeth Cleaning">Teeth Cleaning</option>
                            <option value="Dental Implants">Dental Implants</option>
                            <option value="Aesthetic Smile Designing">Smile Designing</option>
                            <option value="Other">Other Evaluation</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Message/Notes</label>
                        <textarea name="message" class="form-control" rows="4" placeholder="Mention any specific oral dental concerns..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" style="width: 100%; justify-content: center;">Submit Request</button>
                </form>
            </div>

            <div class="info-box">
                <h3>Contact Information</h3>
                <div class="info-details">
                    <div class="info-item">
                        <i class="fa-solid fa-location-dot"></i>
                        <div>
                            <h4>Location</h4>
                            <p>Milestone Dental Care Siliguri, Siliguri, West Bengal</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fa-solid fa-phone"></i>
                        <div>
                            <h4>Phone Now</h4>
                            <p>+91 85150 93450</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fa-brands fa-whatsapp"></i>
                        <div>
                            <h4>WhatsApp</h4>
                            <p>+91 85150 93450</p>
                        </div>
                    </div>
                </div>

                <!-- Fully Responsive Leaflet Map Embed Integration -->
                <div class="map-container">
                    <iframe src="https://maps.google.com/maps?q=Siliguri,West%20Bengal&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-grid">
            <div class="footer-col">
                <h3>Milestone Dental Care</h3>
                <p style="color: #a4b0be; margin-top: 10px;">Premium healthcare frameworks designed perfectly to resolve dental problems under Dr. Shraddha Tripathi in Siliguri.</p>
            </div>
            <div class="footer-col">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#contact">Book Consultation</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h3>Popular Services</h3>
                <ul>
                    <li><a href="#services">Root Canal Care</a></li>
                    <li><a href="#services">Teeth Cleaning</a></li>
                    <li><a href="#services">Dental Implants</a></li>
                    <li><a href="#services">Smile Designing</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h3>Our Address</h3>
                <p style="color: #a4b0be;">Siliguri, West Bengal<br>Phone: +91 85150 93450</p>
            </div>
        </div>
        <div class="footer-bottom">
            &copy; <?php echo date("Y"); ?> Milestone Dental Care Siliguri. All Rights Reserved.
        </div>
    </footer>

    <!-- Floating Quick Actions Mobile Sticky Stack -->
    <div class="floating-buttons">
        <a href="https://wa.me/918515093450" target="_blank" class="float-btn float-wp" aria-label="WhatsApp Us Now"><i class="fa-brands fa-whatsapp"></i></a>
        <a href="tel:+918515093450" class="float-btn float-call" aria-label="Call Us Now"><i class="fa-solid fa-phone"></i></a>
    </div>

    <!-- Mobile Navigation Toggle Script -->
    <script>
        const menuToggle = document.getElementById('menuToggle');
        const navLinks = document.getElementById('navLinks');

        menuToggle.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });

        // Close navbar menu when any internal fast link is tapped
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', () => {
                navLinks.classList.remove('active');
            });
        });
    </script>
</body>
</html>