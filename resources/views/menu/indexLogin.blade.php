@extends('partials.main')
@section('content')
<div class="content">
          
  {{-- Tittle Page --}}
  <h2 class="text-center tittle">View Furniture</h2>
  {{-- End of Tittle Page --}}
  
  <div class="container ">
    {{-- Katalog --}}
      <div class="row align-items-start ">
        <div class="col pb-4" id="card">
          <div class="card tengah" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body" >
              <h5 class="card-title">Tittle</h5>
              <p class="card-text">price</p>
              <div class="row align-item-center">
                <div class="col-md-3">
                  <a href="" class="btn btn-primary" >Buy</a>
                </div>
                <div class="col-md-3 justify-content-end">
                  <a href="" class="btn btn-primary" >Detail</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    {{-- End of Katalog --}}
  </div>
</div>
@endsection

