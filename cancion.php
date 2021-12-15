<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Duki</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Krona+One&display=swap" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha512-d8F1J2kyiRowBB/8/pAWsqUl0wSEOkG5KATkVV4slfblq9VRQ6MyDZVxWl2tWd+mPhuCbpTB4M7uU/x9FlgQ9Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js'></script>
</head>

<body>
 
    <header>  
        <nav class="navbar navbar-expand-lg navbar-light bg-dark" style="position:relative;">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a href="index.php"><h1 class="duki">Duki</h1></a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="#tit-prox-fechas" id="opciones-navbar">Fechas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="albums.php" id="opciones-navbar">Albums</a>
              </li>   
              <li class="nav-item">
                <a class="nav-link" href="login.php" id="opciones-navbar">Mi sesión</a>
              </li>            
            </ul>            
          </div>
        </div>
      </nav>

    </header>

    <div class="container-fluid">
        
      <?php 
        // Conecto a la base de datos
        $conect = mysqli_connect("localhost", "root", "");
        $db = mysqli_select_db($conect, "base_de_datos");
    
        // obtengo el id
        $id = $_GET['id'];

        //consulto por la letra de la cancion
        $consulta = 'SELECT * from canciones_duki where id='.$id;
        $letra = mysqli_query($conect, $consulta);

        $l = mysqli_fetch_row($letra);
        ?>

        <div class="row" id="cancion">
            <?= $l[4] ?>
        </div>      
    </div>

    
    <footer class="container-fluid">
        <div class="row justify-content-center" id="contenido">
            <h1>Suscribete para recibir información antes que nadie!</h1>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">

                <div class="row justify-content-around">
                    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                        <form class="row g-3">
                        <div class="mb-3">
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                        </form>
                    </div>
            
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 justify-content-start">
                        <button type="button" class="btn btn-primary">Suscribir</button>  
                    </div>
                </div>
             </div>  
        </div>

        <div class="row justify-content-between" id="redes-sociales">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
                <a href="https://open.spotify.com/artist/1bAftSH8umNcGZ0uyV7LMg" target="_blank"><p class="fs-6" id="letras">spotify</p></a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
                <a href="https://www.instagram.com/dukissj/" target="_blank"><p class="fs-6" id="letras">instagram</p></a>
            </div>     
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
                <a href="https://twitter.com/DukiSSJ" target="_blank"><p class="fs-6" id="letras">twitter</p></a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
                <a href="https://www.youtube.com/channel/UCJUYcEdvnYFGajHBW0Nao3w/featured" target="_blank"><p class="fs-6" id="letras">youtube</p></a>
            </div>
        </div>
    </footer>
</body>
</html>