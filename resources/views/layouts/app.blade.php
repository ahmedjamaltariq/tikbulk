<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @yield('title')

    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/logo.png')}}"/>

    <!-- Change these meta tags and title according to your needs -->
    <meta name="Description" content="Download your Tik Tok videos in bulk by just urls">
    <meta name="Keywords" content="Tik Tok video, Download Tik Tok video in bulk, Download Tik Tok video">

    <!-- Latest compiled Jura fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Jura&display=swap" rel="stylesheet">

    <!-- Latest compiled and minified font awesome CSS -->
    <link href="{{asset('libs/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />

    <!-- Latest compiled jQuery and jQuery UI library -->
    <script src="{{asset('libs/jquery/js/jquery.js')}}"></script>
    <script src="{{asset('libs/jquery-ui/js/jquery-ui.js')}}"></script>
    <link href="{{asset('libs/jquery-ui/css/jquery-ui.css')}}" rel="stylesheet" />

    <!-- Latest compiled jQuery tags input plugin -->
    <script src="{{asset('libs/jquery-tagsinput/js/jquery-tagsinput.js')}}"></script>
    <link href="{{asset('libs/jquery-tagsinput/css/jquery-tagsinput.css')}}" rel="stylesheet" />

    <!-- Latest compiled and minified Bootstrap -->
    <link href="{{asset('libs/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('libs/bootstrap/js/bootstrap.min.js')}}" rel="stylesheet" />

    <!-- Custom CSS -->
    <link href="{{asset('css/custom.css')}}" rel="stylesheet" />

</head>
<body class="bg-light">
<!-- Header-start -->
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <a class="navbar-brand font-weight-bold text-primary" href="{{url('/')}}"><img src="{{asset('images/logo.png')}}" class="img-fluid"> TikBulk</a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{url('how-to-download')}}">How to download</a>
            </li>
        </ul>
    </nav>
</header>
<!-- Header-end -->

@yield('content')

<!-- Footer-start -->
<footer id="sticky-footer" class="footer bg-secondary">
    <div class="container text-center">
        <small>Copyright &copy; 2020 TikBulk</small>
    </div>
</footer>
<!-- Footer-end -->
@yield('js')
</body>
</html>