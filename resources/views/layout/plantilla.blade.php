<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/plantilla.css')}} ">
    <script src="https://kit.fontawesome.com/86f3787a46.js" crossorigin="anonymous"></script>
    <title>@yield('title')</title>
</head>
<body>   
 <div class="container">
        <div id="header">
            <div class="main-header">
                <img src="img/logo.jpg" alt="logo">
                <input type="checkbox" id="menu-bar">
                 <label class="fas fa-bars" for="menu-bar"></label>
                 <nav class="menu">
                    <ul>
                        <li><a href="index.php">inicio</a></li>
                        <li><a href="ranking.php">ranking</a></li>
                        <li><a href="perfil.php">perfil</a></li>
                        <li><a href="faq.php">Faq</a></li>
                        <li><a href="ABM.php">ABM</a></li>
                        <li><a href="contacto.php">contactanos</a></li>
                        <li><a href="register.php">registrate</a></li>
                        <li><a href="login.php">iniciar sesion</a></li>
                    </ul>
                 </nav>
            </div>
        </div>
        
        <main class="container">

           @yield('main')

        </main>

        <div id="footer">
            <img src="img/logo.jpg">
              <div class="block-footer">
                <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="login.php">Iniciá sesión</a></li>
                <li><a href="ranking.php">Ranking</a></li>
                <li><a href="perfil.php">Perfil</a></li>
                <li><a href="contacto.php">Contacto</a></li>
                <li><a href="ABM.php">ABM</a></li>
                <li><a href="faq.php">Preguntas frecuentes</a></li>
                    </ul>
              </div>
        </div>
 </div>
</body>
</html>