@extends('layout.app')
@section('title')
  <title>Upload </title>
@endsection
@section('main-content')
<body class="g-sidenav-show bg-dark">
  <main class="main-content position-relative border-radius-lg">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur"
      data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="{{ route('documents.index') }}">Dashboard</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Upload</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Upload new document</h6>
        </nav>
        @include('includes.logout')

      </div>
    </nav>



    <!-- ^ Search,upload file icons -->
    <div class="container-fluid py-4">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card pt-5">
            <h6 class="text-center mb-0 mb-3">Select a document in PDF / DOCX format</h6>

            <div class="card-header d-flex justify-content-center mx-4 p-3 text-center">
              <button type="button" class="border-0 bg-transparent"
                onclick="document.getElementById('fileUpload').click();">
                <i class="fa-solid fa-cloud-arrow-up fs-1" style="color:rgb(116, 111, 160)"></i>
              </button>
            </div>
            <div class="card-body pt-0 p-3 text-center">
            <form action="{{ route('documents.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- نخفي ال input -->
                <input type="file" name="document" id="fileUpload" style="display: none;"  accept=".pdf,.docx" required>
                <!-- زر الرفع الحقيقي -->
                <button type="submit" class="btn btn-success bg-gradient-primary">Upload</button>
              </form>
              @if (session('success'))
    <div class="text-success">
        {{ session('success') }}
        @if (session('duration'))
            <br>
              <p class="fs-6 fw-bold text-success">{{session('duration')}}</p>       
     @endif
    </div>
@endif
    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
              <p class="fs-6 fw-bold text-warning">{{$error}}</p>
                @endforeach
            </ul>
        </div>
    @endif
            </div>
          </div>
        </div>
      </div>
    </div>



  </main>
</body>
@endsection
</html>