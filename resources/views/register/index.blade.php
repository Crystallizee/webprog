@extends('partials.main')
@section('content')
<div class="content">
          
  {{-- Tittle Page --}}
  <h2 class="text-center tittle">Register</h2>
  {{-- End of Tittle Page --}}
  
  <div class="container">
    <div class="registerForm">
        {{-- Register form --}}
        <form action="/register" method="post" >
            @csrf
            <div class="row px-5">
                <div class="col-sm-3 pt-2 pb-2">
                    <label for="name" class="form-label">Full Name</label>
                </div>
                <div class="col-sm-7">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Full Name" name="name" value="{{ old('name') }}" required>
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
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
                <div class="col-sm-3 pt-2 pb-2">
                    <label for="address" class="form-label">Address</label>
                </div>
                <div class="col-sm-7">
                    <textarea type="text-area" class="form-control @error('address') is-invalid @enderror" id="address" placeholder="address" rows="4" name="address" value="{{ old('address') }}" required></textarea>
                    @error('address')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="row px-5">
                <div class="col-sm-3 pt-2 pb-2">
                    <label for="gender" class="form-label">Gender</label>
                </div>
                <div class="col-sm-7">
                    <div class="form-check @error('gender') is-invalid @enderror">
                        <input class="form-check-input " type="radio" name="gender" id="gender" value="male">
                        <label class="form-check-label" for="gender">
                          Male
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="gender" value="female">
                        <label class="form-check-label" for="gender">
                          Female
                        </label>
                      </div>
                      @error('gender')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                      @enderror
                </div>
            </div>
                <div class="col-1" id="btn-submit">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
        </form>
        {{-- Register form --}}
    </div>
  </div>
</div>
@endsection

