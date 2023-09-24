@extends('component.app')

@section('content')

<section id="hero-animated" class="hero-animated d-flex align-items-center">
  <div class="container pt-5 mt-5">
  <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
    <img src="{{ asset("img/web.gif") }}" class="rounded" width="400" height="auto">
    <h2>Welcome to My Website!</h2>
    <p>This is a website about my profile and my beloved campus.</p>
    <div class="d-flex">
      <a class="btn btn-sm btn-primary ms-2" href="{{ url('home/profile') }}">Get to know more about me!</a>
      <a class="btn btn-sm btn-primary ms-2" href="{{ url('home/campus') }}">My Campus</a>
    </div>
  </div>
  </div>
</section>
@endsection