<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/about.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>About</title>
</head>
<body>
    <div id="navMenu" class="overlayClose">
        <a href="">ABOUT</a>
        <a href="">RESUME</a>
        <a href="">WORK</a>
    </div>
    <nav class="navbar">
        <p>NextGen</p>
        <span onclick="openNav()">
        <div class="menu" id="menu">
            <div class="one"></div>
            <div class="two"></div>
        </div>
        </span>
    </nav>
    <div class="container-fluid">
        <div class="content">
            <p>OUR TEAM</p>
            <div class="teamOpt">
                <div class="opt">
                    <a href="/menghour">
                    <div class="member hour">
                        <img src="image/hour.png" alt="">
                    </div>
                    </a>
                    <p>CHHIN MENGHOUR</p>
                </div>
                <div class="opt">
                    <div class="member panhar">
                        <img src="image/hour.png" alt="">
                    </div>
                    <p>NANGDY PANHAR</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<script>
function openNav() {
    if(document.getElementById("menu")){
        document.getElementById("navMenu").className="overlayOpen";
        document.getElementById("menu").className="menu close"; 
        document.getElementById("menu").setAttribute("id", "closeMenu"); 
    }
    else if(document.getElementById("closeMenu")){
        document.getElementById("navMenu").className="overlayClose";
        document.getElementById("closeMenu").className="menu"; 
        document.getElementById("closeMenu").setAttribute("id", "menu"); 
    }
}

</script>