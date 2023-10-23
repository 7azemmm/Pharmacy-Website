<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Signup</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

        * {
            font-family: 'Poppins', sans-serif;
        }

        .wrapper {
            background: #838392f8;
            padding: 0 20px 0 20px;
        }

        .main {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .side-image {
            background-image: url("https://images.unsplash.com/photo-1560582861-45078880e48e?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max&ixid=eyJhcHBfaWQiOjEyMDd9");
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            border-radius: 10px 0 0 10px;
            position: relative;
        }

        .row {
            color: #fff;
            width: 950px;
            height: 600px;
            border-radius: 10px;
            background: #000039;
            padding: 0px;
            box-shadow: 10px 10px 20px 7px rgb(10, 10, 10);
        }

        .text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .text p {
            color: #fff;
            font-size: 20px;
        }

        i {
            font-weight: 400;
            font-size: 15px;
        }

        .right {
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .input-box {
            width: 330px;
            box-sizing: border-box;
        }

        img {
            width: 35px;
            position: absolute;
            top: 30px;
            left: 30px;
        }

        .input-box header {
            font-weight: 700;
            text-align: center;
            margin-bottom: 45px;
        }

        .input-field {
            display: flex;
            flex-direction: column;
            position: relative;
            padding: 0 10px 0 10px;
        }

        .input {
            height: 45px;
            width: 100%;
            background: transparent;
            border: none;
            border-bottom: 1px solid rgba(0, 0, 0, 0.2);
            outline: none;
            margin-bottom: 20px;
            color: #fff;
        }

        .input-box .input-field label {
            position: absolute;
            top: 10px;
            left: 10px;
            pointer-events: none;
            transition: .5s;
        }

        .input-field input:focus~label {
            top: -10px;
            font-size: 13px;
        }

        .input-field input:valid~label {
            top: -10px;
            font-size: 13px;
            color: #5d5076;
        }

        .input-field .input:focus,
        .input-field .input:valid {
            border-bottom: 1px solid #743ae1;
        }

        .input-field:hover {
            color: #f4ec07;
        }

        .submit {
            border: none;
            outline: none;
            height: 45px;
            color: #fff;
            background: #1c1cf0;
            border-radius: 5px;
            transition: .4s;
        }

        .submit:hover {
            background: #0000cd;
        }

        .signin {
            text-align: center;
            font-size: small;
            margin-top: 25px;
        }

        span a {
            text-decoration: none;
            font-weight: 700;
            color: #fff;
            transition: .5s;
        }

        span a:hover {
            text-decoration: underline;
            color: #f4ec07;
        }

        @media only screen and (max-width: 768px) {
            .side-image {
                border-radius: 10px 10px 0 0;
            }

            img {
                width: 35px;
                position: absolute;
                top: 20px;
                left: 47%;
            }

            .text {
                position: absolute;
                top: 70%;
                text-align: center;
            }

            .text p,
            i {
                font-size: 16px;
            }

            .row {
                max-width: 420px;
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="container main">
            <div class="row">
                <div class="col-md-6 side-image">
                </div>

                <div class="col-md-6 right">

                    <div class="input-box">

                        <header>Please login</header>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <p> {{ $error }}
                                    <p>
                                @endforeach
                            </div>
                        @endif
                        @if (session()->has('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                        @if (session()->has('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        <form action="{{ route('login') }}" id="loginform" method="post">
                            @csrf
                            <div class="input-field">
                                <input type="text" class="input" id="email" name="email" required="">
                                <label for="email">Email</label>
                                <div style="color: red" class="error-message" id="name-error"></div>
                            </div>
                            <div class="input-field">
                                <input type="password" class="input" id="password" name="password" required="">
                                <label for="pass">Password</label>
                                <div style="color: red" class="error-message" id="password-error"></div>
                            </div>
                            <div class="input-field">
                                <input type="submit" class="submit" value="Login">
                            </div>
                            <div class="signin">
                                <span>Don't have an account? <a href="{{ route('signupform') }}">Signup in
                                        here</a></span>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
{{-- <script>
    document.addEventListener("DOMContentLoaded", function() {
        const form = document.getElementById("loginform");

        form.addEventListener("submit", function(event) {
            const name = document.getElementById("name").value;
            const password = document.getElementById("password").value;


            const nameError = document.getElementById("name-error");
            const passwordError = document.getElementById("password-error");

            nameError.textContent = "";
            passwordError.textContent = "";

            let isValid = true;

            if (name == "") {
                nameError.textContent = "Please enter your name.";
                isValid = false;
            }
            if (password == "") {
                passwordError.textContent = "Please enter your password.";
                isValid = false;
            } else if (password.length < 8) {
                passwordError.textContent = "password must be more than 8 chars";
                isValid = false;
            }
            if (!isValid) {
                event.preventDefault();
            }
        });
    });
</script> --}}

</html>
