<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>

<body class="vh-100">
    <div class="container">
        <nav class="navbar fixed-top px-5 ">
            <div class="container-fluid ">
                <a class="navbar-brand" href="#" style="font-size: 2rem; color:#795458 !important;">NextGen</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">NextGen Menu</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">About</a>
                            </li>
                            <li class="nav-item">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Resume</a>
                            </li>
                            <a class="nav-link" href="#">Work</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <script>
        const images = ['bg.jpg', '2.png', '3.png', '4.png', '5.png', '6.png', 'bg2.png' , '7.png', '8.png', '9.png' , '10.png'];
        var bodyEle = document.body;
        var counter = 0;

        // Preload images
        images.forEach(function(image) {
            new Image().src = '/images/' + image;
        });

        function setBackgroundImage() {
            // Set the background image
            bodyEle.style.backgroundImage = "url('/images/" + images[counter] + "')";

            // Increment counter and loop back to 0 if it exceeds the length of the images array
            counter = (counter + 1) % images.length;
        }

        // Set an interval to change the background image every second (1000 milliseconds)
        setInterval(setBackgroundImage, 1000);

        // Call the function to set the initial background image
        setBackgroundImage();
    </script>

    <main>
        <section class="w-100 vh-100 d-flex flex-column justify-content-center align-items-center">
            <h1 style="color: #795458 !important;">PORTOFLIO</h1>
            <h1 class="mask ">PORTOFLIO</h1>
            <h1 class="mask">PORTOFLIO</h1>
            <h1 class="mask">PORTOFLIO</h1>
        </section>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                var maskElements = document.querySelectorAll('.mask');

                // Function to add the mask class one by one with a delay
                function revealElements(index) {
                    if (index < maskElements.length) {
                        maskElements[index].style.visibility = 'visible'; // Show the element
                        maskElements[index].style.opacity = '1'; // Set opacity to fully visible
                        setTimeout(function() {
                            revealElements(index + 1); // Move to the next element
                        }, 500); // Adjust the delay (in milliseconds) between each element
                    }
                }

                revealElements(0); // Start revealing elements
            });
        </script>

    </main>

</body>

</html>
