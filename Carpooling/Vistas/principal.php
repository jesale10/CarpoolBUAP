<?php
  session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Carpool BUAP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link href="css/principal.css" rel="stylesheet">
  </head>
  <body>
  
  <!-- Navigation bar -->
  <nav class="navbar navbar-light bg-light static-top">
    <div class="container">
      <a class="navbar-brand" href="#">Carpool BUAP</a>
      <a class="btn btn-primary" href="#">Iniciar Sesión</a>
    </div>
  </nav>

  <!-- Image overlay -->
  <header class="masthead text-black text-center">
    <div class="overlay"></div>
  </header>
  <br>

  <!-- Information text -->
  <section class="bg-light text-center">
    <div class="container">
      <h3>El carpooling es el uso compartido de un automóvil privado o de alguna compañía para trasladarse
        en un mismo viaje, con un conductor y uno o más pasajeros en horarios y rutas comunes establecidas
        por ambos sujetos con distintas modalidades para acordar el viaje, ya sea por medio de una aplicación
        móvil o de manera personal.</h3>
    </div>
    <br>
  </section>

  <!-- Information Grid -->
  <section class="bg-light text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="mx-auto mb-5 mb-lg-0 mb-lg-3">
            <h3>Ayuda a la comunidad</h3>
            <p class="lead mb-0">Reducir tiempo y costo de traslado de una comunidad universitaria cerrada.
            </p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="mx-auto mb-5 mb-lg-0 mb-lg-3">
            <h3>Disminuir la contaminación</h3>
            <p class="lead mb-0">Reducir gases de efecto invernadero generados por el uso del automóvil.​
            </p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="mx-auto mb-lg-0 mb-lg-3">
            <h3>Convivencia</h3>
            <p class="lead mb-0">Promover la convivencia entre los diferentes miembros de la comunidad.​</p>
          </div>
        </div>
      </div>
    </div>
    <br>
  </section>

  <section class="features-icons bg-light text-center">
    <div class="container">
      <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
        <form>
          <div class="form-row">
            <div class="col-12 col-md-9 mb-2 mb-md-0">
              <input type="email" class="form-control form-control-lg" placeholder="Introduce tu correo institucional...">
            </div>
            <div class="col-12 col-md-3">
              <button type="submit" class="btn btn-block btn-lg btn-primary">¡Regístrate!</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <br>
  </section>

  </body>
</html>
