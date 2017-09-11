<!DOCTYPE html>
<?php include 'encabezado2.php' ?>
<body>

     <header class="header2">
  <figure class="logo pull-right">
    <img src="../img/adespu.png" alt="Adespu" class="img-responsive">
  </figure>
  <nav class="pull-left">
    <ul>
      <a class="selector" href="../index.php">INICIO</a>
      <a class="selector" href="nosotros.php">NOSOTROS</a>
      <a class="selector" href="servicios.php">SERVICIOS</a>
      <a class="selector" id="select" href="contacto.php">CONTACTO</a>
    </ul>
  </nav>
  <div class="op-menu">
    <i class="fa fa-bars fa-2x abrir" aria-hidden="true"></i>
  </div>
</header>
  <!-- <div class="bannerc">
    <p>Estamos cerca de ti</p>
  </div> -->

  <div class="mapa">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.0250383169987!2d-89.65711229404633!3d21.07166216363234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f567598bbd552bb%3A0xa5ba6db3626bdca!2sCalle+57-B+842%2C+Fraccionamiento+Las+Am%C3%A9ricas%2C+M%C3%A9rida%2C+Yuc.!5e0!3m2!1ses!2smx!4v1503354879530" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>

  <div class="container datos">


    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
      <div class="offer offer-warning">
        <div class="shape">
          <div class="shape-text">
            <i class="fa fa-street-view" aria-hidden="true"></i>
          </div>
        </div>
        <div class="offer-content">
          <h3 class="lead">
          Dirección :
          </h3>
          <p>
                 C. 57-B #839 por C. 100-A y C. 104. Col. Las Americas, Mérida, Yucatán. C.P. 97302
          </p>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
      <div class="offer offer-warning">
        <div class="shape">
          <div class="shape-text">
            <i class="fa fa-clock-o" aria-hidden="true"></i>
          </div>
        </div>
        <div class="offer-content">
          <h3 class="lead">
             Horario :
          </h3>
          <p>
            Lunes a Viernes de 9 am a 6 pm
          </p>
        </div>
      </div>
    </div>
    <div class="clearfix visible-xs visible-sm visible-md "></div>
    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
      <div class="offer offer-radius offer-warning">
        <div class="shape">
          <div class="shape-text">
            <i class="fa fa-phone" aria-hidden="true"></i>
          </div>
        </div>
        <div class="offer-content">
          <h3 class="lead">
             Teléfono :
          </h3>
          <p>
            PENDIENTE
          </p>
        </div>
      </div>
    </div>

    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
      <div class="offer offer-warning">
        <div class="shape">
          <div class="shape-text">
            <i class="fa fa-envelope-open-o" aria-hidden="true"></i>
          </div>
        </div>
        <div class="offer-content">
          <h3 class="lead">
            Correo :
          </h3>
          <p>
            info@adespu.com
          </p>
        </div>
      </div>
    </div>
        </div>
</div>

<section id="contact">
      <div class="section-content">
        <h3>Escribenos tus comentario, dudas o preguntas, estamos para servirte.</h3>
      </div>
      <div class="contact-section">
      <div class="container">
        <form>
          <div class="col-xs-12 col-md-6 form-line">
              <div class="form-group">
                <label for="exampleInputUsername">Escribe tu Nombre</label>
                <input type="text" class="form-control" id="txtNOMBRE" placeholder="Escribe tu nombre completo">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail">Email</label>
                <input type="email" class="form-control" id="txtCORREO" placeholder="Escribe tu Email ">
              </div>
              <div class="form-group">
                <label for="telephone">Teléfono</label>
                <input type="tel" class="form-control" id="txtTELEFONO" placeholder="Escribe tu teléfono a 10 digitos" required>
              </div>
            </div>
            <div class="col-xs-12 col-md-6 text-comentario">
              <div class="form-group">
                <label for ="description">Comentario</label>
                <textarea  class="form-control" id="txtCOMENTARIO" placeholder="Escribe tu mensage"></textarea>
              </div>
              <div class="btn-contact">
                <div id="_AJAX_PRE_"></div>
                <button type="button" class="btn btn-default submit" onclick="sendCORREO()"><i class="fa fa-paper-plane" aria-hidden="true"></i> Enviar mensaje</button>
              </div>
            </div>
        </form>
      </div>
    </section>




<span class="ir-arriba"><i class="fa fa-chevron-up" aria-hidden="true"></i></span>
<?php include 'pie.php' ?>
<script src="../js/jquery.js"></script>
<script src="../js/menu.js"></script>
<script src="../js/sendCORREO.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/botonarriba.js"></script>
</body>
</html>
