<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <script src="js/jquery-3.2.1.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="Spelis.css">
    <title>Modificar</title>
  </head>

  <?php
    $enlace = mysqli_connect("localhost", "root", "");
    $db_seleccionada = mysqli_select_db($enlace, "peliculas2");
  ?>

<b

ody>
  <div class="container">

    <!-- NAV -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="nav">
      <a class="navbar-brand" href="#"><h1>Organizador de peliculas</a></h1>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="nuevo.php">Nuevo<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Modificar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Borrar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Estadísticas</a>
          </li>
        </ul>
      </div>
    </nav>
    <br>
   
<script type="js/bootstrap.min.js"></script>

  <br>
    <table class="table table-hover table-sm">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Director</th>
        <th scope="col">Año</th>
        <th scope="col">Género</th>
        <th scope="col">Vista</th>
      </tr>
    </thead>
  

<?php
    $datos = mysqli_query($enlace, "SELECT * FROM peliculas");
    while($res = mysqli_fetch_array($datos)){
      $nro = utf8_encode($res[0]);
      $titulo = utf8_encode($res[1]);
    if (strcmp($titulo,'Title') == 0){
      continue;
    }
    $director = utf8_encode($res[2]);
    $anio = utf8_encode($res[3]);
    $genre = utf8_encode($res[4]);
    $vista = utf8_encode($res[5]);
    $color = utf8_encode($res[6]);
   
    if ($color == null){
      echo "<tbody class='table-light'>";
    }
    echo "<th>
            <form action=''>
            <input type='checkbox' name='mod'>
            $nro
          </form></th>
          <td>$titulo</td>
          <td>$director</td>
          <td>$anio</td>
          <td>$genre</td>
          <td>$vista</td>
        </tbody>";
  }
?>

</table>

</div>
</body>
</html>
