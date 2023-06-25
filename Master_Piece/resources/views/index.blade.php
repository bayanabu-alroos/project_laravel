@extends('layout.master')

@section('content')
    

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="http://127.0.0.1:8000/" class="nav-item nav-link active">Home</a>
                    <a href="http://127.0.0.1:8000/about" class="nav-item nav-link">About</a>
                    <a href="http://127.0.0.1:8000/service" class="nav-item nav-link">Services</a>
                    <a href="http://127.0.0.1:8000/rooms" class="nav-item nav-link ">Rooms</a>
                    <a href="http://127.0.0.1:8000/blogs" class="nav-item nav-link ">Blogs</a>
                    <a href="http://127.0.0.1:8000/contact" class="nav-item nav-link mx-4">Contact</a>

                    {{-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                                class="fa fa-user-tie me-2"></i></a>
                        <div class="dropdown-menu m-0">
                            <a href="http://127.0.0.1:8000/register" class="dropdown-item">Sign up</a>
                            <hr class="dropdown-divider">
                            <a href="http://127.0.0.1:8000/login" class="dropdown-item">Login</a>
                        </div>
                    </div> --}}
                </div>

                <div class="nav-item dropdown text-info  me-5">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <i class="fa fa-user-tie me-2"></i>
                    </a>
                    <div class="dropdown-menu m-0">
                <!-- Authentication Links -->
                @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif
            
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
            <li class="nav-item dropdown">

    
                <a class="dropdown-item" href="http://127.0.0.1:8000/home"><i class="mdi mdi-account me-1 ms-1"></i> My Profile</a>
                
                <a class="dropdown-item" href="{{route('processLogout')}}" class="text-body ms-0">
                    <i class="fa fa-power-off me-1 ms-1"></i>
                    Log Out
                </a>
                
              </li>
            @endguest
            
            </div>
            </div>
            {{-- <a href="http://127.0.0.1:8000/appointment" class="btn btn btn-opacity-75 py-2 px-4 mb-1 ms-3 text-white" style="background-color:#9b4abb ;">Make Appointment</a> --}}

            </div>
            </div>
        </nav>



<div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
<div class="carousel-inner">
    <div class="carousel-item active">
        <img class="w-100" src="https://i.pinimg.com/564x/ec/12/28/ec1228ed822200ffd296dafffd412770.jpg" style="height: 700px;" alt="Image">
        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
            <div class="p-3" style="max-width: 900px;">
                <h1 class="text-white text-uppercase mb-3 animated slideInDown">Keep your skin fresh</h1>
                <h5 class="text-white mb-3 animated zoomIn">
                    We have the best hair removal and skin care techniques
                </h5>
                <br>
                {{-- <a href="http://127.0.0.1:8000/appointment"
                    class="btn  btn-opacity-75 py-md-3 px-md-5 me-3 animated slideInLeft text-white"
                    style="background-color:#9b4abb ;">Make Appointment</a> --}}
                <a href="http://127.0.0.1:8000/contact"
                    class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
            </div>
        </div>
    </div>
    <div class="carousel-item">
        <img class="w-100" src="img/OIP.jpg" alt="Image"  style="height: 700px;">
        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
            <div class="p-3" style="max-width: 900px;">
                <h1 class="text-white text-uppercase mb-3 animated slideInDown">Keep your skin fresh</h1>
                <h5 class=" text-white mb-3  animated zoomIn">
                    We have the best hair removal and skin care techniques
                </h5>
                <br>
                {{-- <a href="http://127.0.0.1:8000/appointment"
                    class="btn  btn-opacity-75 py-md-3 px-md-5 me-3 animated slideInLeft text-white"
                    style="background-color:#9b4abb ;">Make Appointment</a> --}}
                <a href="http://127.0.0.1:8000/contact"
                    class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
            </div>
        </div>
    </div>
    <div class="carousel-item">
        <img class="w-100" src="img/lazernaya-epilyaciya-38.jpg" alt="Image"  style="height: 700px;">
        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
            <div class="p-3" style="max-width: 900px;">
                <h1 class="text-white text-uppercase mb-3 animated slideInDown">Keep your skin fresh</h1>
                <h5 class="text-white mb-3  animated zoomIn">
                    We have the best hair removal and skin care techniques
                </h5>
                <br>
                {{-- <a href="http://127.0.0.1:8000/appointment"
                    class="btn  btn-opacity-75 py-md-3 px-md-5 me-3 animated slideInLeft text-white"
                    style="background-color:#9b4abb ;">Make Appointment</a> --}}
                <a href="http://127.0.0.1:8000/contact"
                    class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
            </div>
        </div>
    </div>
</div>
<button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
</button>
</div>
</div>
<!-- Navbar & Carousel End -->


<!-- Full Screen Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1">
<div class="modal-dialog modal-fullscreen">
<div class="modal-content" style="background: rgba(9, 30, 62, .7);">
    <div class="modal-header border-0">
        <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal"
            aria-label="Close"></button>
    </div>
    <div class="modal-body d-flex align-items-center justify-content-center">
        <div class="input-group" style="max-width: 600px;">
            <input type="text" class="form-control bg-transparent border-primary p-3"
                placeholder="Type search keyword">
            <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
        </div>
    </div>
</div>
</div>
</div>
<!-- Full Screen Search End -->

<!-- Start Small Features Area -->
<section class="small-features">
<div class="container">
<div class="inner-content">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
            <!-- Start Single Feature -->
            <div class="single-feature">
                <i style="color: #9b4abb;" class="  text-opacity-25"><svg xmlns="http://www.w3.org/2000/svg"
                        width="70" height="70" fill="currentColor" class="bi bi-emoji-smile"
                        viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                        <path
                            d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z" />
                    </svg></i>
                <h2 class="ms-4">Number Clients </h2>
                <h5 class=" mb-0 ms-5 mt-4" data-toggle="counter-up">{{\DB::table('users')->where('users.level', '=' ,'patient')->count()}}</h5>

            </div>
            <!-- End Single Feature -->
        </div>
        <div class="col-lg-4 col-md-4 col-12">
            <!-- Start Single Feature -->
            <div class="single-feature">

                <i style="color: #9b4abb;" class="  text-opacity-25"><svg xmlns="http://www.w3.org/2000/svg"
                        width="70" height="70" fill="currentColor" class="bi bi-hospital"
                        viewBox="0 0 16 16">
                        <path
                            d="M8.5 5.034v1.1l.953-.55.5.867L9 7l.953.55-.5.866-.953-.55v1.1h-1v-1.1l-.953.55-.5-.866L7 7l-.953-.55.5-.866.953.55v-1.1h1ZM13.25 9a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5ZM13 11.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5Zm.25 1.75a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5Zm-11-4a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5A.25.25 0 0 0 3 9.75v-.5A.25.25 0 0 0 2.75 9h-.5Zm0 2a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5ZM2 13.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5Z" />
                        <path
                            d="M5 1a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1a1 1 0 0 1 1 1v4h3a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h3V3a1 1 0 0 1 1-1V1Zm2 14h2v-3H7v3Zm3 0h1V3H5v12h1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3Zm0-14H6v1h4V1Zm2 7v7h3V8h-3Zm-8 7V8H1v7h3Z" />
                    </svg></i>
                <h2 class="ms-4">Number Room </h2>
                <h5 class=" mb-0 ms-5 mt-4" data-toggle="counter-up">{{\DB::table('rooms')->count()}}</h5>

            </div>
            <!-- End Single Feature -->
        </div>
        <div class="col-lg-4 col-md-4 col-12">
            <!-- Start Single Feature -->
            <div class="single-feature">
                <i style="color: #9b4abb; font-size: 50px;" class="fa fa-users  text-opacity-25"></i>
                <h2 class="ms-4">Number Nurses</h2>
                <h5 class=" mb-0 ms-5 mt-4" data-toggle="counter-up">{{\DB::table('users')->where('users.level', '=' ,'nurse')->count()}}</h5>

            </div>
            <!-- End Single Feature -->
        </div>
    </div>
</div>
</div>
</section>
<!-- End Small Features Area -->



<!-- Features Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
<div class="container py-5">
<div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
    <h2 class="fw-bold  text-uppercase" style="color:#3593c9 ;">Why Choose Us</h2>
    <h4 class="mb-0">To get super smooth skin without hair, with the best laser devices</h4>
</div>
<div class="row g-5">
    <div class="col-lg-4">
        <div class="row g-5">
            <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                <div class=" rounded d-flex align-items-center justify-content-center mb-3"
                    style="width: 60px; height: 60px;background-color:#cf06da ;">
                    <i class="fa fa-cubes text-white"></i>
                </div>
                <h4>Best Laser Devices</h4>
                <p class="mb-0">Among the latest laser devices : GentleLase Pro ,DEKA Again ,SPECTRA LASER
                    ,Hydra Facial,Fractional LASER,ONDA COOL WAVES ,FAT FREEZING and LIPO FAT SHOCK </p>
            </div>
            <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                <div class="rounded d-flex align-items-center justify-content-center mb-3"
                    style="width: 60px; height: 60px;background-color:#cf06da ;">
                    <i class="fa fa-award text-white"></i>
                </div>
                <h4>Modern Techniques</h4>
                <p class="mb-0">We have the best modern devices such as laser hair removal, slimming devices
                    and skin cleaning devices</p>
            </div>
        </div>
    </div>
    <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
        <div class="position-relative h-100">
            <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s"
                src="img/aa.jpg" style="object-fit: cover;">
        </div>
    </div>
    <div class="col-lg-4">
        <div class="row g-5">
            <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                <div class="rounded d-flex align-items-center justify-content-center mb-3"
                    style="width: 60px; height: 60px;background-color:#cf06da ;">
                    <i class="fa fa-users-cog text-white"></i>
                </div>
                <h4>Professional Staff</h4>
                <p class="mb-0">We have the best team of skin care specialists who have enough experience to
                    deal with modern laser devices</p>
            </div>
            <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                <div class=" rounded d-flex align-items-center justify-content-center mb-3"
                    style="width: 60px; height: 60px;background-color:#cf06da ;">
                    <i class="fa fa-phone-alt text-white"></i>
                </div>
                <h4>Every Day Support</h4>
                <p class="mb-0">We have the best team from Call Center to answer your inquiries</p>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- Features Start -->



@endsection 
