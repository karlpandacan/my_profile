@extends('layouts.app')

@section('content')
    <!-- Home Section -->
    <section id="home" class="home-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="srrev">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="pull-right">
                                    <img src="http://www.nyrs.net/images/site/default-user.jpg" class="img-circle portrait-photo" alt="Karl Pandacan" width="180px" height="180px">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="pull-left">
                                    <p class="name-header">
                                        Karl M. Pandacan
                                    </p>
                                    <p class="title-header">
                                        PHP Developer / Web Developer
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <section id="set-1">
                                    <div class="hi-icon-wrap hi-icon-effect-1 hi-icon-effect-1a">
                                        <i class="hi-icon fa fa-facebook"><a href="http://facebook.com/karl.pandacan"></a></i>
                                        <i class="hi-icon fa fa-twitter"><a href="https://twitter.com/karlpandacan"></a></i>
                                        <i class="hi-icon fa fa-google-plus"><a href="https://plus.google.com/+karlpandacan"></a></i>
                                        <i class="hi-icon fa fa-github-alt"><a href="http://github.com/karlpandacan"></a></i>
                                        <i class="hi-icon fa fa-linkedin"><a href="https://www.linkedin.com/in/karlpandacan"></a></i>
                                        <i class="hi-icon fa fa-skype"><a href="http://skype.com/karl.pandacan"></a></i>
                                    </div>
                                </section>
                            </div>
                        </div>

                        {{--<h1>Scrolling Nav</h1>--}}
                        {{--<p><strong>Usage Instructions:</strong> Make sure to include the <code>scrolling-nav.js</code>, <code>jquery.easing.min.js</code>, and <code>scrolling-nav.css</code> files. To make a link smooth scroll to another section on the page, give the link the <code>.page-scroll</code> class and set the link target to a corresponding ID on the page.</p>--}}
                        {{--<a class="btn btn-default page-scroll" href="#about">Click Me to Scroll Down!</a>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="srrev">
                        <div class="row">
                            <div class="col-sm-12 text-header">
                                <h2>About Me</h2>
                            </div>
                        </div>
                        <br/>
                        @include('about')
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="skills-section">
        <div class="container">
            <div class="row">
                <div class="srrev">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-sm-12 text-header-alter">
                                <h2>Skills</h2>
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            @include('skills')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section id="experience" class="experience-section">
        <div class="container">
            <div class="row">
                <div class="srrev">
                    <div class="col-lg-12 text-header">
                        <h2>Experience</h2>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            @include('experience')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Education Section -->
    {{--<section id="education" class="education-section">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-lg-12">--}}
                    {{--<div class="srrev">--}}
                        {{--<div class="col-lg-12 text-header-alter">--}}
                            {{--<h1>Education</h1>--}}
                            {{--<p>--}}

                            {{--</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}

    <!-- Hobbies Section -->
    <section id="hobbies" class="hobbies-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="srrev">
                        <div class="col-lg-12  text-header-alter">
                            <h2>Hobbies Section</h2>
                            <p>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
