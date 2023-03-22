@include('partials.header')
<div class="card text-black" style="border-radius: 25px;">
    <div class="card-body p-md-5">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Edit Form:</p>

                <form class="mx-1 mx-md-4" action="/updateCustomer" method="POST">
                    @csrf
                    <input type="hidden" name="id" class="form-control" value="{{$customer->id}}" />
                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="lastName">Last Name</label>
                            <input type="text" name="lastName" class="form-control" value="{{$customer->lastName}}" />
                        </div>
                    </div>
                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="firstName">First Name</label>
                            <input type="text" name="firstName" class="form-control" value="{{$customer->firstName}}" />
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="email">Email</label>
                            <input type="email" name="email" class="form-control" value="{{$customer->email}}" />
                            @error("email")
                            <p>Email already exists.</p>
                            @enderror
                        </div>
                    </div>
                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="contactNumber">Conctact Number</label>
                            <input type="text" name="contactNumber" class="form-control" value="{{$customer->contactNumber}}" />
                        </div>
                    </div>
                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="address">Address</label>
                            <input type="text" name="address" class="form-control" value="{{$customer->address}}" />
                        </div>
                    </div>

                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                        <input type="submit" class="btn btn-primary btn-lg" value="Save" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@include('partials.footer')