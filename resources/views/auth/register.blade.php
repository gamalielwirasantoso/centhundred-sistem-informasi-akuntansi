@extends('layouts.app')

@section('content')
<div style="margin-top: -15px;" class="sufee-login d-flex align-content-center flex-wrap container">
    <div class="container">
        <div class="login-content">
            <div class="login-logo">
                <a href="index.html">
                    <img class="align-content cent-logo" src="images/cent-logo.png" alt="cent-logo" />
                </a>
            </div>
            <div class="login-form">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group row">
                        <label for="name" class="col-md-12 col-form-label ">User {{ __('Name') }}</label>

                        <div class="col-md-12">
                            <input placeholder="User Name" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-12">
                            <input placeholder="Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label">{{ __('Password') }}</label>

                        <div class="col-md-12">
                            <input placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-12 col-form-label ">{{ __('Confirm Password') }}</label>

                        <div class="col-md-12">
                            <input placeholder="Confirm Password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" /> Agree the terms
                            and policy
                        </label>
                    </div>

                    <button type="submit" class="btn-cent">
                        {{ __('Register') }}
                    </button>

                    <div class="register-link m-t-15 text-center">
                        <p>
                            Already have account ?
                            <a href="{{ route('login') }}" class="signup-login-redirect">
                                Sign in</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection