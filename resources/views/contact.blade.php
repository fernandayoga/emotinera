<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Emotionera</title>
    <link rel="icon" href="img/logo.jpg" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Free HTML Templates" name="keywords" />
    <meta content="Free HTML Templates" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap"
      rel="stylesheet"
    />

    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />

    <!--AOS-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <style>
      html,
      body {
        overflow-x: hidden; /* Menghilangkan scroll horizontal */
        width: 100%; /* Pastikan lebar halaman tidak lebih dari layar */
      }
      @media (max-width: 768px) {
        .btn {
          padding: 5px 10px; /* Mengurangi padding untuk memperkecil luas tombol */
          font-size: 12px; /* Ukuran font lebih kecil di layar ponsel */
          width: 100px; /* Lebar tombol akan menyesuaikan dengan kontainer */
          margin-left: 0;
        }

        .d-flex {
          gap: 5px; /* Mengatur jarak antar tombol pada ponsel */
        }
        .d-flex a {
          margin-left: 0 !important; /* Pastikan tidak ada margin kiri untuk tombol Register */
        }
      }

      @media (min-width: 992px) and (max-width: 1180px) {
        .logo {
          width: 50px; /* Ukuran logo lebih kecil di desktop besar */
          margin-top: -15px;
          margin-left: -57px;
        }

        .logo-text {
          font-size: 30px; /* Ukuran teks lebih kecil di desktop besar */
          padding-bottom: 50px !important;
        }
      }

      @media (min-width: 992px) {
        .custom-margin {
          margin-left: 30px;
        }
      }
    </style>
  </head>

  <body>
    <!-- Navbar Start -->
    <div class="container-fluid bg-light position-relative shadow" data-aos="fade-down">
      <nav
        class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5"
      >
        <a
          href="index.html"
          class="navbar-brand font-weight-bold text-secondary"
          style="font-size: 50px"
        >
          <img
            src="img/logo.jpg"
            alt="Emotionera Logo"
            style="width: 60px; height: auto"
            class="logo"
          />
          <span class="text-primary logo-text">Emotionera</span>
        </a>
        <button
          type="button"
          class="navbar-toggler"
          data-toggle="collapse"
          data-target="#navbarCollapse"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse justify-content-between"
          id="navbarCollapse"
        >
          <div class="navbar-nav font-weight-bold mx-auto py-0">
          <a href="{{ url('/') }}" class="nav-item nav-link">Home</a>
            <a href="{{ url('/about') }}" class="nav-item nav-link">About</a>
            <a href="{{ url('/class') }}" class="nav-item nav-link">Classes</a>
            <a href="{{ url('/event') }}" class="nav-item nav-link">Event</a>
            <a href="{{ url('/blog') }}" class="nav-item nav-link">Blog</a>
            <a href="{{ url('/contact') }}" class="nav-item nav-link active">Contact</a>
          </div>
        </div>
      </nav>
    </div>
    <!-- Navbar End -->

    <!-- Header Start -->
    <div class="container-fluid bg-primary mb-5">
      <div
        class="d-flex flex-column align-items-center justify-content-center"
        style="min-height: 400px" data-aos="zoom-in-down" data-aos-delay="200"
      >
        <h3 class="display-3 font-weight-bold text-white">Contact Us</h3>
        <div class="d-inline-flex text-white">
          <p class="m-0"><a class="text-white" href="index.html">Home</a></p>
          <p class="m-0 px-2">/</p>
          <p class="m-0">Contact Us</p>
        </div>
      </div>
    </div>
    <!-- Header End -->

    <!-- Contact Start -->
    <div class="container-fluid pt-5">
      <div class="container">
        <div class="text-center pb-2">
          <p class="section-title px-5">
            <span class="px-2">Get In Touch</span>
          </p>
          <h1 class="mb-4">Contact Us For Any Query</h1>
        </div>
        <div class="row">
          <div class="col-lg-7 mb-5" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
            <div class="contact-form">
            <form name="sentMessage" id="contactForm" novalidate="novalidate">
                <div class="control-group">
                  <input
                    type="text"
                    class="form-control"
                    id="name"
                    placeholder="Your Name"
                    required="required"
                    data-validation-required-message="Please enter your name"
                  />
                  <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                  <input
                    type="email"
                    class="form-control"
                    id="email"
                    placeholder="Your Email"
                    required="required"
                    data-validation-required-message="Please enter your email"
                  />
                  <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                  <input
                    type="text"
                    class="form-control"
                    id="subject"
                    placeholder="Subject"
                    required="required"
                    data-validation-required-message="Please enter a subject"
                  />
                  <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                  <textarea
                    class="form-control"
                    rows="6"
                    id="message"
                    placeholder="Message"
                    required="required"
                    data-validation-required-message="Please enter your message"
                  ></textarea>
                  <p class="help-block text-danger"></p>
                </div>
                <div>
                  <button
                    class="btn btn-primary py-2 px-4"
                    type="submit"
                    id="sendMessageButton"
                  >
                    Send Message
                  </button>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-5 mb-5" data-aos="fade-left" data-aos-delay="300" data-aos-duration="1000">
            <p>
              Emotionera adalah platform yang membantu individu meningkatkan
              kecerdasan emosional melalui alat, sumber daya, dan latihan
              berbasis penelitian. Platform ini mendukung pengguna dalam
              mengenali, mengekspresikan, dan merespons emosi secara sehat,
              dengan fokus pada kesadaran emosional, hubungan interpersonal, dan
              pertumbuhan pribadi.
            </p>
            <div class="d-flex">
              <i
                class="fa fa-map-marker-alt d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle"
                style="width: 45px; height: 45px"
              ></i>
              <div class="pl-3">
                <h5>Address</h5>
                <p>Surabaya, Indondesia</p>
              </div>
            </div>
            <div class="d-flex">
              <i
                class="fa fa-envelope d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle"
                style="width: 45px; height: 45px"
              ></i>
              <div class="pl-3">
                <h5>Email</h5>
                <p>emotionera45@gmail.com</p>
              </div>
            </div>
            <div class="d-flex">
              <i
                class="fa fa-phone-alt d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle"
                style="width: 45px; height: 45px"
              ></i>
              <div class="pl-3">
                <h5>Phone</h5>
                <p>+62 8810 2683 5801</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Contact End -->

    <!-- Footer Start -->
    <div
      class="container-fluid bg-secondary text-white mt-5 py-5 px-sm-3 px-md-5"
    >
      <div class="row pt-5">
        <div class="col-12 col-md-4 mb-5">
          <a
            href=""
            class="navbar-brand font-weight-bold text-primary m-0 mb-4 p-0"
            style="font-size: 40px; line-height: 40px"
          >
            <img
              src="img/logo.jpg"
              alt="Emotionera Logo"
              style="height: 40px"
            />
            <span class="text-white">Emotionera</span>
          </a>
          <p style="text-align: justify">
            Emotionera adalah platform yang membantu individu meningkatkan
            kecerdasan emosional melalui alat, sumber daya, dan latihan berbasis
            penelitian. Platform ini mendukung pengguna dalam mengenali,
            mengekspresikan, dan merespons emosi secara sehat, dengan fokus pada
            kesadaran emosional, hubungan interpersonal, dan pertumbuhan
            pribadi.
          </p>
          <div class="d-flex justify-content-start mt-4">
            <a
              class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
              style="width: 38px; height: 38px"
              href="https://www.tiktok.com/@emotionera24"
              ><img
                src="img/tiktok.png"
                alt="TikTok"
                style="width: 17px; height: 17px"
              />
            </a>
            <a
              class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
              style="width: 38px; height: 38px"
              href="https://www.instagram.com/emotionera_/"
              ><i class="fab fa-instagram"></i
            ></a>
          </div>
        </div>

        <div class="col-12 col-md-4 mb-5 d-flex flex-column align-items-md-center align-items-start">
          <h3 class="text-primary mb-4">Get In Touch</h3>
          <div class="d-flex">
            <h4 class="fa fa-map-marker-alt text-primary"></h4>
            <div class="pl-3">
              <h5 class="text-white">Address</h5>
              <p>Surabaya, Indondesia</p>
            </div>
          </div>
          <div class="d-flex custom-margin">
            <h4 class="fa fa-envelope text-primary"></h4>
            <div class="pl-3">
              <h5 class="text-white">Email</h5>
              <p>emotionera45@gmail.com</p>
            </div>
          </div>
          <div class="d-flex">
            <h4 class="fa fa-phone-alt text-primary"></h4>
            <div class="pl-3">
              <h5 class="text-white">Phone</h5>
              <p>+62 8810 2683 5801</p>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-4 mb-5 d-flex flex-column align-items-md-center align-items-start">
          <h3 class="text-primary mb-4">Quick Links</h3>
          <div class="d-flex flex-column justify-content-start">
            <a class="text-white mb-2" href="index.html"
              ><i class="fa fa-angle-right mr-2"></i>Home</a
            >
            <a class="text-white mb-2" href="about.html"
              ><i class="fa fa-angle-right mr-2"></i>About Us</a
            >
            <a class="text-white mb-2" href="class.html"
              ><i class="fa fa-angle-right mr-2"></i>Our Classes</a
            >
            <a class="text-white mb-2" href="event.html"
              ><i class="fa fa-angle-right mr-2"></i>Event</a
            >
            <a class="text-white mb-2" href="forum.html"
              ><i class="fa fa-angle-right mr-2"></i>Forum</a
            >
            <a class="text-white mb-2" href="blog.html"
              ><i class="fa fa-angle-right mr-2"></i>Our Blog</a
            >
            <a class="text-white" href="contact.html"
              ><i class="fa fa-angle-right mr-2"></i>Contact Us</a
            >
          </div>
        </div>
      </div>

      <!--Footer site-->
      <div
        class="container-fluid pt-5"
        style="border-top: 1px solid rgba(23, 162, 184, 0.2)"
      >
        <p class="m-0 text-center text-white">
          &copy;
          <a class="text-primary font-weight-bold" href="#">Emotionera</a>. All
          Rights Reserved.

          <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
          Designed by
          <a class="text-primary font-weight-bold" href="https://htmlcodex.com"
            >Emotionera</a
          >
        </p>
      </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary p-3 back-to-top"
      ><i class="fa fa-angle-double-up"></i
    ></a>

    <!--AOS-->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
  </body>
</html>
