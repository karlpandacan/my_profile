<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="This is for My Personal Profile">
    <meta name="author" content="Karl Pandacan">

    <title>Karl Pandacan</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ url('css/scrolling-nav.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <link href="{{ url('css/hover-effects.css') }}" rel="stylesheet">

    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="#home">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About Me</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#experience">Experience</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#skills">Skills</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#education">Education</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#hobbies">Hobbies</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#links">Links</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    @yield('content')
    <!-- jQuery -->
    <script src="{{ url('js/jquery.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ url('js/bootstrap.min.js') }}"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="{{ url('js/jquery.easing.min.js') }}"></script>
    <script src="{{ url('js/scrolling-nav.js') }}"></script>
    <script src="{{ url('js/scrollreveal.min.js') }}"></script>
    <script src="{{ url('js/hi-icon/modernizr.custom.js') }}"></script>
    <script>
        window.sr = ScrollReveal({delay: 200, distance: '75px'});
        sr.reveal('.srrev');
    </script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
