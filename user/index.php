<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/rasalogo.png" rel="icon">
  <link href="assets/img/rasalogo.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body class="index-page">
  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">RasaSorong</h1>
        <span>.</span>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home<br></a></li>
          <li><a href="#about">About</a></li>
          <li><a href="detail.php">Menu</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <?php if (!isset($_SESSION['user_id'])): ?>
        <!-- <a class="btn-getstarted" href="../login.php">Sign In</a> -->

      <?php else: ?>
        <div class="d-flex align-items-center">
          <a class="btn-getstarted me-2" href="../logout.php">Logout</a>
        </div>
      <?php endif; ?>
    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section light-background">

      <div class="container">
        <div class="row gy-4 justify-content-center justify-content-lg-between">
          <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h1 data-aos="fade-up">Enjoy Your Healthy<br>with Rasa Sorong</h1>
            <p data-aos="fade-up" data-aos-delay="100">Website ini menyediakan menu makanan khas Papua Barat Daya.</p>
            <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
              <!-- <a href="whatsapp.com" target="_blank" class="btn-get-started"></a> -->
              <div class="btn-get-started">
                <div class="btn-get-started">
                  <a href="https://api.whatsapp.com/send/?phone=6282194650584&type=phone_number&app_absent=0" class="text-white p-0" target="_blank">Hubung Kami</a>
                </div>

              </div>
            </div>
          </div>
          <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
            <img src="assets/img/1.png" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>About Us<br></h2>
        <p><span>Learn More</span> <span class="description-title">About Us</span></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">
          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
            <img src="assets/img/about.jpg" class="img-fluid mb-4" alt="">
          </div>
          <div class="col-lg-5" data-aos="fade-up" data-aos-delay="250">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                Nikmati Kekayaan Kuliner Sorong
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> <span>Temukan cita rasa autentik dari bahan-bahan lokal terbaik.</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>Setiap hidangan membawa cerita dari budaya Papua Barat.</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>Kami menghadirkan suasana nyaman dengan kelezatan makanan khas Sorong.</span></li>
              </ul>
              <p>
                Rasakan pengalaman kuliner yang memadukan keunikan rasa khas Sorong dengan suasana hangat dan ramah. Setiap hidangan dirancang untuk memberikan kelezatan yang memanjakan lidah Anda. Mulai dari makanan laut segar hingga minuman tradisional, semua disiapkan dengan cinta untuk Anda.
              </p>

              <div class="position-relative mt-4">
                <img src="assets/img/about-2.jpg" class="img-fluid" alt="">
                <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Why Us Section -->
    <section id="why-us" class="why-us section light-background">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="why-box">
              <h3>Mengapa Memilih Rasa Sorong?</h3>
              <p>
                Rasa Sorong menghadirkan pengalaman kuliner autentik dari Sorong, Papua Barat. Kami menggunakan bahan-bahan segar pilihan dan resep tradisional untuk menghadirkan hidangan yang tak hanya lezat, tetapi juga penuh cerita. Dengan layanan ramah dan suasana yang nyaman, kami siap memberikan pengalaman terbaik untuk Anda dan keluarga.
              </p>
              <div class="text-center">
                <!-- <a href="#" class="more-btn"><span>Pelajari Lebih Lanjut</span> <i class="bi bi-chevron-right"></i></a> -->
              </div>
            </div>
          </div><!-- End Why Box -->

          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">

              <div class="col-xl-4">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-clipboard-data"></i>
                  <h4>Bahan Segar Berkualitas</h4>
                  <p>Kami hanya menggunakan bahan lokal terbaik untuk memastikan setiap hidangan memiliki rasa yang otentik dan lezat</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-gem"></i>
                  <h4>Resep Tradisional Unik</h4>
                  <p>Setiap menu kami dirancang dengan resep khas Sorong, menghadirkan kekayaan budaya Papua dalam setiap suapan</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-inboxes"></i>
                  <h4>Pelayanan Ramah dan Hangat</h4>
                  <p>Kami menyambut Anda dengan layanan yang sepenuh hati untuk membuat setiap kunjungan menjadi kenangan yang menyenangkan</p>
                </div>
              </div><!-- End Icon Box -->

            </div>
          </div>

        </div>

      </div>

    </section><!-- /Why Us Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section dark-background d-none">

      <img src="assets/img/stats-bg.jpg" alt="" data-aos="fade-in">

      <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Clients</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
              <p>Workers</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- /Stats Section -->

    <!-- Menu Section -->
    <section id="menu" class="menu section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Our Menu</h2>
        <p><span>Check Our</span> <span class="description-title">Yummy Menu</span></p>
      </div><!-- End Section Title -->

      <div class="container">

        <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">


          <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

            <div class="tab-pane fade active show" id="menu-starters">
              <div class="row gy-5">

                <?php
                include '../config/database.php'; // Pastikan koneksi database sudah benar

                // Query untuk mengambil data dari tabel makanan
                $query = "SELECT * FROM makanan  ORDER BY RAND() LIMIT 3";
                $result = $connect->query($query);

                // Cek apakah ada data
                if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                ?>
                    <div class="col-lg-4 menu-item">
                      <a href="../uploads/<?= $row['foto']; ?>" class="glightbox">
                        <img src="../uploads/<?= $row['foto']; ?>" class="menu-img img-fluid" style="width: 100%; height: 200px; object-fit: cover; border-radius: 10px;" alt="<?= htmlspecialchars($row['nama']); ?>">
                      </a>
                      <h4><?= htmlspecialchars($row['nama']); ?></h4>
                      <button type="button" class="btn btn-danger mt-2" data-bs-toggle="modal" data-bs-target="#detailModal<?= $row['id']; ?>">
                        Lihat Detail
                      </button>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="detailModal<?= $row['id']; ?>" tabindex="-1" aria-labelledby="modalLabel<?= $row['id']; ?>" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="modalLabel<?= $row['id']; ?>"><?= htmlspecialchars($row['nama']); ?></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <a href="../uploads/<?= $row['foto']; ?>" class="glightbox">
                              <img src="../uploads/<?= $row['foto']; ?>" class="img-fluid mb-3" alt="<?= htmlspecialchars($row['nama']); ?>">
                            </a>
                            <p><strong>Deskripsi:</strong> <?= htmlspecialchars($row['deskripsi']); ?></p>
                            <p><strong>Bahan Utama:</strong> <?= htmlspecialchars($row['bahan_utama']); ?></p>
                            <p><strong>Bahan Pendamping:</strong> <?= htmlspecialchars($row['pendamping']); ?></p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                          </div>
                        </div>
                      </div>
                    </div>
                <?php
                  }
                } else {
                  echo "<p>Data makanan tidak tersedia.</p>";
                }
                ?>
              </div>
            </div><!-- End Starter Menu Content -->
          </div>
      </div>
    </section><!-- /Menu Section -->
    <div class="text-center" data-aos="fade-up" data-aos-delay="200">
      <a href="detail.php" class="btn btn-secondary" tabindex="-1" role="button" aria-disabled="true">Lihat Semua</a>
    </div>
    <br>

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p><span>Need Help?</span> <span class="description-title">Contact Us</span></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <!-- <div class="mb-5">
          <iframe style="width: 100%; height: 400px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d107347.5848117587!2d131.09555112801857!3d-0.8978193441190293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d5eab02c2d2ddcd%3A0xe32b512ec6c6786!2sSorong%2C%20Kota%20Sorong%2C%20Papua%20Bar.!5e0!3m2!1sid!2sid!4v1735943008234!5m2!1sid!2sid" frameborder="0" allowfullscreen=""></iframe>
        </div> -->
        <!-- End Google Maps -->

        <form id="contactForm" method="POST" action="contact.php" class="php-email-form">
          <!-- Form Fields -->
          <div class="row gy-4">
            <div class="col-md-6">
              <input type="text" name="name" class="form-control" placeholder="Your Name" required>
            </div>
            <div class="col-md-6">
              <input type="email" class="form-control" name="email" placeholder="Your Email" required>
            </div>
            <div class="col-md-12">
              <input type="text" class="form-control" name="subject" placeholder="Subject" required>
            </div>
            <div class="col-md-12">
              <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
            </div>
            <div class="col-md-12 text-center">
              <div id="formStatus"></div>
              <button type="submit">Send Message</button>
            </div>
          </div>
        </form>


      </div>

    </section>
    <!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer dark-background">

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">RasaSorong</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
    document.getElementById("contactForm").addEventListener("submit", function(e) {
      e.preventDefault();

      const formData = new FormData(this);

      fetch("contact.php", {
          method: "POST",
          body: formData
        })
        .then(response => response.json())
        .then(data => {
          const formStatus = document.getElementById("formStatus");
          if (data.status === "success") {
            formStatus.innerHTML = `<p class="text-success">${data.message}</p>`;
            this.reset();
          } else {
            formStatus.innerHTML = `<p class="text-danger">${data.message}</p>`;
          }
        })
        .catch(error => {
          console.error("Error:", error);
        });
    });
  </script>


</body>

</html>