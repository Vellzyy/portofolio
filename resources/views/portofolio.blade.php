<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Portofolio</title>
<style>
  /* Reset & Basic Styling */
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: white;
    line-height: 1.6;
    overflow-x: hidden;
    position: relative;
    min-height: 100vh;
    scroll-behavior: smooth;
  }

  /* Background dengan tema galaksi */
  body::before {
    content: '';
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(125deg, #0a0e2a, #1a1f4b, #0a0e2a);
    z-index: -3;
  }

  /* Efek bintang */
  .stars {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -2;
  }

  .star {
    position: absolute;
    background-color: white;
    border-radius: 50%;
    animation: twinkle 5s infinite ease-in-out;
  }

  @keyframes twinkle {
    0%, 100% { opacity: 0.2; }
    50% { opacity: 1; }
  }

  /* Nebula effect */
  .nebula {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
    opacity: 0.5;
    background: 
      radial-gradient(circle at 20% 30%, rgba(104, 45, 185, 0.4) 0%, transparent 40%),
      radial-gradient(circle at 80% 20%, rgba(25, 25, 112, 0.4) 0%, transparent 40%),
      radial-gradient(circle at 40% 70%, rgba(65, 105, 225, 0.4) 0%, transparent 40%);
  }

  a {
    color: inherit;
    text-decoration: none;
  }

  /* Header & Navigation */
  header {
    background-color: rgba(7, 28, 47, 0.8);
    backdrop-filter: blur(10px);
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1rem 3rem;
    position: sticky;
    top: 0;
    z-index: 100;
    border-bottom: 1px solid rgba(178, 149, 248, 0.2);
  }

  .logo {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    font-weight: bold;
    font-size: 1.2rem;
    color: #b295f8;
  }

  /* Logo circle/icon placeholder */
  .logo-icon {
    width: 36px;
    height: 36px;
    background: linear-gradient(45deg, #8043e0, #b295f8);
    border-radius: 50%;
    position: relative;
  }
  .logo-icon::before {
    content: "";
    position: absolute;
    top: 6px;
    left: 50%;
    width: 6px;
    height: 18px;
    background-color: #58e6d9;
    border-radius: 3px;
    transform: translateX(-50%);
  }
  .logo-icon::after {
    content: "";
    position: absolute;
    bottom: 6px;
    left: 50%;
    width: 10px;
    height: 10px;
    background-color: #58e6d9;
    border-radius: 50%;
    transform: translateX(-50%);
  }

  nav ul {
    list-style: none;
    display: flex;
    gap: 2rem;
  }

  nav ul li {
    position: relative;
  }

  nav ul li a {
    font-weight: 600;
    padding: 0.25rem 0;
    transition: color 0.3s ease;
  }
  nav ul li a:hover,
  nav ul li a.active {
    color: #b295f8;
    border-bottom: 2px solid #b295f8;
  }

  /* Hero Section */
  .hero {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    text-align: center;
    padding: 0 2rem;
  }

  .hero-content {
    max-width: 800px;
  }

  .hero-content h1 {
    font-size: 4.5rem;
    font-weight: 900;
    color: #b295f8;
    margin-bottom: 1.5rem;
    text-shadow: 0 0 15px rgba(178, 149, 248, 0.5);
  }

  .btn {
    display: inline-block;
    background: linear-gradient(90deg, #19c7c1, #58e6d9);
    color: white;
    padding: 0.8rem 2rem;
    border-radius: 25px;
    font-weight: 600;
    font-size: 1.1rem;
    cursor: pointer;
    border: none;
    transition: all 0.3s ease;
    box-shadow: 0 0 15px rgba(25, 199, 193, 0.4);
    margin: 0 0.5rem;
  }

  .btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 0 20px rgba(25, 199, 193, 0.6);
  }

  .btn-outline {
    background: transparent;
    border: 2px solid #b295f8;
    color: #b295f8;
    box-shadow: 0 0 15px rgba(178, 149, 248, 0.4);
  }

  .btn-outline:hover {
    background: rgba(178, 149, 248, 0.1);
    box-shadow: 0 0 20px rgba(178, 149, 248, 0.6);
  }

  /* About Me Section */
  .about-section {
    min-height: 100vh;
    display: flex;
    align-items: center;
    padding: 4rem 2rem;
    background-color: rgba(11, 27, 52, 0.8);
    backdrop-filter: blur(10px);
    border-top: 1px solid rgba(178, 149, 248, 0.2);
    border-bottom: 1px solid rgba(178, 149, 248, 0.2);
  }

  .about-container {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    gap: 4rem;
  }

  .about-image {
    flex: 1;
    max-width: 400px;
  }

  .about-image img {
    width: 100%;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
  }

  .about-content {
    flex: 1;
  }

  .about-content h2 {
    font-size: 2.8rem;
    color: #a9d7d1;
    margin-bottom: 1.5rem;
    text-shadow: 0 0 10px rgba(169, 215, 209, 0.4);
  }

  .about-content p {
    font-size: 1.1rem;
    line-height: 1.8;
    margin-bottom: 1.5rem;
    color: #e0e0e0;
  }

  /* Project Section */
  .project-section {
    padding: 4rem 2rem;
    background-color: rgba(11, 27, 52, 0.8);
    backdrop-filter: blur(10px);
    border-radius: 20px;
    border: 1px solid rgba(178, 149, 248, 0.2);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
    max-width: 1200px;
    margin: 0 auto 6rem auto;
  }

  .project-section h2 {
    text-align: center;
    font-size: 2.5rem;
    color: #a9d7d1;
    font-weight: 900;
    margin-bottom: 3rem;
    text-shadow: 0 0 10px rgba(169, 215, 209, 0.4);
  }

  .project-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    margin-top: 2rem;
  }

  .project-card {
    background: linear-gradient(135deg, #d8c9e7, #f1f0fc, #b7c6d9);
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(128, 67, 224, 0.3);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    color: #3553a4;
  }

  .project-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(128, 67, 224, 0.4);
  }

  .project-image {
    width: 100%;
    height: 200px;
    overflow: hidden;
  }

  .project-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
  }

  .project-card:hover .project-image img {
    transform: scale(1.1);
  }

  .project-info {
    padding: 1.5rem;
  }

  .project-info h3 {
    font-size: 1.5rem;
    margin-bottom: 0.75rem;
    color: #3553a4;
  }

  .project-info p {
    font-size: 1rem;
    color: #1e2134;
    margin-bottom: 1.5rem;
    line-height: 1.6;
  }

  .project-info .btn {
    background: linear-gradient(90deg, #13b5be, #19c7c1);
    padding: 0.65rem 1.5rem;
    border-radius: 25px;
    font-weight: 600;
    font-size: 1rem;
    color: white;
    border: none;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 0 10px rgba(19, 181, 190, 0.4);
    width: 100%;
    text-align: center;
  }

  .project-info .btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 0 15px rgba(19, 181, 190, 0.6);
  }

  /* Hidden Projects - Initially Hidden */
  .hidden-projects {
    display: none;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    margin-top: 2rem;
    animation: fadeIn 0.5s ease;
  }

  @keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
  }

  /* Section Kontak */
  .contact-section {
    max-width: 800px;
    margin: 3rem auto;
    padding: 2rem;
    background-color: rgba(11, 27, 52, 0.8);
    backdrop-filter: blur(10px);
    border-radius: 20px;
    border: 1px solid rgba(178, 149, 248, 0.2);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
  }

  .contact-section h1 {
    text-align: center;
    font-size: 2.5rem;
    color: #a9d7d1;
    margin-bottom: 2rem;
    text-shadow: 0 0 10px rgba(169, 215, 209, 0.4);
  }

  .contact-category {
    margin-bottom: 2.5rem;
  }

  .contact-category h2 {
    font-size: 1.8rem;
    color: #b295f8;
    margin-bottom: 1rem;
    border-bottom: 2px solid rgba(178, 149, 248, 0.3);
    padding-bottom: 0.5rem;
  }

  .contact-item {
    background: rgba(255, 255, 255, 0.1);
    border-radius: 15px;
    padding: 1.2rem;
    margin-bottom: 1rem;
    transition: transform 0.3s ease, background 0.3s ease;
  }

  .contact-item:hover {
    background: rgba(255, 255, 255, 0.15);
    transform: translateY(-3px);
  }

  .contact-name {
    font-weight: bold;
    color: #58e6d9;
    margin-bottom: 0.5rem;
    font-size: 1.2rem;
  }

  .contact-info {
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
  }

  .contact-phone, .contact-username {
    display: flex;
    align-items: center;
    gap: 0.5rem;
  }

  .contact-phone a, .contact-username a {
    color: white;
    transition: color 0.3s ease;
    display: flex;
    align-items: center;
    gap: 0.5rem;
  }

  .contact-phone a:hover, .contact-username a:hover {
    color: #b295f8;
  }

  .contact-icon {
    font-size: 1.2rem;
  }

  /* Footer */
  footer {
    text-align: center;
    padding: 1.5rem;
    background-color: rgba(7, 28, 47, 0.8);
    backdrop-filter: blur(10px);
    border-top: 1px solid rgba(178, 149, 248, 0.2);
    width: 100%;
  }

  /* Scroll down indicator */
  .scroll-down {
    position: absolute;
    bottom: 30px;
    left: 50%;
    transform: translateX(-50%);
    color: #b295f8;
    font-size: 2rem;
    animation: bounce 2s infinite;
    cursor: pointer;
  }

  @keyframes bounce {
    0%, 20%, 50%, 80%, 100% {transform: translateY(0) translateX(-50%);}
    40% {transform: translateY(-20px) translateX(-50%);}
    60% {transform: translateY(-10px) translateX(-50%);}
  }

  /* Responsive */
  @media (max-width: 900px) {
    header {
      padding: 1rem;
    }

    nav ul {
      gap: 1rem;
      flex-wrap: wrap;
      justify-content: center;
    }

    .hero-content h1 {
      font-size: 3.5rem;
    }

    .about-container {
      flex-direction: column;
      gap: 2rem;
    }

    .about-image {
      max-width: 300px;
    }

    .project-grid {
      grid-template-columns: 1fr;
    }

    .hidden-projects {
      grid-template-columns: 1fr;
    }

    .contact-section {
      margin: 2rem 1rem;
      padding: 1.5rem;
    }
  }

  @media (max-width: 600px) {
    .contact-info {
      flex-direction: column;
    }
    
    .hero-content h1 {
      font-size: 2.8rem;
    }
    
    .btn {
      display: block;
      margin: 0.5rem auto;
      width: 80%;
    }
  }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
<!-- Background elements -->
<div class="stars" id="stars"></div>
<div class="nebula"></div>

<header>
  <a href="#" class="logo">
    <div class="logo-icon" aria-label="Logo"></div>
    Shane<span style="font-weight:300;">Portofolio</span>
  </a>
  <nav>
    <ul>
      <li><a href="#beranda" class="active">Beranda</a></li>
      <li><a href="#about">About Me</a></li>
      <li><a href="#project">Project</a></li>
      <li><a href="#kontak">Contact</a></li>
    </ul>
  </nav>
</header>

<main>
  <!-- Section Beranda -->
  <section class="hero" id="beranda">
    <div class="hero-content">
      <h1>Shane Felicia Carrenina Siregar</h1>
      <div>
        <button class="btn" onclick="scrollToSection('about')">About Me</button>
        <button class="btn btn-outline" onclick="scrollToSection('project')">Lihat Project</button>
      </div>
    </div>
    <div class="scroll-down" onclick="scrollToSection('about')">
      <i class="fas fa-chevron-down"></i>
    </div>
  </section>

  <!-- Section About Me -->
  <section class="about-section" id="about">
    <div class="about-container">
      <div class="about-image">
        <img src="35.jpg" alt="Foto Shane Felicia" />
      </div>
      <div class="about-content">
        <h2>About Me</h2>
        <p>
          Saya Shane Felicia Carrenina Siregar, Saya adalah seorang pelajar SMK jurusan Rekayasa Perangkat Lunak (RPL) yang sangat menyukai dunia design dan teknologi. Saya memiliki ketertarikan besar dalam menciptakan pengalaman digital yang menarik dan fungsional.
        </p>
        <p>
          Saya senang bereksperimen dengan konsep-konsep baru dan terus mengembangkan kemampuan saya dalam bidang UI/UX design, dan design lainnya. Kreativitas dan inovasi adalah motivasi utama saya dalam menghasilkan karya yang bermanfaat.
        </p>
        <p>
          Saya percaya bahwa dengan dedikasi dan terus belajar, saya dapat menciptakan solusi digital yang tidak hanya indah dipandang tetapi juga memberikan nilai tambah bagi pengguna.
        </p>
      </div>
    </div>
  </section>

  <!-- Section Project -->
  <section class="project-section" id="project">
    <h2>PROJECT</h2>
    
    <div class="project-grid">
      <!-- Project 1 - Website Design -->
      <div class="project-card">
        <div class="project-image">
          <img src="https://images.unsplash.com/photo-1531403009284-440f080d1e12?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Website Design Project">
        </div>
        <div class="project-info">
          <h3>Website Design</h3>
          <p>Desain website responsif dengan tampilan modern dan user-friendly untuk pengalaman pengguna yang optimal.</p>
          <button class="btn" onclick="toggleHiddenProjects('websiteProjects')">Lihat Detail</button>
        </div>
      </div>
      
      <!-- Project 2 - UI/UX Design -->
      <div class="project-card">
        <div class="project-image">
          <img src="https://images.unsplash.com/photo-1545235617-9465d2a55698?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="UI/UX Design Project">
        </div>
        <div class="project-info">
          <h3>UI/UX Design</h3>
          <p>Membuat antarmuka pengguna yang intuitif dan pengalaman pengguna yang menyenangkan untuk aplikasi mobile.</p>
          <button class="btn" onclick="toggleHiddenProjects('uiuxProjects')">Lihat Detail</button>
        </div>
      </div>
    </div>

    <!-- Hidden Projects for Website Design -->
    <div class="hidden-projects" id="websiteProjects">
      <div class="project-card">
        <div class="project-image">
          <img src="https://images.unsplash.com/photo-1522542550221-31fd19575a2d?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="E-commerce Website">
        </div>
        <div class="project-info">
          <h3>E-commerce Website</h3>
          <p>Website toko online dengan fitur keranjang belanja, pembayaran, dan manajemen produk.</p>
        </div>
      </div>

      <div class="project-card">
        <div class="project-image">
          <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Blog Platform">
        </div>
        <div class="project-info">
          <h3>Blog Platform</h3>
          <p>Platform blogging dengan editor teks kaya, manajemen konten, dan sistem komentar.</p>
        </div>
      </div>

      <div class="project-card">
        <div class="project-image">
          <img src="https://images.unsplash.com/photo-1499951360447-b19be8fe80f5?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Company Profile">
        </div>
        <div class="project-info">
          <h3>Company Profile</h3>
          <p>Website profil perusahaan dengan portfolio, testimoni, dan sistem kontak.</p>
        </div>
      </div>
    </div>

    <!-- Hidden Projects for UI/UX Design -->
    <div class="hidden-projects" id="uiuxProjects">
      <div class="project-card">
        <div class="project-image">
          <img src="Screenshot 2025-09-08 201652.png" alt="Mobile App UI">
        </div>
        <div class="project-info">
          <h3>Design Spotify </h3>
          <p>Desain Spotify mengusung tampilan sederhana, modern, dan intuitif dengan dominasi warna hijau, hitam, dan putih. Ikonnya mudah dikenali, navigasi dibuat praktis, serta tata letak dirancang agar pengalaman mendengarkan musik terasa nyaman dan personal.</p>
        </div>
      </div>

      <div class="project-card">
        <div class="project-image">
          <img src="WhatsApp Image 2025-09-10 at 11.47.51 AM.jpeg" alt="Dashboard Design">
        </div>
        <div class="project-info">
          <h3>Smart Home</h3>
          <p>Smart Home adalah hunian modern yang memanfaatkan teknologi otomatisasi untuk mengontrol perangkat rumah, seperti pencahayaan, keamanan, suhu, hingga peralatan elektronik, sehingga memberikan kenyamanan, efisiensi energi, dan keamanan bagi penghuninya.</p>
        </div>
      </div>

      <div class="project-card">
        <div class="project-image">
          <img src="Screenshot 2025-09-10 114627.png" alt="Booking System UI">
        </div>
        <div class="project-info">
          <h3>Design Music App</h3>
          <p>aplikasi pemutar musik dengan tampilan modern dan sederhana, dirancang untuk memudahkan pengguna dalam menikmati, mencari, dan mengatur lagu favorit.</p>
        </div>
      </div>

      <div class="project-card">
        <div class="project-image">
          <img src="Poster Ajakan Membaca Buku Ilustratif Biru dan Hijau.png" alt="Dashboard Design">
        </div>
        <div class="project-info">
          <h3>Poster Membaca Buku</h3>
          <p>Poster Membaca Buku ini mengajak untuk menumbuhkan minat baca melalui ilustrasi dan pesan inspiratif.</p>
        </div>
      </div>

      <div class="project-card">
        <div class="project-image">
          <img src="Biru Hijau Ilustrasi Poster Kebersihan Lingkungan.png" alt="Dashboard Design">
        </div>
        <div class="project-info">
          <h3>Poster Kebersihan Lingkungan</h3>
          <p>Poster Kebersihan Lingkungan ini berisi ajakan menjaga kebersihan sekitar dengan pesan singkat dan ilustrasi yang mudah dipahami.</p>
        </div>
      </div>

      <div class="project-card">
        <div class="project-image">
          <img src="WhatsApp Image 2025-09-10 at 11.47.51 AM.jpeg" alt="Dashboard Design">
        </div>
        <div class="project-info">
          <h3>Smart Home</h3>
          <p>Desain dashboard admin dengan visualisasi data dan navigasi yang mudah digunakan.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section Kontak -->
  <section class="contact-section" id="kontak">
    <h1>Contact</h1>
    
    <div class="contact-category">
      <h2>Personal Contact</h2>
      <div class="contact-item">
        <div class="contact-name">Shane Felicia Carrenina Siregar</div>
        <div class="contact-info">
          <div class="contact-phone">
            <span class="contact-icon"><i class="fab fa-whatsapp"></i></span>
            <a href="https://wa.me/6281234692115" target="_blank">081234692115</a>
          </div>
          <div class="contact-username">
            <span class="contact-icon"><i class="fab fa-instagram"></i></span>
            <a href="https://www.instagram.com/vellonlyy" target="_blank">vellonlyy</a>
          </div>
          <div class="contact-username">
            <span class="contact-icon"><i class="fas fa-envelope"></i></span>
            <a href="mailto:shanefelicia2@gmail.com">shanefelicia2@gmail.com</a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<footer>
  <p>© 2025. Shane Portofolio.</p>
</footer>

<script>
  // Membuat efek bintang
  function createStars() {
    const starsContainer = document.getElementById('stars');
    const starsCount = 200;
    
    for (let i = 0; i < starsCount; i++) {
      const star = document.createElement('div');
      star.classList.add('star');
      
      const size = Math.random() * 3;
      star.style.width = `${size}px`;
      star.style.height = `${size}px`;
      
      star.style.left = `${Math.random() * 100}%`;
      star.style.top = `${Math.random() * 100}%`;
      
      star.style.animationDuration = `${Math.random() * 3 + 2}s`;
      star.style.animationDelay = `${Math.random() * 2}s`;
      
      starsContainer.appendChild(star);
    }
  }
  
  // Fungsi scroll ke section tertentu
  function scrollToSection(sectionId) {
    const element = document.getElementById(sectionId);
    if (element) {
      element.scrollIntoView({ behavior: 'smooth' });
    }
  }
  
  // Menampilkan/menyembunyikan project tersembunyi
  function toggleHiddenProjects(projectId) {
    const allHiddenProjects = document.querySelectorAll('.hidden-projects');
    
    // Sembunyikan semua project tersembunyi
    allHiddenProjects.forEach(project => {
      if (project.id !== projectId) {
        project.style.display = 'none';
      }
    });
    
    // Toggle project yang dipilih
    const selectedProject = document.getElementById(projectId);
    if (selectedProject.style.display === 'grid') {
      selectedProject.style.display = 'none';
    } else {
      selectedProject.style.display = 'grid';
      
      // Scroll ke project section jika belum terlihat
      const projectSection = document.getElementById('project');
      projectSection.scrollIntoView({ behavior: 'smooth' });
    }
  }
  
  // Menampilkan detail project (modal)
  function showProjectDetail(projectId) {
    alert('Detail project ' + projectId + ' akan ditampilkan di sini.');
    // Di sini bisa ditambahkan kode untuk menampilkan modal dengan detail project
  }
  
  // Update menu aktif saat scroll
  window.addEventListener('scroll', function() {
    const sections = document.querySelectorAll('section');
    const navLinks = document.querySelectorAll('nav ul li a');
    const scrollPosition = window.scrollY;
    
    let currentSection = '';
    
    sections.forEach(section => {
      const sectionTop = section.offsetTop;
      const sectionHeight = section.clientHeight;
      
      if (scrollPosition >= sectionTop - 100) {
        currentSection = section.getAttribute('id');
      }
    });
    
    navLinks.forEach(link => {
      link.classList.remove('active');
      if (link.getAttribute('href') === `#${currentSection}`) {
        link.classList.add('active');
      }
    });
  });
  
  // Menangani klik pada menu navigasi
  document.querySelectorAll('nav a').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      e.preventDefault();
      const targetId = this.getAttribute('href').substring(1);
      scrollToSection(targetId);
    });
  });
  
  document.addEventListener('DOMContentLoaded', function() {
    createStars();
    
    // Inisialisasi menu aktif berdasarkan hash URL
    if (window.location.hash) {
      const targetId = window.location.hash.substring(1);
      setTimeout(() => {
        scrollToSection(targetId);
      }, 100);
    }
  });
</script>
</body>
</html>