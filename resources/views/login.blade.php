@extends('layout.app')
@section('title')
<title>login page</title>
@endsection @section('main-content')
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
      </div>
    </div>
  </div>
  
  <main class="main-content mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div
              class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto"
            >
              <div class="card card-plain">
                <div class="card-header pb-0 text-start">
                  <h4 class="font-weight-bolder">Login</h4>
                  <p class="mb-0">Enter your email and password to login</p>
                </div>
                <div class="card-body">
                  <form role="form" action="{{route('login')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                      <input
                      name="email"
                        type="text"
                        class="form-control form-control-lg"
                        placeholder="Email"
                        aria-label="Email"
                      />
                    </div>
                    <div class="mb-3">
                      <input
                        name="password"

                        type="password"
                        class="form-control form-control-lg"
                        placeholder="Password"
                        aria-label="Password"
                      />
                    </div>
                    <div class="text-center">
                      <button
                        type="submit"
                        class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0"
                      >
                        login
                      </button>
                    </div>
                  </form>
                </div>

              </div>
            </div>
            <div
              class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column"
            >
              <div
                class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden"
                style="
                  background-image: url('{{ asset('images/documents.jpeg') }}');
                  background-size:cover;
                  background-repeat:no-repeat;
                "
              >
                <span class="mask bg-gradient-primary opacity-6"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection
