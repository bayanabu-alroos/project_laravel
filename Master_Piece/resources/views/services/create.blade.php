@extends('layout.masterdash')

@section('content')
@if(\Illuminate\Support\Facades\Auth::user()->level == 'admin')
<div class="page-wrapper">
  <!-- ============================================================== -->
  <!-- Bread crumb and right sidebar toggle -->
  <!-- ============================================================== -->
  <div class="page-breadcrumb">
    <div class="row">
      <div class="col-12 d-flex no-block align-items-center">
        <h4 class="page-title">Create Service</h4>
        <div class="ms-auto text-end">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">
                Create Service
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <!-- ============================================================== -->
  <!-- End Bread crumb and right sidebar toggle -->
  <!-- ============================================================== -->
  <!-- ============================================================== -->
  <!-- Container fluid  -->
  <!-- ============================================================== -->
  <div class="container-fluid">



        <div class="card">
          <div class="card-body">

            <div class="row mb-3">
              <div class="col col-md-6"><b><h3>Create New Service</h3></b></div>

              <div class="container mt-4">

                  @if ($errors->any())
                      <div class="alert alert-danger">
                          <strong>Whoops!</strong> There were some problems with your input.<br><br>
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                  @endif

                  <form class="row g-3 "action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="mb-3 col-md-6">
                          <label  class="form-label">Name Service</label>
                          <input type="text" name="name_service" class="form-control" placeholder="Enter Name Service">
                      </div>


                      <div class=" col-md-6">
                        {{-- <label  class="form-label">Detail Service</label>
                        <input type="text" name="detail_service" class="form-control" placeholder="Enter Name Service"> --}}
                    </div>


                      <div class="mb-3 col-md-6">
                        <label  class="form-label">Image Service</label>
                        <input type="file" name="image" class="form-control" placeholder="Enter Name Service">
                    </div>
                      <div class=" col-md-6">
                        {{-- <label  class="form-label">Detail Service</label>
                        <input type="text" name="detail_service" class="form-control" placeholder="Enter Name Service"> --}}
                    </div>


                      <div class="mb-3 col-md-6">
                        <label  class="form-label">Detail Service</label>
                        <textarea type="text" name="detail_service" class="form-control" placeholder="Enter Name Service"></textarea>
                    </div>



                      <div class="mb-3 col-md-6"></div>
                      <div class="mb-3 col-md-6">
                          <button type="submit" class="btn btn-primary mb-3">Save</button>
                      </div>

                      

                  </form>

              </div>


            </div>
          </div>
        </div>
      </div>
    </div>


</div>

@elseif(\Illuminate\Support\Facades\Auth::user()->level == 'doctor')
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
      <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
          <h4 class="page-title">Create Service</h4>
          <div class="ms-auto text-end">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                  Create Service
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
  
  
  
          <div class="card">
            <div class="card-body">
  
              <div class="row mb-3">
                <div class="col col-md-6"><b><h3>Create New Service</h3></b></div>

                <div class="container mt-4">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form class="row g-3 "action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3 col-md-6">
                            <label  class="form-label">Name Service</label>
                            <input type="text" name="name_service" class="form-control" placeholder="Enter Name Service">
                        </div>


                        <div class=" col-md-6">
                          {{-- <label  class="form-label">Detail Service</label>
                          <input type="text" name="detail_service" class="form-control" placeholder="Enter Name Service"> --}}
                      </div>


                        <div class="mb-3 col-md-6">
                          <label  class="form-label">Image Service</label>
                          <input type="file" name="image" class="form-control" placeholder="Enter Name Service">
                      </div>
                        <div class=" col-md-6">
                          {{-- <label  class="form-label">Detail Service</label>
                          <input type="text" name="detail_service" class="form-control" placeholder="Enter Name Service"> --}}
                      </div>


                        <div class="mb-3 col-md-6">
                          <label  class="form-label">Detail Service</label>
                          <textarea type="text" name="detail_service" class="form-control" placeholder="Enter Name Service"></textarea>
                      </div>



                        <div class="mb-3 col-md-6"></div>
                        <div class="mb-3 col-md-6">
                            <button type="submit" class="btn btn-primary mb-3">Save</button>
                        </div>

                        

                    </form>

                </div>

  
              </div>
            </div>
          </div>
        </div>
      </div>
  
  
  </div>


  @else
<div class="main-wrapper">
  <!-- ============================================================== -->
  <!-- Preloader - style you can find in spinners.css -->
  <!-- ============================================================== -->
  <div class="preloader">
    <div class="lds-ripple">
      <div class="lds-pos"></div>
      <div class="lds-pos"></div>
    </div>
  </div>
  <!-- ============================================================== -->
  <!-- Preloader - style you can find in spinners.css -->
  <!-- ============================================================== -->
  <!-- ============================================================== -->
  <!-- Login box.scss -->
  <!-- ============================================================== -->
  <div class="error-box">
    <div class="error-body text-center">
      <h1 class="error-title text-danger">403</h1>
      <h3 class="text-uppercase error-subtitle">PAGE NOT FOUND !</h3>
      <p class="text-muted mt-4 mb-4">
        YOU SEEM TO BE TRYING TO FIND HIS WAY HOME
      </p>
      {{-- <a
        href="index.html"
        class="
          btn btn-danger btn-rounded
          waves-effect waves-light
          mb-5
          text-white
        "
        >Back to home</a
      > --}}
    </div>
  </div>
  <!-- ============================================================== -->
  <!-- Login box.scss -->
  <!-- ============================================================== -->
  <!-- ============================================================== -->
  <!-- Page wrapper scss in scafholding.scss -->
  <!-- ============================================================== -->
  <!-- ============================================================== -->
  <!-- Page wrapper scss in scafholding.scss -->
  <!-- ============================================================== -->
  <!-- ============================================================== -->
  <!-- Right Sidebar -->
  <!-- ============================================================== -->
  <!-- ============================================================== -->
  <!-- Right Sidebar -->
  <!-- ============================================================== -->
</div>

@endif
  
@endsection