<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    	<script src="js/jquery-3.3.1.min.js"></script>
    	<script src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="Snuevo.css">
    	<title> Nueva película </title>
	</head>

    <?php
        $enlace = mysqli_connect("localhost", "root", "");
        $db_seleccionada = mysqli_select_db($enlace, "peliculas2");
    ?>

<body>
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
            <a class="nav-link" href="modificar.php">Modificar</a>
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

    <div id="espacio"> </div>

    <div class="contain">
        <form class="needs-validation" method="post" novalidate>
            <div class="form-row">

                <div class="col-md-4 mb-2">
                  <label for="validationCustom01"> Título </label>
                  <input type="text" class="form-control" id="validationCustom01" name="titulo" required>
                  <div class="valid-feedback"> Apa... </div>
                  <?php    
                    if (isset($_POST['titulo'])){
                        $titulo = $_POST['titulo'];
                    }
                ?>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="validationCustom02"> Director </label>
                    <input type="text" class="form-control" id="validationCustom02" name="director" required>
                    <div class="valid-feedback"> Un crack? </div>
                    <?php 
                        if (isset($_POST['director'])){
                            $director = $_POST['director'];
                        }
                    ?>
                </div>

                <div class="col-md-1 mb-3">
                    <label for="validationCustom03"> Año </label>
                    <select class="custom-select" name="anio">
                        <option>Año</option>
                        <?php $year = date("Y");                           
                            for ($i = 1900; $i <= $year; $i++) {
                                echo '<option value="'.$i.'">'.$i.'</option>';
                            }
                            if (isset($_POST['anio'])){
                                $anio = $_POST['anio'];
                            }
                        ?>
                    </select>
                </div>

            </div>

            <div class="form-row">

                <div class="col-md-3 mb-3">
                    <label for="validationCustom04"> Género </label>
                    <input type="text" class="form-control" id="validationCustom04" name="genre" required>
                    <div class="valid-feedback"> No sabía que veías ese género... </div>
                    <?php 
                        if (isset($_POST['genre'])){
                            $genero = $_POST['genre'];
                        }
                    ?>
                </div>

                <div class="col-md-1 mb-3">
                    <label for="validationCustom05"> Vista </label>
                    <select class="custom-select" id="vista" name="vista">
                        <option value="si"> Sí </option>
                        <option value="no" selected> No </option>
                    </select>
                    <?php 
                        if (isset($_POST['vista'])){
                            $vista = $_POST['vista'];
                        }
                    ?>
                </div>

                <div class="col-md- mb-3">
                    <label for="validationCustom05"> Gustó? </label>
                    <select class="custom-select" id="gusto" name="gusto" disabled>
                        <option value="2"> NO. </option>
                        <option value="1"> AWENSOME </option>
                        <option selected> Meh solo la ví.. </option>
                    </select>
                     <?php 
                    if (isset($_POST['gusto'])){
                        $gusto;
                        switch ($_POST['gusto']) {
                            case 'Meh solo la vi..':
                                $gusto = "naranja";
                                break;
                            case 'AWENSOME':
                                $gusto = "rosa";
                                break;
                            default:
                                $gusto = "blanco";
                                break;
                        }
                    }


                    ?>
                </div>

            </div>

            <button class="btn btn-primary" type="submit">Submit form</button>
        </form>
    </div>
    <div id="espacio"></div>
</div>

<script>
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            var forms = document.getElementsByClassName('needs-validation');
            var validation = Array.prototype.filter.call(forms, function(form) {
                  form.addEventListener('submit', function(event) {
                      if (form.checkValidity() === false) {
                          event.preventDefault();
                          event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                  }, false);
            });
          }, false);
        })();
</script>

<script>
    $(document).ready(function(){
        $("#vista").change(function(){
            $("#gusto").removeAttr("disabled");
        });
    });
</script>

<?php 
    $sql = "INSERT INTO `peliculas`(`Número`,`Título`, `Director`, `Año`, `Género`, `Vista`, `Color`) VALUES (9000, $titulo, $director, $anio, $genero, $vista, $gusto)";
    if(mysqli_query($db_seleccionada,  $sql));
?>

</body>
</html>
