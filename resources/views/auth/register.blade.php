<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <style>
        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container-form {
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 0 16px rgba(0, 0, 0, .25);
            padding: 15px;
        }

        h1 {
            color: #776B5D;
        }

        input {
            border: 2px solid #776B5D;
            padding: 5px;
            border-radius: 8px;
        }

        ::placeholder {
            color: #776B5D;
        }

        ul {
            list-style-type: none;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 10px;
            padding-right: 40px;
        }

        button {
            margin-top: 10px;
            padding: 8px;
            border-radius: 10px;
            background-color: #776B5D;
            color: white;
            border: 2px solid #776B5D;
        }

        button:hover {
            background-color: white;
            color: #776B5D;
            border: 2px solid #776B5D;
            transition: .2s ease-in-out;
        }

        .wrong p {
            color: red;
            display: none;
            font-style: italic;
        }
    </style>
</head>

<body>
<div class="m-3" id="backButton">
        <img src="../img/arrow-left.svg" alt="" id="back">
    </div>
    <div class="container">
        <div class="container-form">
            <h1>REGISTER</h1>
            <form action="{{ Route('register') }}" method="POST">
            @csrf
                <ul>
                    <li><input type="text" placeholder="Username" id="name" name="name"></li>
                    <li><input type="email" placeholder="Email" id="email" name="email"></li>
                    <li><input type="text" placeholder="No. Telepon" id="number" name="no_telepon"></li>
                    <li><input type="password" placeholder="Password" id="password" name="password"></li>
                </ul>
                <button type="submit">Buat akun!</button>
            </form>
            <p>Sudah memiliki akun? Masuk <a href="{{ route('login') }}">disini</a></p>
        </div>
        <div class="wrong">
        </div>
    </div>

    <script type="text/javascript">
        const backButton = document.getElementById("backButton");

        backButton.addEventListener('click', () => {
            window.history.back()
        })
    </script>
</body>

</html>