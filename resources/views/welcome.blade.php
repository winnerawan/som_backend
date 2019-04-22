<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}}</title>
    <link rel="stylesheet" href="{{ asset("css/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("css/additional.css") }}">
    <link rel="stylesheet" href="{{ asset("css/line-awesome.min.css") }}">
    <link rel="stylesheet" href="{{ asset("css/animate.css") }}">
    <link rel="stylesheet" href="{{ asset("css/owl.carousel.min.css") }}">
    <link rel="stylesheet" href="{{ asset("css/owl.theme.default.min.css") }}">
    <link rel="stylesheet" href="{{ asset("css/jquery.fullpage.min.css") }}">
    <link rel="stylesheet" href="{{ asset("css/fullscreen.css") }}">
    <link rel="stylesheet" href="{{ asset("css/slick.css") }}">
    <link rel="stylesheet" href="{{ asset("css/slick-theme.css") }}">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                {{-- <p><img src="{{asset('admin/images/ic_sepatu.png')}}"/> --}}
                <a class="navbar-brand text-dark" href="#">{{config('app.name')}}</a></p>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mr-5">
                            <a class="nav-link text-dark" href="{{url('login')}}">Administrator</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section class="one">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="row justify-content-center">
                        <div class="col-sm-10">
                            <div class="d-flex align-items-center justify-content-center">
                                <div class="card rounded-0 border-0">
                                    <span class="cube"></span>                                                                            
                                    <span class="cube2"></span>                                                                            
                                    <div class="card-body p-0">
                                        <img src="images/three-2.jpg" class="img-fluid" alt="">                            
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row justify-content-center">
                        <div class="col-sm-10">
                            <div class="d-flex align-items-center justify-content-center">
                                <div class="d-block">
                                    <h2 class="mb-3">TAKE YOUR BUSINESS TO THE NEXT LEVEL WITH<br/> SALES ON MOBILE</h2>
                                    <span class="d-block mb-4 text-read">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                                        <a href=""><img src="https://play.google.com/intl/en_us/badges/images/badge_new.png"/></a>
                                    <ul class="list-inline social-media mt-5">
                                        <h4 class="text-capitalize d-inline-block pt-2 mb-0 mr-3">social media : </h4>
                                        <li class="list-inline-item">
                                            <a href="#" class="facebook">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="twitter">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="instagram">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="youtube">
                                                <i class="fab fa-youtube"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <footer class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                
            <div class="row justify-content-center mt-3 tiny-footer">
                
            </div>
        </div>
    </footer>
    <script src="{{ asset("js/jquery.min.js") }}"></script>    
    <script src="{{ asset("js/bootstrap.min.js") }}"></script>
    <!-- <script src="{{ asset("js/smooth-scroll.min.js") }}"></script> -->
    <script src="{{ asset("js/owl.carousel.min.js") }}"></script>
    <script src="{{ asset("js/jquery.easings.min.js") }}"></script>    
    <script src="{{ asset("js/scrolloverflow.min.js") }}"></script>
    <script src="{{ asset("js/jquery.fullpage.min.js") }}"></script>
    <script src="{{ asset("js/slick.min.js") }}"></script>
    <script src="{{ asset("js/app.js") }}"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/{{ asset("js/all.js") }}" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script>
</body>
</html>