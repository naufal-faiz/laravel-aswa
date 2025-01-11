<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Property List</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
    <script>
        function confirmDelete(event) {
            event.preventDefault();
            if (confirm('APakah kamu yakin untuk menghapus iklan?')) {
                event.target.closest('form').submit();
            }
        }
    </script>
</head>

<body>

    <body>
        <header class="bg-navbar1">
            <div class="d-flex justify-content-between align-items-center" style="text-align: center;">
                <div class="m-3" id="backButton">
                    <img src="{{asset('img/arrow-left.svg')}}" alt="" id="back">
                </div>
                <h2 class="fw-bold">Iklan Saya</h2>
                <div></div>
            </div>
        </header>

        <main style="height: 100%; margin-bottom: 20px">
            <div class="px-5 w-100 mt-3">
                <button onclick="window.location.href='{{ route('properti.create') }}'"
                    class="btn btn-khusus w-100 rounded-5 fs-5"><img src="{{asset('img/leads-icon.svg')}}" alt=""
                        class="pe-1">Buat Iklan</button>
            </div>
            @if (empty($properti))
                <div class="d-flex text-center align-items-center justify-content-center" style="height: 70vh">
                    <h1 class="text-abu opacity-25">Anda belum memiliki iklan</h1>
                </div>
            @else
                @foreach ($properti as $item)
                    <div class="px-5 mt-3">
                        <div class="card p-3 rounded-4 d-flex flex-row gap-5 flex-wrap">
                            <div style="max-width: 530px; max-height: 300px; border: 2px solid black; overflow: hidden"
                                class="rounded-4">
                                <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->gambar }}"
                                    style="width: 100%; height: 100%; object-fit: cover">
                            </div>
                            <div style="width: 40%;">
                                <p style="font-size: 40px; font-weight: 500; color: #776B5D" class="m-0">{{ $item->judul }}
                                </p>
                                <p style="color: #B0A695; font-size: 28px; font-weight: 500">Rp. {{ $item->harga }}</p>
                                <p style="font-size: 24px;">{{ $item->lokasi }}</p>
                                <div class="d-flex gap-3">
                                    <p style="font-size: 20px; color: #776B5D"><img src="{{asset('img/tempat-tidur.svg')}}"
                                            alt="icon" class="me-3">{{ $item->kamar_tidur }}</p>
                                    <p style="font-size: 24px; color: #776B5D">|</p>
                                    <p style="font-size: 20px; color: #776B5D"><img src="{{asset('img/tempat-mandi.svg')}}"
                                            alt="icon" class="me-3">{{ $item->kamar_mandi }}</p>
                                </div>
                                <div class=" d-flex gap-3">
                                    <button
                                        onclick="window.location.href='{{ route('properti.show', $item->id_properti_jual) }}'"
                                        class="btn btn-khusus px-4 py-1 rounded-3" style="font-size: 23px;">Lihat</button>
                                    @if (Auth::check())
                                        <button
                                            onclick="window.location.href='{{ route('properti.edit', $item->id_properti_jual) }}'"
                                            class="btn btn-khusus px-4 py-1 rounded-3" style="font-size: 23px;">Edit</button>
                                        <form action="{{ route('properti.destroy', $item->id_properti_jual) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-login px-4 py-1 rounded-3" style="font-size: 23px;" type="submit"
                                                onclick="confirmDelete(event)">Delete</button>
                                        </form>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </main>
    </body>
    <script>
        const backButton = document.getElementById("backButton");

        backButton.addEventListener('click', () => {
            window.history.back()
        })
    </script

</html>