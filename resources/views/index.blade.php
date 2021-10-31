<!DOCTYPE html>
<html>

<head>
  <title>
  </title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" >
  <link rel="stylesheet" type="text/css"  href="{{ asset('css/app.css') }}" />
  <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>


  <script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.0.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" ></script>
    <header class="header">
        <div class="header__top">
        <h4 class="header__logo">CRUD EMPLEADOS</h4>
        <div class="header__datos-user">
            <p style="margin: 0"></p>
            <img src="https://electronicssoftware.net/wp-content/uploads/user.png" alt="" class="header__perfil" />
            <div class="dropdown">
                <button onclick="showLogOut()" class="dropbtn">▾</button>
                <div id="myDropdown" class="dropdown-content">
                <a href="/logoutadmin">Cerrar sesión</a>
                </div>
            </div>
        </div>
        </div>
            <nav class="nav">
                <ul class="nav__ul">
                    <li><a href="/" class="nav__item-link">Inicio</a></li>
                    <li><a href="employee" class="nav__item-link">Empleados</a></li>
                </ul>
            </nav>
    </header>
</head>

    <body>
        <div class="container">
                <div class="inicio__container-cards">
                    <div>
                        <h1 class="inicio__h1">Bienvenido, para registrar ve a la seccion Empleado</h1><br>
                        <h4 class="inicio__h4">Disfruta tu instancia</h4>
                    </div>
                    <img src="https://ethereum.org/static/5dea0acbc8484c42006d7bbed32fa019/dd5bb/doge-computer.png" alt="" class="inicio__img">
                </div>
        </div>
    </body>
    
    <footer>
        <div class="footer-frontOffice" >
                &#169; Todos los derechos reservados.
        </div>
    </footer>        
    
    
</html>

