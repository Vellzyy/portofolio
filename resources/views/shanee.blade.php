<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>My Portfolio</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { font-family: Arial, sans-serif; scroll-behavior: smooth; }
    .sidebar { background: #0c99dfff; min-height: 100vh; padding: 20px; position: fixed; top:0; left:0; width: 220px; }
    .sidebar a { display: block; margin: 15px 0; color: #000; font-weight: bold; text-decoration: none; }
    .sidebar a:hover { color: #fff; }
    .content { margin-left: 240px; padding: 40px; }
    section { padding: 60px 0; border-bottom: 1px solid #ddd; }
    .section-title { font-size: 32px; font-weight: bold; margin-bottom: 20px; }
  </style>
</head>
<body>
  <div class="sidebar">
    <div class="text-center mb-4">
      <img src="https://via.placeholder.com/100" class="rounded-circle" alt="Profile">
      <h5 class="mt-2">Shane</h5>
    </div>
    <a href="#home">Home</a>
    <a href="#about">About Me</a>
    <a href="#resume">Resume</a>
    <a href="#portfolio">Portfolio</a>
    <a href="#testimonials">Testimonials</a>
    <a href="#contact">Contact</a>
  </div>

  <div class="content">
    <!-- Home -->
    <section id="home">
      <h1>Hi There! I'm <span style="color:orange;">Benjamin</span></h1>
      <p>Graphic Designer / Photographer</p>
      <p>Welcome to my personal portfolio website. Explore to know more about me.</p>
      <a href="#about" class="btn btn-warning">More About Me</a>
    </section>

    <!-- About -->
    <section id="about">
      <div class="section-title">About Me</div>
      <p>I'm Benjamin Smith, Graphic Designer / Photographer with 15+ years experience.</p>
      <div class="row text-center">
        <div class="col"><h3>15+</h3><p>Years Experience</p></div>
        <div class="col"><h3>350+</h3><p>Projects Done</p></div>
        <div class="col"><h3>200+</h3><p>Happy Clients</p></div>
        <div class="col"><h3>45K</h3><p>Followers</p></div>
      </div>
    </section>

    <!-- Resume -->
    <section id="resume">
      <div class="section-title">Resume</div>
      <h4>Education</h4>
      <ul>
        <li>Bachelor of Arts - Graphic Design (2005 - 2009)</li>
        <li>Master of Design - Visual Communication (2010 - 2012)</li>
      </ul>
      <h4>Experience</h4>
      <ul>
        <li>Graphic Designer at Creative Studio (2012 - 2016)</li>
        <li>Senior Designer at Brand Agency (2016 - 2020)</li>
        <li>Freelance Designer (2020 - Present)</li>
      </ul>
    </section>

    <!-- Portfolio -->
    <section id="portfolio">
      <div class="section-title">Portfolio</div>
      <div class="row">
        <div class="col-md-4 mb-3"><img src="https://via.placeholder.com/300x200" class="img-fluid"></div>
        <div class="col-md-4 mb-3"><img src="https://via.placeholder.com/300x200" class="img-fluid"></div>
        <div class="col-md-4 mb-3"><img src="https://via.placeholder.com/300x200" class="img-fluid"></div>
      </div>
    </section>

    <!-- Testimonials -->
    <section id="testimonials">
      <div class="section-title">Testimonials</div>
      <div class="card mb-3">
        <div class="card-body">
          <p>"Benjamin is a creative genius!"</p>
          <small>- Janny</small>
        </div>
      </div>
      <div class="card mb-3">
        <div class="card-body">
          <p>"Very professional and talented designer."</p>
          <small>- Mila</small>
        </div>
      </div>
    </section>

    <!-- Contact -->
    <section id="contact">
      <div class="section-title">Contact</div>
      <p>Feel free to contact me:</p>
      <p>Email: <a href="mailto:benjamin@email.com">benjamin@email.com</a></p>
      <p>Phone: +62 812 3456 7890</p>
    </section>
  </div>
</body>
</html>