<!DOCTYPE html>
<html>

<head>
  <title>
  </title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" >
  <link rel="stylesheet" type="text/css"  href="{{ asset('css/app.css') }}" />
  <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>


  <script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
</head>

<body>
<script src="https://code.jquery.com/jquery-3.2.0.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" ></script>
    <header class="header">
    <div class="header__top">
      <h4 class="header__logo">CRUD EMPLEADOS</h4>
      <div class="header__datos-user">
          <p style="margin: 0">
          </p>
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
     <body>
     <div class="container" style="margin-top: 75px;">
    <br /><br />
    <form action=""  method="POST" enctype="multipart/form-data">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" onclick="resetform()" data-toggle="modal" data-target="#exampleModal">
      Agregar Un Empleado
    </button>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
          <h2>Formulario Empleado</h2>
            <button  type="button" class="close" data-dismiss="modal" aria-label="Close" >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group" hidden>
              <label for="my-input">id:</label>
              <input class="input__login height" value="<" type="text" placeholder="id" name="id" id="id"  />
            </div>
            <div class="form-group">
              <label for="my-input">Puesto:</label>
              <select class="input__login height" placeholder="Nombre del puesto" name="idPuesto" id="idPuesto" required >
                  
              </select>
            </div>    
            <div class="form-group">
              <label for="my-input">Nombre:</label>
              <input class="input__login height" type="text" value="" placeholder="John" name="nombres" id="nombres" required />
            </div>
            <div class="form-group">
            <label for="my-input">Apellido:</label>
              <input class="input__login height" type="text" value="" placeholder="Doe" name="apellido" id="apellido" required />
            </div>
            <div class="form-group">
            <label for="my-input">Fecha De ingreso:</label>
              <input class="input__login height" type="date" value="" placeholder="2018-08-25" name="fecha" id="fecha" required />
            </div>
          </div>
          <div class="modal-footer">
          <button type="submit" value="Agregar"  class="btn-primary" name="accion">Guardar</button>
          <button type="submit" value="Modificar"  class="btn-secondary"  name="accion">Modificar</button>
          <button type="submit" value="Eliminar"  class="btn-danger" name="accion">Eliminar</button>
          <a href="../views/empleados.php"  class="btn-cancel"  >Cancelar</a>
          </div>
        </div>
      </div>
    </div>
    
      <br />
      
    </form>
    <br>
    <br>
  </div>
  <table>
    <tr>
      <th>Puesto</th>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Fecha De Ingreso</th>
      <th>Acciones</th>
    </tr>
    <tr>
      <tr>
          
          <form action="" id="myForm" method="POST">
          
          <input type="hidden" name="id" id="id" value="">
          <input selected="selected" type="hidden" name="idPuesto" id="idPuesto" value="">
          <input type="hidden" name="nombres" id="fecha" value="">
          <input type="hidden" name="apellido" id="fecha" value="">
          <input type="hidden" name="fecha" id="fecha" value="">

          <button class="btntabla-seleccionar" value="Seleccionar" type="submit" name="accion">
            <span style="margin-right: 5px;">Seleccionar</span>
          </button>
          </form>
          
        </td>
     
      
      </tr>

    </tr>
  </table>




        <div class="footer-frontOffice" >
                &#169; Todos los derechos reservados.
        </div>
    
    </body>
</html>