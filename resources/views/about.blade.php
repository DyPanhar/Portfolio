<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>

    <nav class="navbar navbar-expand-lg mb-3">
        <div class="container">
            <a class="navbar-brand" href="#" style="font-size: 2rem">NextGen</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto mx-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Resume</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Work</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="p-5 text-center text-sm-start">
        <div class="container">
            <div class="d-sm-flex align-items-center justify-content-between" style="position: relative">
                <div class="mt-5">
                    <h1>Hello, <br>I'm <span id="auto-type"></span></h1>
                    <p class="lead my-5 des">
                        My name is NangdyPanhar. Currently , a 2nd year student in CADT.I'm a passionate person who love
                        solving problems and developing new stuff as well as learning new stuff along the way.
                    </p>
                </div>
                <img src="/images/me2.png" alt="" class="img-fluid w-50 d-none d-lg-block mx-5">
                {{-- <div class="bg-img  d-none d-sm-block">
                </div> --}}
            </div>
        </div>
        <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
        <script>
            var typed = new Typed("#auto-type",{
                strings : ["DyPanhar" , "Developer" , "Guitarist"],
                typeSpeed : 150,
                backSpeed : 150,
                loop: true
            })
        </script>
    </section>

    <section style="background-color: #453f78;" class="p-5 b-sec hidden">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="left-sec">
                <div>
                    <h1 style="color:whitesmoke !important;">Education</h1>
                    <span class="d-flex">
                        <h2 style="color:white !important;">2022 - present :</h2>
                        <p class="my-1 h3 mx-2"
                            style="font-family:'Strait', sans-serif; font-weight: 400;color:white !important;">
                            Cambodia Academy Technology Digital
                            <br>Computer Science
                        </p>
                    </span>
                </div>

                <div class="exp container-sm container-md">
                    <h1 style="margin-top: 15px">Experience</h1>
                    <span class="d-flex">
                        <h2>2022 - present :</h2>
                        <p class="my-1 h3 mx-2" style="font-family:'Strait', sans-serif; font-weight: 400;">
                            Still Grinding
                            <br>having a strong knowlegde of SQL ,
                            <br> laravel,php,html ,css , java , c++ , c
                        </p>
                    </span>

                    <div class="item d-flex justify-content-around">
                        <div class="btn  w-text fs-5 item-btn">
                            #Creative
                        </div>
                        <div class="btn  w-text fs-5 item-btn">
                            #Community
                        </div>
                        <div class="btn  w-text fs-5 item-btn ">
                            #Critical Thinking
                        </div>
                    </div>

                </div>
            </div>

            <div class="right-sec d-sm-none d-md-none d-lg-block text-center ">
                <h1 class="res">RESUME</h1>
                <h1 class="res res1">RESUME</h1>
                <h1 class="res res1">RESUME</h1>
            </div>
        </div>

        <div class="w-text b-name">
            <h1 class="name">NANGDYPANHAR</h1>
        </div>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="{{asset('js/index.js')}}"></script>
</body>

</html>
