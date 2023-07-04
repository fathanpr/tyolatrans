@extends('master.master')
@section('content')
    @extends('master.navbar')
    <section id="home">
        <div class="home">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6">
                        <h4 style="font-size: 2.5vw">#RentCar&Tour</h4>
                        <p style="font-size: 5vw; color:#343a40;font-weight:bold;">Pilihan Terbaik Tour dan Travel Di Majalengka</p>
                        <span class="text first-text">Kami Menyediakan Paket</span>
                        <span class="text sec-text">City Tour Majalengka</span>
                    </div>
                    <div class="col-lg-6">
                        <img class="blob" src="{{ asset('/img/blob-final.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="about">
        <div class="about">
                <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-12">
                        <div class="logo d-flex justify-content-center">
                            <img class="m-auto" src="{{ asset('/img/logo-no-text.png') }}" alt="" width="60px">
                        </div>
                        <h2 style="text-align: center;color: #3f5aff;font-weight:bold;">Tentang Kami</h2>
                        <p>Tyola Trans adalah sebuah perusahaan jasa di bidang transportasi yang berfokus pada layanan tour dan travel terbaik di wilayah Majalengka yang berdiri sejak 2018. Dengan pengalaman bertahun-tahun dalam industri ini, Tyola Trans telah menjelma menjadi salah satu penyedia jasa transportasi terkemuka di wilayah Majalengka dan sekitarnya.
                            Layanan yang disediakan oleh Tyola Trans mencakup perjalanan wisata, perjalanan bisnis baik di dalam maupun di luar kota Majalengka. Perusahaan ini menyediakan armada kendaraan yang modern, aman, dan nyaman, termasuk mobil dengan fasilitas lengkap. Selain itu, Tyola Trans juga menawarkan berbagai paket tur yang disesuaikan dengan kebutuhan dan preferensi pelanggan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="paket">
        <div class="paket">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-8">
                        <h2 class="mb-2" style="font-weight: bold">Paket Tour dan Rental Mobil</h2>
                    </div>
                    <div class="col-md-4 m-auto" style="text-align: end">
                        <a href="#">Trip Lainnya</a>
                    </div>
                <!--Card Tour-->
                <div class="col-md-4">
                    <div class="card trip h-80 mt-4">
                        <img src="{{ asset('/img/carousel-5.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title p-3">Panyaweuyan Trip</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i class="bi bi-cash-coin"></i> Rp 320.000,-</li>
                                <li class="list-group-item"><i class="bi bi-person-check"></i> Max. 4 Orang</li>
                                <li class="list-group-item">Deskripsi: <br>Free HTM Panyaweuyan Terasering, Drop-off Lokasi Penjemputan</li>
                            </ul>
                        </div>
                        <div class="card-footer" style="text-align: center">
                            <a href="https://wa.link/p6gcqp" target="_blank" class="btn btn-primary">Booking Sekarang</a>
                        </div>
                    </div>   
                </div>
                <div class="col-md-4">
                    <div class="card trip h-80 mt-4">
                        <img src="{{ asset('/img/carousel-4.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title p-3">Cikadongdong Trip</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i class="bi bi-cash-coin"></i> Rp 350.000,-</li>
                                <li class="list-group-item"><i class="bi bi-person-check"></i> Max. 4 Orang</li>
                                <li class="list-group-item">Deskripsi: <br>Free HTM Cikadongdong River Tubing, Drop-off Lokasi Penjemputan</li>
                            </ul>
                        </div>
                        <div class="card-footer" style="text-align: center">
                            <a href="https://wa.link/btezgg" target="_blank" class="btn btn-primary">Booking Sekarang</a>
                        </div>
                    </div>   
                </div>
                <div class="col-md-4">
                    <div class="card trip h-80 mt-4">
                        <img src="{{ asset('/img/carousel-3.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title p-3">Situ Cipanten Trip</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i class="bi bi-cash-coin"></i> Rp 275.000,-</li>
                                <li class="list-group-item"><i class="bi bi-person-check"></i> Max. 4 Orang</li>
                                <li class="list-group-item">Deskripsi: <br>Free HTM Situcipanten, Drop-off Lokasi Penjemputan</li>
                            </ul>
                        </div>
                        <div class="card-footer" style="text-align: center">
                            <a href="https://wa.link/nqh5ld" target="_blank" class="btn btn-primary">Booking Sekarang</a>
                        </div>
                    </div>   
                </div>
            </div>
            <div class="row d-flex justify-content-center mt-5">
                <h2 style="text-align: center;color: #3f5aff;font-weight:bold;" class="mt-5">Pilihan Jenis Mobil</h2>
                <div class="col-md-4 d-flex justify-content-center">
                    <div class="card mobil" style="width: 18rem;background-color:#f8f9fa;">
                        <img src="{{ asset('/img/calya-no-bg.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <span class="badge rounded-pill text-bg-warning" style="color:#343a40!important">Pilihan Favorit</span>
                            <ul class="list-group list-group-flush bg-transparent">
                                <li class="list-group-item"><h3>Toyota Calya</h3></li>
                                <li class="list-group-item harga"><i class="bi bi-cash-coin"></i> Mulai dari 299K/Hari</li>
                                <li class="list-group-item kapasitas">Kapasitas Penumpang Maksimal 6 Orang Dewasa</li>
                              </ul>
                        </div>
                      </div>
                </div>
                <div class="col-md-4  d-flex justify-content-center">
                    <div class="card mobil" style="width: 18rem;background-color:#f8f9fa;">
                        <img src="{{ asset('/img/ertiga.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <ul class="list-group list-group-flush bg-transparent">
                                <li class="list-group-item"><h3>Suzuki Ertiga</h3></li>
                                <li class="list-group-item harga"><i class="bi bi-cash-coin"></i> Mulai dari 399K/Hari</li>
                                <li class="list-group-item kapasitas">Kapasitas Penumpang Maksimal 6 Orang Dewasa</li>
                              </ul>
                        </div>
                      </div>
                </div>
                <div class="col-md-4  d-flex justify-content-center">
                    <div class="card mobil" style="width: 18rem;background-color:#f8f9fa;">
                        <img src="{{ asset('/img/avanza.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <ul class="list-group list-group-flush bg-transparent">
                                <li class="list-group-item"><h3>All New Avanza</h3></li>
                                <li class="list-group-item harga"><i class="bi bi-cash-coin"></i> Mulai dari 399K/Hari</li>
                                <li class="list-group-item kapasitas">Kapasitas Penumpang Maksimal 6 Orang Dewasa</li>
                              </ul>
                        </div>
                      </div>
                </div>
                <div class="col-md-4  d-flex justify-content-center">
                    <div class="card mobil" style="width: 18rem;background-color:#f8f9fa;">
                        <img src="{{ asset('/img/agya.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <ul class="list-group list-group-flush bg-transparent">
                                <li class="list-group-item"><h3>Toyota Agya</h3></li>
                                <li class="list-group-item harga"><i class="bi bi-cash-coin"></i> Mulai dari 299K/Hari</li>
                                <li class="list-group-item kapasitas">Kapasitas Penumpang Maksimal 4 Orang Dewasa</li>
                              </ul>
                        </div>
                      </div>
                </div>
                <div class="col-md-4  d-flex justify-content-center">
                    <div class="card mobil" style="width: 18rem;background-color:#f8f9fa;">
                        <img src="{{ asset('/img/mobilio.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <span class="badge rounded-pill text-bg-warning" style="color:#343a40!important">Pilihan Favorit</span>
                            <ul class="list-group list-group-flush bg-transparent">
                                <li class="list-group-item"><h3>Honda Brio</h3></li>
                                <li class="list-group-item harga"><i class="bi bi-cash-coin"></i> Mulai dari 299K/Hari</li>
                                <li class="list-group-item kapasitas">Kapasitas Penumpang Maksimal 4 Orang Dewasa</li>
                              </ul>
                        </div>
                      </div>
                </div>
                <div class="col-md-4  d-flex justify-content-center">
                    <div class="card mobil" style="width: 18rem;background-color:#f8f9fa;">
                        <img src="{{ asset('/img/xpander.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <ul class="list-group list-group-flush bg-transparent">
                                <li class="list-group-item"><h3>Mitsubishi Xpander</h3></li>
                                <li class="list-group-item harga"><i class="bi bi-cash-coin"></i> Mulai dari 499K/Hari</li>
                                <li class="list-group-item kapasitas">Kapasitas Penumpang Maksimal 6 Orang Dewasa</li>
                              </ul>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </section>
    <section id="kontak">
        <div class="kontak mt-5">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <h2 style="text-align: start;font-weight:bold;">Hubungi Kami</h2>
                    <div class="col-md-6 mb-5">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d2801.200741229694!2d108.24408155573947!3d-6.830956082813409!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNsKwNDknNTEuNCJTIDEwOMKwMTQnNDIuNCJF!5e0!3m2!1sid!2sid!4v1688108521647!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="col-md-2">
                        <h4><i class="bi bi-telephone-fill"></i> Seluler</h4>
                        <h6>0822-1631-4074</h6>
                        <br>
                        <h4><i class="bi bi-whatsapp"></i> Whatsapp</h4>
                        <h6><a href="https://wa.me/628987335266" target="_blank">0822-1631-4074</a></h6>
                        <br>
                        <h4><i class="bi bi-instagram"></i> Instagram</h4>
                        <h6>@tyolatrans.mjl</h6>
                        <br>
                    </div>
                    <div class="col-md-4">
                        <h4><i class="bi bi-geo-alt-fill"></i> Alamat</h4>
                        <p>Gang Sinar Pagi RT/RW 007/003 No.21, Kelurahan Tonjong, Kecamatan Majalengka, Kabupaten Majalengka</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @extends('master.fab')
    <script type="text/javascript" src="{!! asset('assets/js/typingtext.js') !!}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script type="text/javascript">
        function scrollToSection(sectionId) {
        var element = document.getElementById(sectionId);

        element.scrollIntoView({ top:-20 ,behavior: "smooth" });
        }
    </script>
@endsection