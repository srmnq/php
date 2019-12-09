<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>

<body>
    <header class="">
        <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center">
            <a href="index.html" class="py-4">
                <img src="https://www.neuefische.de/static/neuefische-gmbh-logo.svg" />
            </a>
            <a class="btn" href="cart.html">
                Cart
                <span class="ml-1 badge badge-dark">3</span>
            </a>
        </div>
        <div class="bg-dark">
            <div class="container d-flex justify-content-between">
                <nav>
                    <a class="py-2 pr-3 d-md-inline-block text-white" href="category.html">Category 1</a>
                    <a class="py-2 pr-3 d-md-inline-block text-white" href="category.html">Category 2</a>
                    <a class="py-2 pr-3 d-md-inline-block text-white" href="category.html">Category 3</a>
                </nav>
                <form class="form-inline my-2 my-lg-0">
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Your query...">
                        <div class="input-group-append">
                            <button type="button" class="btn btn-secondary btn-number">
                                Search
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </header>
    @yield('content')
    <footer class="mt-5 py-5 text-muted text-center text-small bg-light">
        <p class="mb-1">© 2017-2019 neuefische GmbH</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Privacy</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
    </footer>
</body>

</html>