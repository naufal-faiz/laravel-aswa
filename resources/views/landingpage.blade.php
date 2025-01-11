<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temukan Hunian Anda</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script>
        function filterProperties(type) {
            if (type === '') {
                window.location.href = '{{ route('landingpage') }}';
            } else {
                window.location.href = '{{ route('landingpage') }}?filter=' + type;
            }
        }
    </script>
</head>

<div>
    <header style="display: inline;">
        <div class="jumbotron p-2 d-flex gap-4 justify-content-center align-items-center text-coklat"
            style="background-color: #EBE3D5;">
            <div class="d-flex justify-content-center align-items-center">
                <img src="{{ asset('img/Logo Aswa Lengkap 4.webp')}}" alt="" width="50">
            </div>
            <div class="d-flex align-items-center">
                <h1 class="me-5" style="font-size: 50px;">Residentiae</h1>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg p-1"
            style="position: sticky; z-index: 999; top: 0; background-color: #776B5D; color: white;">
            <div class="container-fluid d-flex justify-content-between">
                <div>
                    <button class="navbar-toggler border-white" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarText">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-3">
                            <li class="nav-item">

                            </li>
                            <li class="nav-item">
                                <a onclick="filterProperties('')" class="nav-link text-white nav-hover cursor-pointer"
                                    aria-current="page">Dijual</a>
                            </li>
                            <li class="nav-item">
                                <a onclick="filterProperties('1')" class="nav-link text-white nav-hover cursor-pointer"
                                    aria-current="page">Subsidi</a>
                            </li>
                            <li class="nav-item">
                                <a onclick="filterProperties('2')" class="nav-link text-white nav-hover cursor-pointer"
                                    aria-current="page">Cluster</a>
                            </li>
                            <li class="nav-item">
                                <a onclick="filterProperties('3')" class="nav-link text-white nav-hover cursor-pointer"
                                    aria-current="page">Take Over</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="right">
                    @if (Auth::check())
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <button onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                            class="btn btn-login">Logout</button>
                    @else
                        <button onclick="window.location.href='{{ route('login') }}'" class="btn btn-login">Login</button>
                        <button onclick="window.location.href='{{ route('register') }}'"
                            class="btn btn-login">Register</button>
                    @endif
                </div>
            </div>
        </nav>
    </header>

    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide mx-5 my-3 shadow rounded-5" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                    aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"
                    aria-label="Slide 6"></button>
            </div>
            <div class="carousel-inner rounded-5">
                <div class="carousel-item active">
                    <img src="img/carousel1.webp" class="d-block w-100" alt="Aswa Carousel" height="500" width="600">
                </div>
                <div class="carousel-item">
                    <img src="img/carousel2.webp" class="d-block w-100" alt="Aswa Carousel" height="500" width="600">
                </div>
                <div class="carousel-item">
                    <img src="img/carousel3.webp" class="d-block w-100" alt="Aswa Carousel" height="500" width="600">
                </div>
                <div class="carousel-item">
                    <img src="img/carousel4.webp" class="d-block w-100" alt="Aswa Carousel" height="500" width="600">
                </div>
                <div class="carousel-item">
                    <img src="img/carousel5.webp" class="d-block w-100" alt="Aswa Carousel" height="500" width="600">
                </div>
                <div class="carousel-item">
                    <img src="img/carousel6.webp" class="d-block w-100" alt="Aswa Carousel" height="500">
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center m-3 mt-4">
        <h1 class="text-coklat">Penawaran Terbaik Kami</h1>
    </div>

    <div class="d-flex gap-3 text-center overflow-x-auto justify-content-center">
        @foreach ($properti as $property)
            <div class="card p-1 shadow border border-none" id="isi-kartu" style="width: 18rem; min-width: 18rem;">
                <img src="{{ asset('storage/' . $property->gambar) }}" class="card-img-top"
                    style="height: 10rem; border: 1px solid #776B5D;" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-coklat fw-bold">{{ $property->judul }}</h5>
                    <p class="card-text m-0 fw-medium text-krem">Rp. {{ $property->harga }}</p>
                    <p class="card-text m-0">{{ $property->lokasi }}</p>
                </div>
                <div class="mb-3">
                                <button onclick="window.location.href='{{ route('properti.show', $property->id_properti_jual) }}'"
                                    class="btn btn-khusus">Lihat
                                    Disini</button>
                            </div>
            </div>
        @endforeach
    </div>

    <!-- SPONSOR -->
    <div class="d-flex justify-content-center m-3 mt-5 title">
        <h1 class="text-coklat">Properti Yang Kami Jangkau</h1>
    </div>

    <div class="d-flex justify-content-center overflow-x-auto" style="gap: 140px">
        <img src="img/JID2021005924.webp" alt="" class="rounded-circle shadow-sm" width="75
            ">

        <img src="img/Gambar5.webp" alt="" class="rounded-circle shadow-sm bg-white" width="75
            ">
        <img src="img/Gambar4.webp" alt="" class="rounded-circle shadow-sm bg-white" width="75
            ">
        <img src="img/Suropati-logo.webp" alt="" class="rounded-circle shadow-sm bg-white" width="75
            ">
        <img src="img/images.webp" alt="" class="rounded-circle shadow-sm bg-white" width="75
            ">
        <img src="img/Gambar10.webp" alt="" class="rounded-circle shadow-sm bg-white" width="75
            ">
    </div>
    <!-- SPONSOR END -->

    <!-- LEADS START -->
    <div class="container d-flex justify-content-center mt-5 ">
        <div class="leads-container shadow w-100 mx-5 d-flex flex-row p-3 flex-wrap bg-white rounded-3 gap-3">
            <div class="d-flex justify-content-center align-items-center">
                <img src="img/icon 1.webp" class="" width="200" alt="...">
            </div>
            <div class="leads-text d-flex flex-column gap-3 justify-content-center">
                <h3 class="text-coklat fw-bold">Ingin menjual atau menyewakan properti anda?</h3>
                <h5 class="text-krem fw-bold">Tayangkan iklan hanya dengan beberapa langkah</h5>
                <div class="d-flex gap-3 flex-wrap">
                    <a href="{{ route('properti.index') }}" class="btn btn-khusus" style="width: 180px;">Pasang iklan
                        disini!</a>
                </div>
            </div>

        </div>
    </div>
    <!-- RATING USER START -->
    <div class="d-flex justify-content-center mb-3 mt-5 title">
        <h1 class="text-coklat">Ulasan</h1>
    </div>

    <div class="d-flex justify-content-center mx-5 mb-5">
        <div class="d-flex justify-content-center flex-wrap gap-5">
            <div class="d-flex flex-column bg-white rounded-3 shadow" style="width: 20rem;">
                <div class="p-3 text-center" style="height: 75%;">
                    <q>Dengan adanya website aswa memudahkan saya untuk mencari tempat tinggal di daerah
                        sekitar yang ingin saya tempati.</q>
                </div>
                <div class="d-flex align-items-center p-2 gap-4 p-2 rounded-bottom-3"
                    style="background-color: #ebe3d5;">
                    <img src="img/icon3.webp" width="50" alt="">
                    <p class="fs-5 fw-medium text-coklat m-0">User Aswa</p>
                </div>
            </div>
            <div class="d-flex flex-column bg-white rounded-3 shadow" style="width: 20rem;">
                <div class="p-3 text-center" style="height: 75%;">
                    <q>Terimakasih aswa karena sudah memudahkan saya untuk mencari properti terbaik.</q>
                </div>
                <div class="d-flex align-items-center p-2 gap-4 p-2 rounded-bottom-3"
                    style="background-color: #ebe3d5;">
                    <img src="img/icon3.webp" width="50" alt="">
                    <p class="fs-5 fw-medium text-coklat m-0">User Aswa</p>
                </div>
            </div>
            <div class="d-flex flex-column bg-white rounded-3 shadow" style="width: 20rem;">
                <div class="p-3 text-center" style="height: 75%;">
                    <q>Aswa Website sangat membantu, saya jadi bisa menemukan rumah yag saya impikan
                        dibekasi tanpa
                        pusing untuk surver ke banyak tempat</q>
                </div>
                <div class="d-flex align-items-center p-2 gap-4 p-2 rounded-bottom-3"
                    style="background-color: #ebe3d5;">
                    <img src="img/icon3.webp" width="50" alt="">
                    <p class="fs-5 fw-medium text-coklat m-0">User Aswa</p>
                </div>
            </div>
        </div>
    </div>

    <!-- RATING USER END -->
    </main>

    <footer class="container-fluid p-2 d-flex justify-content-around flex-wrap gap-5" style="background: #e6e6e6;">
        <div class="social-media d-flex flex-column gap-2 align-items-center" style="width: 20rem">
            <h5 class="fw-bold text-abu">Social Media</h5>
            <div class="d-flex gap-3">
                <a href="https://instagram.com/_tuyy68">
                    <img src="img/icon 4.webp" class="me-2" alt="" width="30">
                </a>
                <a href="https://www.facebook.com/profile.php?id=100093661991910&mibextid=ZbWKwL">
                    <img src="img/icon 5.webp" class="me-2" alt="" width="30">
                </a>
                <a href="https://www.tiktok.com/@gunturprakoso359?_t=8maBjJB9ZmD&_r=1">
                    <img src="img/icon 6.webp" class="me-2" alt="" width="30">
                </a>
            </div>
        </div>

        <div class="tentang d-flex flex-column gap-2 align-items-center text-abu" style="width: 20rem">
            <h5 class="fw-bold">Tentang</h5>
            <ul style="list-style-type: none;" class="d-flex flex-column gap-2">
                <li><a class="text-abu" style="text-decoration: none;" href="footer/s&k.html">Syarat & Ketentuan</a>
                </li>
                <li><a class="text-abu" style="text-decoration: none;" href="footer/kebijakan.html">Kebijakan
                        Privasi</a></li>
                <li><a class="text-abu" style="text-decoration: none;" href="footer/tentang.html">Tentang Kami</a>
                </li>
                <li><a class="text-abu" style="text-decoration: none;" href="footer/hakCipta.html">Hak Cipta</a></li>
            </ul>
        </div>

        <div class="kontak d-flex flex-column gap-2 align-items-center text-abu" style="width: 20rem;">
            <h5 class="fw-bold">Kontak</h5>
            <div class="d-flex align-items-center gap-3">
                <img src="img/icon 7.webp" alt="" width="30">
                <a class="text-abu text-decoration-none" href="tel:+622189229653">021-89229653 ( Office )</a>
            </div>
            <div class="d-flex align-items-center gap-3">
                <img src="img/whatsapp.svg" alt="" width="30">
                <a class="text-abu text-decoration-none"
                    href="https://api.whatsapp.com/send?phone=6283805320102">0838-0532-0102 ( Guntur )</a>
            </div>
            <div class="d-flex align-items-center gap-3">
                <img src="img/whatsapp.svg" alt="" width="30">
                <a class="text-abu text-decoration-none"
                    href="https://api.whatsapp.com/send?phone=62895324876803">0895-3248-76803 ( Putra )</a>
            </div>
        </div>
    </footer>
    </body>

</html>