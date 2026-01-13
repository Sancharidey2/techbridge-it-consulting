<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>TechBridge</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <!-- FAVICON -->
  <link rel="icon" type="image/png" href="logo.png">

  <!-- GOOGLE FONT -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- CUSTOM CSS -->
  <link rel="stylesheet" href="style.css?v=10">
</head>
<body>

<!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
     <div class="container">
       <a class="navbar-brand fw-bold" href="#">TechBridge</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
           <span class="navbar-toggler-icon"></span>
           </button>
            <div class="collapse navbar-collapse" id="mainNavbar">
               <ul class="navbar-nav ms-auto align-items-lg-center">
                 <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                  <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                   <li class="nav-item"><a class="nav-link" href="#jobs">Jobs</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                     <li class="nav-item ms-lg-4"> <a class="btn btn-outline-light px-4" href="#contact">Hire Talent</a>
                     </li>
                    </ul>
                  </div>
                 </div>
                </nav>

<!-- HERO -->
<section class="hero">
  <div class="hero-content container">
    <span class="hero-badge">IT Consulting & Staffing</span>

    <h1 class="hero-title">
      Building Strong IT Teams<br>
      for Growing Businesses
    </h1>

    <p class="hero-subtitle">
      We help companies hire skilled developers, engineers,
      and IT professionals with reliable staffing solutions.
    </p>

    <div class="hero-actions">
      <a href="#contact" class="btn btn-primary me-3">Build Your Team</a>
      <a href="#services" class="btn btn-outline-light">Our Services</a>
    </div>
  </div>
</section>

<!-- SERVICES -->
<section id="services" class="section services-bg">
  <div class="container">
    <h2 class="section-title">Our Services</h2>

    <p class="text-center text-muted mb-5">
      We provide end-to-end IT staffing and consulting solutions to help
      businesses build reliable and scalable tech teams.
    </p>

    <div class="row g-4">

      <!-- IT Staffing -->
      <div class="col-md-4">
        <div class="service-card h-100 text-center">
          <img src="staffing.png.webp" alt="IT Staffing" class="service-img">
          <h5>IT Staffing</h5>
          <p>Flexible hiring models to meet your business needs.</p>
          <ul class="service-list">
            <li>Contract Staffing</li>
            <li>Permanent Hiring</li>
            <li>Remote Developers</li>
          </ul>
        </div>
      </div>

      <!-- IT Consulting -->
      <div class="col-md-4">
        <div class="service-card h-100 text-center">
          <img src="consulting.png.jpg" alt="IT Consulting" class="service-img">
          <h5>IT Consulting</h5>
          <p>Expert guidance to make the right technology decisions.</p>
          <ul class="service-list">
            <li>Technology Strategy</li>
            <li>System Architecture</li>
            <li>Process Optimization</li>
          </ul>
        </div>
      </div>

      <!-- Candidate Screening -->
      <div class="col-md-4">
        <div class="service-card h-100 text-center">
          <img src="screening.png.webp" alt="Candidate Screening" class="service-img">
          <h5>Candidate Screening</h5>
          <p>We ensure only skilled and verified professionals.</p>
          <ul class="service-list">
            <li>Technical Interviews</li>
            <li>Skill Verification</li>
            <li>Background Checks</li>
          </ul>
        </div>
      </div>

    </div>

    <div class="text-center mt-5">
      <a href="#contact" class="btn btn-primary px-4">
        Talk to Our Experts
      </a>
    </div>
  </div>
</section>


<!-- jobs -->
<section id="jobs" class="section bg-light">
  <div class="container">
    <h2 class="section-title">Open Positions</h2>

    <div class="row g-4">

      <!-- Job Card -->
      <div class="col-md-4">
        <div class="job-card">
          <span class="job-badge">Remote</span>
          <h5>Frontend Developer</h5>
          <p class="job-meta">2–4 Years · React / JS</p>
          <a href="#contact" class="btn btn-sm btn-primary">
            Apply Now
          </a>
        </div>
      </div>

      <div class="col-md-4">
        <div class="job-card">
          <span class="job-badge">Full-time</span>
          <h5>Backend Developer</h5>
          <p class="job-meta">3–5 Years · PHP / MySQL</p>
          <a href="#contact" class="btn btn-sm btn-primary">
            Apply Now
          </a>
        </div>
      </div>

      <div class="col-md-4">
        <div class="job-card">
          <span class="job-badge">Hybrid</span>
          <h5>DevOps Engineer</h5>
          <p class="job-meta">3+ Years · AWS / CI-CD</p>
          <a href="#contact" class="btn btn-sm btn-primary">
            Apply Now
          </a>
        </div>
      </div>

      <div class="col-md-4">
        <div class="job-card">
          <span class="job-badge">on-site</span>
          <h5>Data Analyst</h5>
          <p class="job-meta">1+ Years · SQL / Power BI</p>
          <a href="#contact" class="btn btn-sm btn-primary">
            Apply Now
          </a>
        </div>
      </div>

      <div class="col-md-4">
        <div class="job-card">
          <span class="job-badge">on-site</span>
          <h5>Full Stack</h5>
          <p class="job-meta">3+ Years · JS / Python / NOSQL</p>
          <a href="#contact" class="btn btn-sm btn-primary">
            Apply Now
          </a>
        </div>
      </div>
        <div class="col-md-4">
        <div class="job-card">
          <span class="job-badge">on-site</span>
          <h5>Graphic Design</h5>
          <p class="job-meta">2+ Years · FIGMA / Adobe Illustrator</p>
          <a href="#contact" class="btn btn-sm btn-primary">
            Apply Now
          </a>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- WHY CHOOSE US -->
<section class="section why-section">
  <div class="container">
    <h2 class="section-title">Why Choose TechBridge</h2>
    

    <div class="row g-4 mt-4">

      <div class="col-md-3">
        <div class="why-box">
          <h6>Skilled Talent Pool</h6>
          <p>
            Access to a curated pool of pre-screened developers and IT professionals
            with hands-on experience across modern technologies.
          </p>
        </div>
      </div>

      <div class="col-md-3">
        <div class="why-box">
          <h6>Fast Hiring Process</h6>
          <p>
            Optimized recruitment workflows that help reduce hiring timelines
            while maintaining quality and reliability.
          </p>
        </div>
      </div>

      <div class="col-md-3">
        <div class="why-box">
          <h6>Quality Screening</h6>
          <p>
            Every candidate goes through technical evaluation and background
            checks to ensure dependable hiring decisions.
          </p>
        </div>
      </div>

      <div class="col-md-3">
        <div class="why-box">
          <h6>Long-Term Support</h6>
          <p>
            Continuous engagement and support even after onboarding
            to ensure long-term success for both clients and candidates.
          </p>
        </div>
      </div>

    </div>
  </div>
</section>



<!-- CONTACT -->
<section id="contact" class="section contact-bg">
  <div class="container">
    <h2 class="section-title">Get in Touch</h2>

    <p class="text-center text-muted mb-5">
      Let’s discuss how we can help you build strong, reliable IT teams.
    </p>

    <form action="contact.php" method="post" class="contact-form mx-auto">

      <input type="text" name="name" class="form-control mb-3"
        placeholder="Your Full Name" required>

      <input type="email" name="email" class="form-control mb-3"
        placeholder="Your Email Address" required>
      
      <select name="user_type" id="userType" class="form-control mb-3" required>
     <option value="">I am a...</option>
     <option value="recruiter">Recruiter / Hiring Manager</option>
     <option value="job_seeker">Job Seeker</option>
      </select>


      <textarea name="message" class="form-control mb-4" rows="4"
        placeholder="Tell us about your requirement" required></textarea>

      <button type="submit" class="btn btn-primary w-100">
        Submit Request
      </button>

    </form>
  </div>
</section>


<footer class="footer">
  <div class="container">
    <div class="row gy-4">

      <div class="col-md-4">
        <h6 class="footer-title">TechBridge</h6>
        <p class="footer-text">
          We help companies build high-performing IT teams through
          expert staffing and consulting solutions.
        </p>
      </div>

      <div class="col-md-4">
        <h6 class="footer-title">Quick Links</h6>
        <ul class="footer-links">
          <li><a href="#services">Services</a></li>
          <li><a href="#jobs">Open Positions</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>

      <div class="col-md-4">
        <h6 class="footer-title">Contact</h6>
        <p class="footer-text">
          📧 contact@techbridge.com<br>
          📞 +91 98765 43210<br>
          📍 Bengaluru, India
        </p>
      </div>

    </div>

    <hr class="footer-line">

    <p class="footer-bottom text-center">
      © 2025 TechBridge. All rights reserved.
    </p>
  </div>
</footer>


</body>
</html>
