@extends('layouts.app')

@section('content')
@if (session('status'))
    <div class="notification is-success" role="alert">
        {{ session('status') }}
    </div>
@endif
<div class="columns">
    <div class="column is-one-third is-offset-one-third m-t-100">
        <div class="card">
            <div class="card-content">
                <h1 class="title">Reset your password</h1>
                <form action="{{route('register')}}" method="POST" role="form">
                    {{csrf_field()}}
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="field">
                        <label for="email" class="label">Email Address</label>
                        <p class="control">
                            <input class="input {{$errors->has('email') ? 'is-danger': ''}}" type="text" name="email" id="email" placeholder="name@example.com" value="{{old('email')}}" required>
                        </p>
                        @if($errors->has('email'))
                        <p class="help is-danger">{{$errors->first('email')}}</p>
                        @endif
                    </div>
                    <div class="field">
                        <label for="password" class="label">Password</label>
                        <p class="control">
                            <input class="input {{$errors->has('password') ? 'is-danger': ''}}" type="password" name="password" id="password" required>
                        </p>
                        @if($errors->has('password'))
                        <p class="help is-danger">{{$errors->first('password')}}</p>
                        @endif
                    </div>
                    <div class="field">
                        <label for="password_confirmation" class="label">Confirm Password</label>
                        <p class="control">
                            <input class="input {{$errors->has('password_confirmation') ? 'is-danger': ''}}" type="password" name="password_confirmation" id="password_confirmation" required>
                        </p>
                        @if($errors->has('password_confirmation'))
                        <p class="help is-danger">{{$errors->first('password_confirmation')}}</p>
                        @endif
                    </div>
                    <!-- The checkbox is not currently working -->
                    <button class="button is-primary is-outlined is-fullwidth m-t-30">Reset Password</button>
                </form>
            </div> <!-- end of card content -->
        </div><!-- end card -->
        <!-- Currently the muted color is not working -->
        <h5 class="has-text-centered m-t-20"><a href="{{route('login')}}" class="is-muted">Already have an account?</a></h5>
    </div>
</div>
<!--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>-->
@endsection
