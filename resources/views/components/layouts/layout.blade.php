<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Hello, world!</title>

    @livewireStyles
</head>

<body class="bg-light">

    <header class="p-3 bg-dark text-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li>
                        <a href="/"
                            class="nav-link px-2 {{ request()->routeIs('index') ? 'text-white' : 'text-secondary' }}">Index</a>
                    </li>
                    <li>
                        <a href="{{ route('livewire.jquery') }}"
                            class="nav-link px-2 {{ request()->routeIs('livewire.jquery') ? 'text-white' : 'text-secondary' }}">Livewire
                            vs Jquery</a>
                    </li>
                    <li>
                        <a href="{{ route('dependent.dropdown') }}"
                            class="nav-link px-2 {{ request()->routeIs('dependent.dropdown') ? 'text-white' : 'text-secondary' }}">Dependent
                            Dropdown</a>
                    </li>

                    <li>
                        <a href="{{ route('tables') }}" class="nav-link px-2 {{ request()->routeIs('tables') ? 'text-white' : 'text-secondary' }}">
                            Table
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </header>


    <div class="container py-4">
        {{ $slot }}
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> --}}


    @stack('scripts')

    @livewireScripts
</body>

</html>
