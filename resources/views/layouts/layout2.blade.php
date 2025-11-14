<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Wisata Dunia</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background-color: #ffffff;
    }

    /* Navbar dengan background gambar */
    .navbar {
      background-image: url('image/bg.jpg');
      background-size: cover;
      background-position: center;
    }

    .navbar-dark .nav-link {
      color: rgb(0, 0, 0);
      font-weight: 500;
    }

    .header-text {
      text-align: center;
      margin-top: 50px;
      color: #000000;
    }

    .card img {
      height: 200px;
      object-fit: cover;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">

      <a class="navbar-brand fw-bold text-white" href="#">Halaman Wisata</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarMenu">
        <ul class="navbar-nav">

          <!-- LINK KE HOME -->
          <li class="nav-item">
            <a class="nav-link" href="/home">Home</a>
          </li>

          <!-- LINK KE ABOUT -->
          <li class="nav-item">
            <a class="nav-link" href="/about">About</a>
          </li>

        </ul>
      </div>

    </div>
  </nav>

  <!-- Header -->
  <div class="container header-text">
    <h4>Halaman ini dibuat oleh M.Hasan Nawawi 101 & M.Ilham 100</h4>
  </div>

  <!-- Gallery -->
  <div class="container mt-4 mb-5">
    <div class="row g-4">

      <div class="col-md-4">
        <div class="card bg-dark text-white">
          <img src="image/ft1.jpg" class="card-img" alt="Acropolis">
          <div class="card-img-overlay d-flex align-items-end">
            <h6 class="card-title">ubege, mtrm</h6>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card bg-dark text-white">
          <img src="image/ft2.jpg" class="card-img" alt="Shibuya">
          <div class="card-img-overlay d-flex align-items-end">
            <h6 class="card-title">bolaa, maik</h6>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card bg-dark text-white">
          <img src="image/ft3.jpg" class="card-img" alt="Cappadocia">
          <div class="card-img-overlay d-flex align-items-end">
            <h6 class="card-title">bolaawoy, mantap</h6>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card bg-dark text-white">
          <img src="image/ft4.jpg" class="card-img" alt="Giza">
          <div class="card-img-overlay d-flex align-items-end">
            <h6 class="card-title">minum, oleng</h6>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card bg-dark text-white">
          <img src="image/ft5.jpg" class="card-img" alt="GWK">
          <div class="card-img-overlay d-flex align-items-end">
            <h6 class="card-title">kocak, oleng</h6>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card bg-dark text-white">
          <img src="image/ft6.jpg" class="card-img" alt="Huayana">
          <div class="card-img-overlay d-flex align-items-end">
            <h6 class="card-title">ayam ijo, otw geprek</h6>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card bg-dark text-white">
          <img src="image/ft7.jpg" class="card-img" alt="Jumeirah">
          <div class="card-img-overlay d-flex align-items-end">
            <h6 class="card-title">turu, duojmt</h6>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card bg-dark text-white">
          <img src="image/ft4.jpg" class="card-img" alt="New York">
          <div class="card-img-overlay d-flex align-items-end">
            <h6 class="card-title">olrng, US</h6>
          </div>
        </div>
      </div>

      <div class="col-md-12">
        <div class="card bg-dark text-white">
          <img src="image/ft1.jpg" class="card-img" alt="Niagara">
          <div class="card-img-overlay d-flex align-items-end">
            <h6 class="card-title">ubege, prode</h6>
          </div>
        </div>
      </div>

    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
