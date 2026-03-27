<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rabiatul Hikmah - Portfolio</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
include 'koneksi.php';

$profil = [
  'nama'    => 'Rabiatul Hikmah',
  'tagline' => 'Information Systems Student · Universitas Mulawarman',
  'foto'    => 'img/rabi.jpg'
];

$experience   = mysqli_query($koneksi, 'SELECT * FROM experience ORDER BY tahun DESC');
$skills       = mysqli_query($koneksi, 'SELECT * FROM skills');
$certificates = mysqli_query($koneksi, 'SELECT * FROM certificates');
?>

<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">RH</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
        <li class="nav-item"><a class="nav-link" href="#certificates">Certificates</a></li>
      </ul>
    </div>
  </div>
</nav>

<section id="home" class="hero-section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-7">
        <p class="greeting">Hello, I'm</p>
        <h1 class="hero-name"><?= $profil['nama'] ?></h1>
        <p class="hero-tagline"><?= $profil['tagline'] ?></p>
        <div class="mt-4">
          <a href="#about" class="btn btn-dark me-2">About Me</a>
          <a href="#certificates" class="btn btn-outline-dark">Certificates</a>
        </div>
      </div>
      <div class="col-lg-5 text-center mt-5 mt-lg-0">
        <img src="<?= $profil['foto'] ?>" class="profile-photo" alt="Profile Photo">
      </div>
    </div>
  </div>
</section>

<section id="about" class="content-section bg-about">
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-6">
        <h2 class="section-title">About Me</h2>
        <p class="about-text">Halo! Saya Rabiatul Hikmah, mahasiswa Sistem Informasi semester 4 di Universitas Mulawarman. Saya memiliki minat yang kuat dalam bidang teknologi, khususnya pengembangan web dan data science.</p>
        <p class="about-text">Saya percaya bahwa konsistensi dan keberanian mencoba hal baru adalah kunci berkembang di dunia teknologi.</p>
      </div>

      <div class="col-lg-6">
        <h3 class="sub-title mt-0">Skills</h3>
        <?php while ($skill = mysqli_fetch_assoc($skills)) : ?>
          <div class="mb-3">
            <div class="d-flex justify-content-between mb-1">
              <span class="skill-label"><?= $skill['nama_skill'] ?></span>
              <span class="skill-pct"><?= $skill['LEVEL'] ?>%</span>
            </div>
            <div class="progress skill-bar">
              <div class="progress-bar" style="width: <?= $skill['LEVEL'] ?>%"></div>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    </div>

    <div class="row mt-5">
      <div class="col-12">
        <h3 class="sub-title">Experience</h3>
        <div class="timeline">
          <?php while ($exp = mysqli_fetch_assoc($experience)) : ?>
            <div class="timeline-item">
              <div class="timeline-dot"></div>
              <div class="timeline-content">
                <span class="timeline-year"><?= $exp['tahun'] ?></span>
                <h5><?= $exp['role'] ?></h5> 
                <p class="text-muted mb-1 small">
                  <i class="bi bi-building me-1"></i><?= $exp['organisasi'] ?>
                </p>
                <p class="mb-0 small text-secondary"><?= $exp['deskripsi'] ?></p>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="certificates" class="content-section">
  <div class="container">
    <h2 class="section-title">Certificates</h2>
    <div class="row g-4 justify-content-center">
      <?php while ($cert = mysqli_fetch_assoc($certificates)) : ?>
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="cert-card h-100">
            <div class="cert-icon"><i class="<?= $cert['icon'] ?>"></i></div>
            <h5 class="cert-title"><?= $cert['judul'] ?></h5>
            <p class="cert-meta"><i class="bi bi-building me-1"></i><?= $cert['provider'] ?></p>
            <p class="cert-meta"><i class="bi bi-calendar3 me-1"></i><?= $cert['tahun'] ?></p>
            <span class="cert-badge"><?= $cert['status'] ?></span>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
  </div>
</section>

<footer class="footer">
  <p class="mb-0">© 2026 <?= $profil['nama'] ?></p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>