<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}">
    <title>FKIP - Unsri</title>
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/colors/aqua.css') }}">
    <link rel="preload" href="{{ asset('assets/css/fonts/thicccboi.css') }}" as="style" onload="this.rel='stylesheet'">

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="content-wrapper">
        <header class="wrapper bg-soft-primary">
            @include('common.navbar')
        </header>
    </div>
    <section class="wrapper bg-soft-primary">
        @if ($errors->any())
        @foreach ($errors->all() as $error)

        <div class="alert alert-danger alert-icon alert-dismissible fade show" role="alert">
            <i class="uil uil-times-circle"></i> {{ $error }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endforeach

        @endif

        @if (session('status'))
        <div class="alert alert-success alert-icon alert-dismissible fade show" role="alert">
            <i class="uil uil-check-circle"></i> {{ session('status') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
    </section>

    @include($page, ['data' => $data])

    <footer class="bg-light">
        <div class="container py-13 py-md-15">
            <div class="row gy-6 gy-lg-0">
                <div class="col-md-4 col-lg-3">
                    <div class="widget">
                        <img class="mb-4" src="{{ asset('assets/img/fkip.png') }}"  alt="" />
                        <p class="mb-4">© {{date("Y")}} FKIP Unsri. <br class="d-none d-lg-block" />All rights reserved.</p>
                        <nav class="nav social ">
                            <a href="#"><i class="uil uil-twitter"></i></a>
                            <a href="#"><i class="uil uil-facebook-f"></i></a>
                            <a href="#"><i class="uil uil-dribbble"></i></a>
                            <a href="#"><i class="uil uil-instagram"></i></a>
                            <a href="#"><i class="uil uil-youtube"></i></a>
                        </nav>
                        <!-- /.social -->
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
                <div class="col-md-4 col-lg-6">
                    <div class="widget">
                        <h4 class="widget-title  mb-3">Get in Touch</h4>
                        <address class="pe-xl-15 pe-xxl-17">Kampus Universitas Sriwijaya , Jalan Palembang - Prabumulih , Indralaya , Kabupaten Ogan Ilir , Sumatera Selatan </address>
                        <a href="mailto:#" class="link-body">info@email.com</a><br /> +00 (123) 456 78 90
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
                <div class="col-md-4 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title  mb-3">Learn More</h4>
                        <ul class="list-unstyled text-reset mb-0">
                            <li><a href="{{ route('dosen') }}">Dosen</a></li>
                        </ul>
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </footer>
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
                        <script src="{{ asset('assets/js/theme.js') }}"></script>
</body>

</html>