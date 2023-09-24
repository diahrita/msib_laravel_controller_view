@extends('component.app')

@section('content')
<div class="container pt-5">
  <div class="card mt-5 shadow-lg p-3 mb-5 bg-body-tertiary rounded border-primary">
    <div class="container">
      <br>
        <h3 class="mb-4 fs-3 text-dark card-header bg-white">
          <center><b>MY CAMPUS</b></center>
        </h3>
      <div class="row g-0 position-relative">
        <div class="col-md-6 mb-md-0 p-md-4 text-center">
          <div id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-ride="false">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 1"></button>
            </div>
            <div class="carousel-inner text-center">
              <div class="carousel-item active">
                <img src="{{ asset("img/poliwangi.png") }}" class="w-50 rounded">
              </div>
              <div class="carousel-item">
                <img src="{{ asset("img/2.jpg") }}" class="w-100 rounded">
              </div>
              <div class="carousel-item">
                <img src="{{ asset("img/4.jpg") }}" class="w-100 rounded">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        <div class="col-md-6 p-4 ps-md-0 fs-5">
          <h4 class="mt-0 ">
            <p>{{ $nama }}</p>
          </h4>
          <h5><p>{{ $desc }}</p></h5>
          <p class="lh-1">Alamat : {{ $alamat }}</p>
          <p class="lh-1">Telepon : {{ $telp }}</p>
          <p class="lh-1">Provinsi : {{ $prov }}</p>
        </div>
        <a class="btn btn-sm btn-primary ms-2" href="https://poliwangi.ac.id/">More information</a>
      </div>
    </div>
  </div>
</div>
@endsection