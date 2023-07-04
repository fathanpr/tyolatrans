<nav class="navbar navbar-expand-lg bg-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="{{ asset('/img/logo-with-text.png') }}" alt=""  width="128" height="36">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">Beranda</a>
          </li>
          <li class="nav-item">
            <button class="nav-link" onclick="scrollToSection('about')">Tentang</button>
          </li>
          <li class="nav-item">
            <button class="nav-link" onclick="scrollToSection('paket')">Paket</button>
          </li>
          <li class="nav-item">
            <button class="nav-link" onclick="scrollToSection('kontak')">Kontak</button>
          </li>
          <li class="nav-item">
            <a class="nav-link bookingsekarang" href="https://wa.link/g7bfz9" target="_blank">Booking</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>