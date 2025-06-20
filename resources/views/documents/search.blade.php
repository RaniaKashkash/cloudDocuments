@extends('layout.app')
@section('title')
<title>Dashboard</title>
@endsection
@section('main-content')
<body class="g-sidenav-show bg-dark overflow-hidden">
  <main class="main-content position-relative border-radius-lg">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur"
      data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="{{ route('documents.index') }}">Dashboard</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Search</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Searching for a word</h6>
        </nav>
        @include('includes.logout')

      </div> 
    </nav>


    <!-- ^ Search -->
    <div class="container">
      <form action="{{ route('documents.searchHandle') }}" method="GET">
      <div class="input-group mt-2">
        <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
        <input type="text" name="query" class="form-control" placeholder="Enter a word to search" onfocus="focused(this)" value="{{ request('query') }}"
          onfocusout="defocused(this)">
        <button type="submit" class="btn my-0 bg-light">Search</button>
      </div>
      </form>
      <div>
        @if ($query && !$documents->count())
        <p class="fs-6 mt-1 text-warning">No matching word or phrase found in any file</p>
        @endif

      </div>
    </div>


    <!-- Result table -->
     @if ($documents->count())
    <div class="row mt-4 justify-content-center mx-0">
      <div class="col-lg-10 mb-lg-0 mb-4">
                <p class="fs-6 mt-1 text-success">Search took {{number_format($timeTaken, 3)}} seconds</p>

        <div class="card ">
          <div class="card-header pb-0 p-3">
            <div class="d-flex justify-content-between">
              <h6 class="mb-2">Search result</h6>
            </div>
          </div>
          <div class="table-responsive">
            <table id="example" class="table align-items-center ">
                <thead>

                <tr>
                  <th >Title</th>
                  <th >Matched sentence</th>
                </tr>
</thead>
                <tbody>

                 @foreach ($documents as $document)
                <tr>
                  <td>
                    <div>
                      <h6 class="text-sm mb-0 px-3 py-1">{{ $document->title }}</h6>
                    </div>
                  </td>
                  <td>
                    <div >
                      <h6 class="text-sm mb-0 px-3 py-1">{!! $document->highlighted_content ?? '' !!}</h6>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    @endif


  </main>
</body>
@endsection