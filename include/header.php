<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Fiberflow</title>
  <link rel="icon" type="image/x-icon" href="assets/images/resources/banner-icon.ico">
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="assets/vendors/animate/animate.min.css">
  <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="assets/vendors/twoet-icons/flaticon_twoet.css">
  <link rel="stylesheet" href="assets/vendors/icomoon/style.css">
  <link rel="stylesheet" href="assets/vendors/swiper/swiper-bundle.min.css">
  <link rel="stylesheet" href="assets/vendors/bootstrap-select-main/bootstrap-select.min.css">
  <link rel="stylesheet" href="assets/vendors/youtube-popup/youtube-popup.css">
  <link rel="stylesheet" href="assets/plugins/sweetalert/sweetalert.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/responsive.css">

  <style>
    @media only screen and (max-width: 767px) {
      .menu-btn {
        padding: 4px 0 !important;
      }
    }

    .menu-btn {
      padding: 20px 0 !important;
    }

    .navbar {
      position: fixed;
      top: 10px;
      left: 50%;
      transform: translateX(-50%);
      width: 90%;
      background: rgba(255, 255, 255, 0.7);
      backdrop-filter: blur(15px);
      box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
      border-radius: 30px;
      padding: 10px 30px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      z-index: 1000;
    }

    .navbar .brand-logo img {
      height: 50px;
      transition: transform 0.3s ease;
    }

    .navbar .brand-logo img:hover {
      transform: scale(1.2);
    }

    .navbar .nav {
      display: flex;
      gap: 30px;
      list-style: none;
      padding: 0;
      margin: 0;
      justify-content: center;
    }

    .navbar .nav-link {
      color: #333;
      font-weight: 500;
      text-decoration: none;
      font-size: 1rem;
      transition: transform 0.3s ease, color 0.3s ease;
    }

    .navbar .nav-link:hover {
      color: rgb(255, 0, 85);
      transform: scale(1.1);
    }

    /* Location Modal Styling */
    .location-modal {
      position: fixed;
      inset: 0;
      display: none;
      align-items: center;
      justify-content: center;
      z-index: 9999;
    }

    .location-modal.active {
      display: flex;
    }

    .location-modal-backdrop {
      position: absolute;
      inset: 0;
      backdrop-filter: blur(6px);
      background-color: rgba(0, 0, 0, 0.4);
    }

    .location-modal-content {
      position: relative;
      background: #fff;
      padding: 30px 40px;
      border-radius: 16px;
      box-shadow: 0 10px 40px rgba(0, 0, 0, 0.3);
      animation: flipIn 0.5s ease;
      z-index: 10;
      text-align: center;
      min-width: 280px;
    }

    .location-modal-content h4 {
      font-weight: bold;
      margin-bottom: 20px;
    }

    .location-list {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .location-list li {
      padding: 10px 0;
      font-size: 18px;
      cursor: pointer;
      transition: 0.3s ease;
    }

    .location-list li:hover {
      color: #00bcd4;
      transform: scale(1.05);
    }

    @keyframes flipIn {
      from {
        transform: rotateY(90deg);
        opacity: 0;
      }
      to {
        transform: rotateY(0);
        opacity: 1;
      }
    }
  </style>
</head>

<body class="custom-cursor">
  <div class="custom-cursor-one"></div>
  <div class="custom-cursor-two"></div>

  <!-- Preloader -->
  <div class="preloader">
    <div class="preloader-circle"></div>
    <div class="preloader-circle-2"></div>
  </div>

  <div class="page-wrapper">
    <nav class="navbar">
      <div class="brand-logo">
        <a href="index.php"><img src="assets/images/logo/logo-h.png" alt="FiberFlow Logo"></a>
      </div>

      <!-- Location Button -->
      <div>
        <button class="btn btn-outline-dark" id="openLocationModal">
          <i class="fas fa-map-marker-alt me-1"></i>
          <span id="selectedLocation">Select Location</span>
        </button>
      </div>

      <!-- Nav Links -->
      <ul class="nav">
        <li><a href="index.php" class="nav-link">Home</a></li>
        <li><a href="about.php" class="nav-link">About</a></li>
        <li><a href="plans.php" class="nav-link">Plans</a></li>
        <li><a href="contact.php" class="nav-link">Contact</a></li>
        <li><a href="complaints.php" class="nav-link">Complaints</a></li>
        <li><a href="review.php" class="nav-link">Review</a></li>
      </ul>
    </nav>

    <!-- Location Modal -->
    <div id="locationModal" class="location-modal">
      <div class="location-modal-backdrop"></div>
      <div class="location-modal-content">
        <h4>Select Your Location</h4>
        <ul class="location-list">
          <li onclick="selectLocation('Coimbatore')">Coimbatore</li>
          <li onclick="selectLocation('Pollachi')">Pollachi</li>
          <li onclick="selectLocation('Tiruppur')">Kinathukadavu</li>
		  <li onclick="selectLocation('Tiruppur')">Tiruppur</li>
		  <li onclick="selectLocation('Tiruppur')">Udumalpet</li>
        </ul>
      </div>
    </div>
  </div>

  <!-- Scripts -->
  <script>
    const openBtn = document.getElementById("openLocationModal");
    const modal = document.getElementById("locationModal");

    openBtn.addEventListener("click", () => {
      modal.classList.add("active");
    });

    modal.addEventListener("click", (e) => {
      if (e.target.classList.contains("location-modal-backdrop")) {
        modal.classList.remove("active");
      }
    });

    function selectLocation(location) {
      localStorage.setItem("userLocation", location);
      document.getElementById("selectedLocation").textContent = location;
      modal.classList.remove("active");
    }

    document.addEventListener("DOMContentLoaded", function () {
      const saved = localStorage.getItem("userLocation");
      if (saved) {
        document.getElementById("selectedLocation").textContent = saved;
      }
    });
  </script>
</body>
</html>
