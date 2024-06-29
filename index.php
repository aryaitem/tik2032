<?php
  require 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <title>Portfolio | Arya item</title>
</head>
<body>
  <nav>
    <div class="nav__bar">
      <a href="#"><span class="logo nav__logo">A</span>Arya</a>
      <div class="nav__menu__btn" id="menu-btn">
        <i class="ri-menu-3-line"></i>
      </div>
    </div>
    <ul class="nav__links" id="nav-links">
      <li><a href="#home">Home</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#service">Service</a></li>
      <li><a href="#Gallery">Gallery</a></li>
      <li><a href="#contact" class="btn">Contact</a></li>
    </ul>
    <a href="#contact" class="btn btn__large">Contact</a>
  </nav>
  <header class="section__container header__container" id="home">
    <div class="header__image">
      <img src="aset/aryaprofil.jpeg" alt="header" />
    </div>
    <div class="header__content">
      <div>
        <h1>Arya item</h1>
        <h2>Hallo, saya dari teknik informatika</h2>
      </div>
      <p class="section__description">
        Saya adalah seorang mahasiswa Teknik Informatika yang memiliki minat mendalam dalam teknologi digital.
        dan tertarik dengan berbagai aspek teknologi, mulai dari pengembangan perangkat lunak hingga keamanan
        jaringan dan desain antarmuka pengguna. Saya senang belajar tentang tren terbaru dalam industri teknologi
        dan selalu mencari cara untuk menggali lebih dalam dalam bidang yang saya tempuh. Dengan semangatku yang
        besar dan keingintahuanku yang tak terbatas, saya bertekad untuk menjadi profesional yang kompeten dan
        berpengaruh dalam dunia teknologi digital.
      </p>
    </div>
  </header>

  <section class="section__container about__container" id="about">
    <div class="about__image">
      <img src="aset/aryaprofil2.jpeg" alt="about" class="about__img" />
    </div>
    <div class="about__content">
      <h2 class="section__header">Tentang saya</h2>
      <p class="section__description">
        Saya adalah mahasiswa Teknik informatika semester 4 di universitas sam ratu langi manado dengan perolehan nilai IPK 3,76.
        Sebelum saya berkuliah, saya berasal dari sekolah SMK YADIKA MANADO Jurusan Teknik Komputer dan Jaringan dengan perolehan nilai
        semester 1-5 dengan nilai rata-rata 84,00.
      </p>
    </div>
  </section>

  <section class="section__container service__container" id="service">
    <h2 class="section__header">Keahlian saya</h2>
    <div class="service__grid">
      <?php
      // Fetch services from the database
      $query = "SELECT * FROM services";
      $result = mysqli_query($conn, $query);

      if ($result):
          while ($row = mysqli_fetch_assoc($result)):
      ?>
      <div class="service__card">
        <span><i class="ri-polaroid-fill"></i></span>
        <h4><?= $row['title'] ?></h4>
        <p><?= $row['description'] ?></p>
      </div>
      <?php
          endwhile;
      endif;
      ?>
       <div class="service__card">
        <span><i class="ri-polaroid-fill"></i></span>
        <h4>Network address</h4>
        <p>
          Melakukan pengelompokan jaringan IP address dengan baik dan benar untuk di gunakan agar tidak terjadinya tabrakan lalu lintas jaringan
        </p>
      </div>
      <div class="service__card">
        <span><i class="ri-polaroid-fill"></i></span>
        <h4>Penyambungan dan perbaikan fiber optic</h4>
        <p>
         Mampu melakukan penyambungan dan perbaikan kabel serat optic yang baik dan benar sehingga tidak terjadi ganguan jaringan
        </p>
      </div>
    </div>
  </section>

  <section class="section__container portfolio__container" id="Gallery">
    <h2 class="section__header">Gallery</h2>
    <p class="section__description">
      Galerryku yang menampilkan keahlian dalam pengelolaan jaringan menggunakan perangkat MikroTik
      dan pengalaman dalam penyambungan kabel fiber optik.
    </p>
    <div class="portfolio__grid">
      <div class="portfolio__card">
        <img src="aset/telkom1.jpeg" alt="portfolio" />
      </div>
      <div class="portfolio__card">
        <img src="aset/telkom2.jpeg" alt="portfolio" />
      </div>
      <div class="portfolio__card">
        <img src="aset/penyambungan1.jpeg" alt="portfolio" />
      </div>
      <div class="portfolio__card">
        <img src="aset/penyambungan4.jpeg" alt="portfolio" />
      </div>
      <div class="portfolio__card">
        <img src="aset/cisco2.jpeg" alt="portfolio" />
      </div>
      <div class="portfolio__card">
        <img src="aset/lan.jpeg" alt="portfolio" />
      </div>
      <div class="portfolio__card">
        <img src="aset/SCM.jpeg" alt="portfolio" />
      </div>
      <div class="portfolio__card">
        <img src="aset/ODP.jpeg" alt="portfolio" />
      </div>
      <div class="portfolio__card">
        <img src="aset/server.jpeg" alt="portfolio" />
      </div>
    </div>
  </section>

  <section class="section__container contact__container" id="contact">
    <h2>Contact</h2>
    <p>KONTAK SAYA :</p>
    <ul>
      <li>Email : aryaitem1105@gmail.com</li>
      <li>Phone : 082199590151</li>
      <li>Instagram : <a href="https://www.instagram.com/aryaitem?igsh=MW0xdDFpbGU2OXU4ag%3D%3D&utm_source=qr">aryaitem</a></li>
      <li>Facebook : <a href="https://www.facebook.com/share/CptESWWs98TkT62s/?mibextid=LQQJ4d">aryaitem</a></li>
    </ul>
  </section>

  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="main.js"></script>
</body>
</html>