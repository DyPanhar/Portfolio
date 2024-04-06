@extends('layout.navbar')
@section('content')
    <div class="container text-center mt-5">
        <div class="row">
            <div class="col-6 col-md-6 col-lg-6 " style="margin-top: 75px;">
                <h1 class="text-center" style="font-size: 4rem">Hello, I'm <br>
                    <span class="auto-type" style="font-size: 4rem"></span>
                </h1>
                <p class="text-center" style="font-size: 1.5rem">My fullname is NangdyPanhar and currently a year 2nd student
                    at CADT.I'm passionate in sloving problem and discovering new stuff
                    related to technology.
                </p>
            </div>
            <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
            <script>
                var typed = new Typed(".auto-type", {
                    strings: ["DYPANHAR", "A half stack developer"],
                    typeSpeed: 200,
                    backSpeed: 250,
                    loop: true
                });
            </script>
            <div class="col-12 col-lg-5 col-md-6  ms-5 " style=" position: relative;">
                <img src="{{ asset('images/me2.png') }}" alt="" id="img">
                <span class="bg-shape"></span>
                <div class="container text-center logo-span">
                    <a href="https://www.instagram.com/DyPanhar"><i class="fa-brands fa-instagram" id="logo" ></i></a>
                    <a href="https://www.facebook.com/dypanhar"><i class="fa-brands fa-facebook" id="logo" style="margin-left: 20px"></i></a>
                    <a href="https://kh.linkedin.com/in/dy-panhar-4064a4196"><i class="fa-brands fa-linkedin" id="logo" style="margin-left: 20px"></i></a>
                </div>
            </div>

        </div>
    </div>
@endsection
