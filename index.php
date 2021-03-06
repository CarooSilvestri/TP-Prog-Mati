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
        <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            
          <a href="index.php"><h1 class="duki">Duki</h1></a>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#tit-prox-fechas" id="opciones-navbar">Fechas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="albums.php" id="opciones-navbar">Albums</a>
              </li>   
              <li class="nav-item">
                <a class="nav-link" href="login.php" id="opciones-navbar">Mi sesi??n</a>
              </li>            
            </ul>            
          </div>
        </div>
      </nav>
    
        <div class="row-fluid">    
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <img src="rsc/Duki.jpg" id="header">
            </div>
        </div>         
    </header>

    <div class="container-fluid">
       <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="quien-es">
                <p class="fs-4">Con m??s de 9 millones de oyentes mensuales, Duki es uno de los 1000 artistas m??s escuchados en el mundo.
                    La suma de las visualizaciones de sus v??deos asciende tan velozmente como su popularidad, contando con
                    m??s de 1.3 billones en su canal.</p>
                    <br>
                <p class="fs-4">En 2018, tras agotar localidades en el m??tico Estadio Luna Park de la ciudad de Buenos Aires, realiz?? 
                    una gira de 15 shows por Espa??a.</p>
                    <br>
                <p class="fs-4">En 2019 encabez?? el Buenos Aires Trap, el festival m??s grande del g??nero en Argentina y una gira que 
                    incluy?? shows en Estados Unidos, M??xico, Chile, Uruguay y Per??.  El ??xito de su tema ???Goteo???, llev?? a 
                    Duki a permanecer 24 semanas en el puesto n??mero 1 de Argentina contando con m??s de 106 millones de
                    reproducciones y culmin?? ese a??o lanzando su primer ??lbum ???S??per Sangre Joven??? con 10 canciones.</p>
                    <br>
                <p class="fs-4">En 2020, Duki fue invitado por Bad Bunny para participar en su nuevo ??lbum en el tema ???Hablamos Ma??ana??? 
                    donde volvi?? a exportar la m??sica argentina por todo el mundo. Ese mismo a??o form?? parte del Vive Latino 
                    Festival en M??xico y continu?? cosechando ??xitos como ???H.I.E.L.O???, ???Fornai???, ???Caf????? y ???Acapella???. El 2020
                    culmin?? con el lanzamiento de ???24???, un EP de 8 canciones que dura 24 minutos y fue presentado el d??a de 
                    su cumplea??os n??mero 24.</p>
                    <br>
                <p class="fs-4">Este abril de 2021 publicar?? su nuevo disco del que ya ha adelantado ???Muero de fiesta este finde??? con Ca7riel.</p>
            </div>
        </div>
        
        <section class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="background-color: #F2A7BB;">
                <h1 id="tit-prox-fechas">Pr??ximas fechas</h1>
                <div class="row justify-content-around" id="prox-fechas">
                    <div class="col-sm-12 col-md-6 col-lg-2" id="fecha">
                    <div>
                        <h2>8/7</h1>
                        <p class="fs-5">Madrid, Espa??a</p>
                    </div>
                    </div>    
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-2" id="fecha">
                    <div>
                        <h2>10/7</h1>
                        <p class="fs-5">Royal Summer Festival 2021</p>
                    </div> 
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-2" id="fecha">
                    <div>
                        <h2>15/7</h1>
                        <p class="fs-5">Puro Latino Fest 2021 Torremolinos</p>
                    </div>    
                    </div>   
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-2" id="fecha">
                    <div>
                        <h2>17/7</h1>
                        <p class="fs-5">Alma Latina Festival 2021</p>
                    </div>
                    </div>
                </div>
            </div>
        </section>

   
        <section class="row">
            <img src="rsc/1.jpg" class="img-fluid" id="img1" width="100%" alt="duki">
        </section>
        
        
        <article class="row" id="cantidades">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row justify-content-around">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-2" id="numeros">        
                        <div class="contador fs-2">8</div>
                        <p class="fs-4">Festivales</p>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-2" id="numeros">   
                        <div class="contador fs-2">2000</div>
                        <p class="fs-4">Conciertos</p>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-2" id="numeros">   
                        <div class="contador fs-2">88</div>
                        <p class="fs-4">Ediciones</p>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-2" id="numeros">    
                        <div class="contador fs-2">3500</div>
                        <p class="fs-4">Artistas</p>
                    </div>   
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-2" id="numeros">    
                        <div class="contador fs-2">4850000</div>
                        <p class="fs-4">Suscriptores en Youtube</p>
                    </div> 
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-2" id="numeros">    
                        <div class="contador fs-2">129</div>
                        <p class="fs-4">Marcas</p>
                    </div> 
                </div>
            </div>
        </article>
    </div>
        
    <script>
 
    $('.contador').counterUp({delay:10,time:1000 })
    var figure = $(".video").hover( hoverVideo, hideVideo );

    function hoverVideo(e) {  
        $('video', this).get(0).play(); 
    }

    function hideVideo(e) {
        $('video', this).get(0).pause(); 
    }

    </script>

    <footer class="container-fluid">
        <div class="row justify-content-center" id="contenido">
            <h1>Suscribete para recibir informaci??n antes que nadie!</h1>
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