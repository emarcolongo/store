<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','Online Store')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary py-4">
        <div class="container">
            <a href="{{ route("home.index") }}" class="navbar-brand">Online Store</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto">
                    <a href="https://github.com/PracticalBooks/Practical-Laravel/" class="nav-link active" target="_blank">github</a>
                    <a href="{{ route("home.index") }}" class="nav-link active">Home</a>
                    <a href="{{ route("product.index") }}" class="nav-link active">Products</a>
                    <a href="{{ route("cart.index") }}" class="nav-link active">Cart</a>
                    <a href="{{ route("home.about") }}" class="nav-link active">About</a>
                    <div class="vr bg-white mx-2 d-none d-lg-block"></div>
                    @guest
                        <a href="{{ route('login') }}" class="nav-link active"><i class="bi-box-arrow-right"></i> Login</a>
                        <a href="{{ route('register') }}" class="nav-link active"><i class="bi-person-plus"></i> Register</a>
                    @else
                        <a href="{{ route('myaccount.orders') }}" class="nav-link active">My Orders</a>
                        <form action="{{ route('logout') }}" method="post" id="logout">
                            @csrf
                            <a role="button" class="nav-link active" onclick="document.getElementById('logout').submit()"><i class="box-arrow-left"></i> Logout</a>
                        </form>
                    @endguest
                </div>
            </div>
        </div>
    </nav>

    <header class="masthead bg-primary text-white text-center py-4">
        <div class="container d-flex align-items-center flex-column">
            <h2>@yield('subtitle','A Laravel Online Store')</h2>
        </div>
    </header>

    <div class="container my-4">
        @yield('content')
    </div>

    <footer>
        <div class="copyright py-4 text-center text-white">
            <div class="container">
                <small>
                    Copyright - <a href="https://twitter.com/danielgarax" class="text-reset fw-bold text-decoration-nome" target="_blank">Daniel Correa</a> - <b>Paola Vallejo</b>

                </small>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>