@extends('layouts.app')

@section('content')
    <!-- Apply the background class here -->
    <div class="container-fluid d-flex justify-content-center align-items-center login-page" style="height: 100vh;">
        <div class="card shadow-lg" style="width: 360px; border-radius: 12px;">
            <div class="card-header text-center bg-primary text-white"
                style="border-top-left-radius: 12px; border-top-right-radius: 12px;">
                <h5 class="mb-0">USER LOG-IN</h5>
            </div>
            <div class="card-body text-center">

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-3 input-group">
                        <span class="input-group-text bg-light"><i class="bi bi-person"></i></span>
                        <input type="email" name="email" id="email" placeholder="Username"
                            class="form-control @error('email') is-invalid @enderror" required autocomplete="email"
                            autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3 input-group">
                        <span class="input-group-text bg-light"><i class="bi bi-lock"></i></span>
                        <input type="password" name="password" id="password" placeholder="Password"
                            class="form-control @error('password') is-invalid @enderror" required
                            autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="form-check">
                            <input type="checkbox" name="remember" id="remember" class="form-check-input"
                                {{ old('remember') ? 'checked' : '' }}>
                            <label for="remember" class="form-check-label">Remember me</label>
                        </div>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-muted small">Forgot Password?</a>
                        @endif
                    </div>

                    <!-- Login Button -->
                    <button type="submit" class="btn btn-primary w-100">LOG IN</button>

                </form>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <style>
        .card {
            background-color: rgba(0, 0, 0, 0.9);

        }

        .card-header h2 {
            font-size: 2rem;
            color: #333;
        }
    </style>
@endsection
