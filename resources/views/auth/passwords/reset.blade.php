@extends('layouts.admin')
@section('title')

    Forget Password||Sanvy Fashion Store

@endsection

@section('content')
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-8  ">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12  "></div>
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-2">Forgot Your Password?</h1>
                                        <p class="mb-4">We get it, stuff happens. Just enter your email address below and we'll send you a link to reset your password!</p>
                                    </div>
                                    <form class="user" method="POST" action="{{ route('password.email') }}" >
                                        @csrf
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" id="email"  name="email" :value="old('email')" required autofocus aria-describedby="emailHelp" placeholder="Enter Email Address...">
                                        </div>

{{--                                        <a href="login.html" class="btn btn-primary btn-user btn-block">--}}
{{--                                            Reset Password--}}
{{--                                        </a>--}}

                                        <button class="btn btn-primary btn-user btn-block">
                                            {{ __('Email Password Reset Link') }}

                                        </button>

                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="{{route('register')}}">Create an Account!</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="{{route('login')}}">Already have an account? Login!</a>
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

