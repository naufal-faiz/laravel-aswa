<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Properti</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
</head>

<body style="background-color: #F8F7F4;">
    <header class="bg-navbar1">
        <div class="d-flex justify-content-between align-items-center" style="text-align: center;">
            <div class="m-3" id="backButton">
                <img src="../img/arrow-left.svg" alt="" id="back">
            </div>
            <h2 class="fw-bold">Iklan Milik Anda</h2>
            <div></div>
        </div>
    </header>

    <main class="d-flex justify-content-center">
        <div class="container">
            <div class="d-flex align-items-center justify-content-center gap-1 mt-4">
                <div style="width: 100%; z-index: 19;" class="rounded-2 border-khusus">
                    <img src="{{ asset('storage/' . $properti->gambar) }}" class="w-100 rounded-2" height="700"
                        alt="{{ $properti->gambar }}">
                </div>
            </div>

            <div class="title mt-3">
                <h1 class="text-coklat fw-bold" style="letter-spacing: -.05em">{{ $properti->judul }}</h1>
            </div>
            <div class="mb-3">
                <p class="text-krem fw-bold mt-2" style="font-size: 21px;">Rp. {{ $properti->harga }}</p>
            </div>
            <div class="d-flex gap-3 mb-4">
                <img src="../img/location.svg" alt="" width="20" height="20">
                <p class="fw-semibold" style="font-size: .8rem;">{{ $properti->lokasi }}</p>
            </div>
            <div class="d-flex mb-5">
                <div class="d-flex flex-column align-items-center m-3 justify-content-center rounded-4"
                    style="box-shadow: 0 0 10px rgba(0,0,0,.25) inset; width: 300px; height: 120px; font-size: 1.2rem;">
                    <p class="text-coklat fw-medium m-0">Kamar Tidur</p>
                    <p class="text-coklat fw-medium m-0">{{ $properti->kamar_tidur }}</p>
                </div>
                <div class="d-flex flex-column align-items-center m-3 justify-content-center rounded-4"
                    style="box-shadow: 0 0 10px rgba(0,0,0,.25) inset; width: 300px; height: 120px; font-size: 1.2rem;">
                    <p class="text-coklat fw-medium m-0">Kamar Mandi</p>
                    <p class="text-coklat fw-medium m-0">{{ $properti->kamar_mandi }}</p>
                </div>
            </div>

            <div class="keterangan mt-4 d-flex flex-column gap-2">
                <h3 class="text-coklat">Keterangan</h3>
                <p class="fw-light">
                {{ $properti->deskripsi }}
                </p>
            </div>
        </div>
    </main>

    <script>
        const backButton = document.getElementById("backButton");

        backButton.addEventListener('click', () => {
            window.history.back()
        })
    </script>
</body>

</html>