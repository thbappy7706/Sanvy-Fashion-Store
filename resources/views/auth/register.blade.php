@extends('layouts.admin')
@section('title')

    Sign Up||Sanvy Fashion Store

@endsection


@section('content')
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-6  ">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-2">
                        <!-- Nested Row within Card Body -->
                        <div class="row">

                            <div class="col-md-12">
                                <div class="p-5">
                                    <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" method="POST" action="{{ route('register') }}" >
                                @csrf

                                <div class="form-group">

                                        <input type="text" class="form-control form-control-user" id="name"   name="name" :value="old('name')" required autofocus autocomplete="name" placeholder=" Name">
                                    </div>




                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="email" name="email" :value="old('email')" required placeholder="Email Address">
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" id="password" placeholder="Password" name="password" required autocomplete="new-password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" id="password_confirmation" name="password_confirmation" required autocomplete="new-password" placeholder="Repeat Password">
                                    </div>
                                </div>

                                <hr>


                                <button class="btn btn-google btn-user btn-block">
                                    {{ __('Register') }}

                                </button>

                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a>

                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="{{ route('login') }}">  {{ __('Already registered?') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            </div>
        </div>
    </div>

@endsection
