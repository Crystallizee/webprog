@extends('partials.main')
@section('content')
<div class="content">
          
  {{-- Tittle Page --}}
  <h2 class="text-center tittle">Login</h2>
  {{-- End of Tittle Page --}}
  
  <div class="container ">
    <div class="loginForm">
        <form action="/login" method="post">
            @csrf
            <div class="row px-5">
                <div class="col-sm-3 pt-2 pb-2">
                    <label for="email" class="form-label">E-mail</label>
                </div>
                <div class="col-sm-7">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="example@example.xyz" name="email" value="{{ old('email') }}" required>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="row px-5">
                <div class="col-sm-3 pt-2 pb-2">
                    <label for="password" class="form-label">Password</label>
                </div>
                <div class="col-sm-7">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="password" name="password" required>
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="row px-5">
                <div class="form-group mb-3">
                    <label for="remember">Remember me</label>
                    <input type="checkbox" name="remember" value="1">
              </div>
            </div>
            <div class="col-1" id="btn-submit">
                <button type="submit" class="btn btn-primary">login</button>
            </div>

        </form>
    </div>
  </div>
</div>
@endsection

