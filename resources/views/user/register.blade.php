@include('partials.header')
<x-nav />
<div class="card text-black" style="border-radius: 25px;">
  <div class="card-body p-md-5">
    <div class="row justify-content-center">
      <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

        <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Register</p>

        <form class="mx-1 mx-md-4" action="/store" method="POST">
          @csrf
          <div class="d-flex flex-row align-items-center mb-4">
            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
            <div class="form-outline flex-fill mb-0">
              <label class="form-label" for="name">Name</label>
              <input type="text" name="name" class="form-control" />
            </div>
          </div>

          <div class="d-flex flex-row align-items-center mb-4">
            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
            <div class="form-outline flex-fill mb-0">
              <label class="form-label" for="email">Email</label>
              <input type="email" name="email" class="form-control" />
            </div>
          </div>

          <div class="d-flex flex-row align-items-center mb-4">
            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
            <div class="form-outline flex-fill mb-0">
              <label class="form-label" for="password">Password</label>
              <input type="password" name="password" class="form-control" />
            </div>
          </div>

          <div class="d-flex flex-row align-items-center mb-4">
            <i class="fas fa-key fa-lg me-3 fa-fw"></i>
            <div class="form-outline flex-fill mb-0">
              <label class="form-label" for="password_confirmation">Confirm password</label>
              <input type="password" name="password_confirmation" class="form-control" />
            </div>
          </div>
          <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
            <input type="submit" class="btn btn-primary btn-lg" value="Register" />
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@include('partials.footer')