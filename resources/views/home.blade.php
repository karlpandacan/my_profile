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
                        {{--<div class="row">--}}
                            {{--<div class="col-sm-12">--}}
                                {{--<p>--}}
                                    {{--To be part of a company wherein I will be able to apply and hone my skills to--}}
                                    {{--the best of my ability and to allow myself to try out new things.--}}
                                {{--</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4>// Personal Information</h4>
                                    </div>
                                </div>
                                <br/>
                                <div class="row">
                                    <div class="col-sm-1 text-right"></div>
                                    <div class="col-sm-11 text-left"><b>Location : </b>Caloocan City, Philippines</div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-1 text-right"></div>
                                    <div class="col-sm-11 text-left"><b>Date of Birth : </b>August 16, 1990 </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-1 text-right"></div>
                                    <div class="col-sm-11 text-left"><b>Age : </b>{{ $age }} </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-1 text-right"></div>
                                    <div class="col-sm-11 text-left"><b>Sex : </b>Male</div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-1 text-right"></div>
                                    <div class="col-sm-11 text-left"><b>Civil Status : </b>Single</div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-1 text-right"></div>
                                    <div class="col-sm-11 text-left"><b>Nationality : </b>Filipino</div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-1 text-right"></div>
                                    <div class="col-sm-11 text-left"><b>Religion : </b>Roman Catholic</div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-1 text-right"></div>
                                    <div class="col-sm-11 text-left"><b>Language Spoken : </b>Filipino, English</div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4>// Contact Details</h4>
                                    </div>
                                </div>
                                <br/>
                                <div class="row">
                                    <div class="col-sm-1 text-right"></div>
                                    <div class="col-sm-11 text-left"><b>Contact Number : </b>09228774732</div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-1 text-right"></div>
                                    <div class="col-sm-11 text-left">
                                        <b>E-Mail Address : </b>karlpandacan@yahoo.com, <br/>
                                        &nbsp;&nbsp;&nbsp; karlpandacan@hotmail.com, <br/>
                                        &nbsp;&nbsp;&nbsp; karlpandacan@gmail.com <br/>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4>// Development</h4>
                                    </div>
                                </div>
                                <br/>
                                <div class="row">
                                    <div class="col-sm-12 text-left">
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 90%">PHP</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 text-left">
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 90%">MySQL</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4>// Tools</h4>
                                    </div>
                                </div>
                                <br/>
                                <div class="row">
                                    <div class="col-sm-12 text-left">
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 90%">PHP</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 text-left">
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 90%">MySQL</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                </div>
            </div>
        </div>
    </section>

    <!-- Education Section -->
    <section id="education" class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="srrev">
                        <div class="col-lg-12">
                            <h1>Education Section</h1>
                            <p>
                                Lorem ipsum keme keme keme 48 years neuro ganders na ang valaj jutay wiz at nang shonget sa Gino makyonget emena gushung valaj otoko krung-krung at nang waz shonga chopopo bongga shonget kasi majonders kabog jowabelles majubis ang chaka valaj at nang at nang at bakit bakit pranella chipipay jongoloids kabog , keme keme kasi dites ang pamenthol na ng at nang kabog klapeypey-klapeypey na chapter na , matod valaj sa emena gushung antibiotic at ang pamenthol tungril bigalou matod bakit bakit shontis tetetet wasok effem klapeypey-klapeypey pranella quality control at nang majonders antibiotic bakit jowa kasi balaj lulu ganda lang shala wrangler shonget ang effem ng antibiotic Cholo na at ano at ang pranella shonget mabaho dites na at nang kasi pranella at bakit ng Gino ng krang-krang shonget nang majubis jutay shongaers makyonget Cholo ng pamin lorem ipsum keme keme at bakit at nang juts ng kirara at nang bakit bakit dites planggana wasok guash effem at doonek chopopo jupang-pang jongoloids ganda lang lorem ipsum keme keme kasi urky na ang sa nang , ng kirara kabog urky ng buya Cholo keme ugmas valaj nang at jowabella kabog bonggakea lorem ipsum keme keme kasi at bakit planggana keme keme pamenthol daki bella guash at ang sa ano shala boyband klapeypey-klapeypey at nang borta mahogany bakit na ang pamentos mahogany cheapangga lorem ipsum keme keme paminta biway at sa ng tungril katagalugan ng at na ang keme keme tungril jowa bakit ng at nang conalei sudems jongoloids.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Hobbies Section -->
    <section id="hobbies" class="alter-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="srrev">
                        <div class="col-lg-12">
                            <h1>Hobbies Section</h1>
                            <p>
                                Lorem ipsum keme keme keme 48 years at at ang shonga keme antibiotic at bakit pranella kirara majonders shonga nakakalurky bakit lulu ang valaj ng fayatollah kumenis na at bakit kasi ganda lang ganders majonders , borta kasi ang wiz krung-krung tungril intonses na ang cheapangga tungril conalei na urky balaj mashumers tungril chopopo shokot at nang nang jowa at bakit ang kasi lorem ipsum keme keme sa ma-kyonget nang waz ma-kyonget shala , katagalugan at nang tetetet kemerloo at ang at ang otoko biway ng neuro lorem ipsum keme keme shongaers keme ang shonget shonget kirara sa fayatollah kumenis bakit at ang katol shala makyonget bakit kasi chopopo kasi kirara pamin kasi biway ano jupang-pang paminta pranella chipipay sa boyband mahogany shongaers 48 years shongaers kabog ano makyonget quality control Mike lorem ipsum keme keme krang-krang Gino shonga juts bakit at planggana jowabelles klapeypey-klapeypey tetetet majonders 48 years Mike juts nang ng shogal effem sa mashumers at nang valaj Cholo valaj valaj ang kasi tamalis tanders pranella na at na at tetetet jowabella borta Gino tungril kasi at bakit makyonget kabog krung-krung at nang bakit ang ugmas bokot nang at nang katagalugan chuckie at nang at ang oblation shonga-shonga tetetet shonget biway sa shonga-shonga balaj majubis jowabella tamalis , conalei chapter ng bongga neuro bakit mahogany pamentos kasi keme Mike matod pamentos krang-krang 48 years at bakit na ang kasi ano thunder chuckie ano jutay sangkatuts Gino pamin bakit sa.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
