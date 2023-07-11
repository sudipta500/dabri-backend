@extends('auth.layout')
@section('title')
Login
@endsection
@section('content')


@if (Session::has('errorMessage'))
<div class="alert alert-danger w-25 m-auto mt-5">
<p class="h5 text-center mt-2">{{ session('errorMessage') }}</p>
</div>
@endif


<div class="account-pages my-5 pt-sm-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card overflow-hidden">
                    <div class="bg-soft" style="background-color: #BF9000">
                        <div class="row">
                            <div class="col-5 align-self-end">
                                <img src="assets/images/profile-img.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="p-2">
                            <form class="needs-validation" action="" method="POST">
                                  @csrf
                                <div class="mb-3">
                                    <label for="useremail" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" id="useremail" placeholder="Enter email" required>
                                    <div class="invalid-feedback">
                                        Please Enter Email
                                    </div>
                                    <span class="text-danger">@error('email')
                                        {{$message}}
                                    @enderror</span>
                                </div>
                                <div class="mb-3">
                                    <label for="userpassword" class="form-label">Password</label>
                                    <input type="password" class="form-control" name="password" id="userpassword" placeholder="Enter password" required>
                                    <div class="invalid-feedback">
                                        Please Enter Password
                                    </div>
                                    <span class="text-danger">@error('password')
                                        {{$message}}
                                    @enderror</span>
                                </div>

                                <div class="mt-4 d-grid">
                                    <button class="btn btn-primary waves-effect waves-light" type="submit">Register</button>
                                </div>
                            </form>
                            <div class="mt-3">
                               <a href={{ route('register') }}><p>Don't Have Any Account?</p></a>
                               <a href={{ route('reset-password') }}><p>Forget Password</p></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <script>

</script> --}}
@endsection
