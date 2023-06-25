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


                        <a class="dropdown-item" href="http://127.0.0.1:8000/home"><i class="mdi mdi-account me-1 ms-1"></i> My
                            Profile</a>

                        <a class="dropdown-item" href="{{ route('processLogout') }}" class="text-body ms-0">
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

    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn">Login</h1>
                <a href="" class="h5 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h5 text-white">Login</a>
            </div>
        </div>
    </div>
    </div>






    <section class="">
        <div class="container h-100 ">
            <div class="row d-flex justify-content-center align-items-center h-100 ">
                <div class="col col-xl-10  ">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp"
                                    alt="login form" class="img-fluid"
                                    style="border-radius: 1rem 0 0 1rem; height: 820px;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">
                                    {{-- <form method="POST" action="{{ route('login') }}">
                        @csrf --}}
                                    <form method="POST" action="{{ route('processLogin') }}">


                                        {{ csrf_field() }}

                                        {{ csrf_field() }}


                                        <div class="form-detail mb-5" class="d-flex align-items-center mb-5 pb-1">
                                            <h1 class="m-0"><img src="img/logo.png" alt=""> Clinic</h1>
                                        </div>

                                        @if (session('error') == 1)
                                            <div class="alert alert-danger">
                                                Ouuuppssss... incorrect email or password, please try again!
                                            </div>
                                        @endif



                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example17">Email address</label>
                                            <input id="email" type="email"
                                                class="form-control form-control-lg input-text @error('email') is-invalid @enderror"
                                                name="email" value="{{ old('email') }}" autocomplete="email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example27">Password</label>
                                            <input id="password" type="password"
                                                class="form-control form-control-lg input-text @error('password') is-invalid @enderror"
                                                name="password" autocomplete="new-password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>



                                        <div class="d-grid gap-2 col-12 mx-auto mb-4">
                                            <button type="submit " class="btn btn-info btn-lg text-white">Login </button>
                                        </div>


                                        @if (Route::has('register'))
                                            <a class="btn btn-link" href="{{ route('register') }}">
                                                {{ __('Create new account') }}
                                            </a>
                                        @endif
                                        <br>

                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif

                                    </form>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
