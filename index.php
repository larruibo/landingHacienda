
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Hacienda El Salitre</title>
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
    <script type="text/javascript" src="js/index.js">

    </script>
    <meta name="viewport" content="width=device-width" />
    <link rel="icon" type="image/png" href="fotos/logo-oscuro.png" />
    <script>
       function submitForm(token) {
         document.getElementById("contactForm").submit();
       }
     </script>
    <script type="text/javascript"> _linkedin_data_partner_id = "150553"; </script>
    <script type="text/javascript"> (function(){var s = document.getElementsByTagName("script")[0]; var b = document.createElement("script"); b.type = "text/javascript";b.async = true; b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js"; s.parentNode.insertBefore(b, s);})(); </script>
    <noscript> <img height="1" width="1" style="display:none;" alt="" src="https://dc.ads.linkedin.com/collect/?pid=150553&fmt=gif" /> </noscript>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-80978591-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-80978591-1');
    </script>
  </head>
  <body>

    <section id="inicio" class="seccion-inicio">
      <div class="banner-responsive">
        <div class="margen">
          <div class="logo-banner">
            <img src="fotos/logo-blanco.png" alt="">
          </div>
          <div class="texto-banner">
            <h2>Eventos Corporativos de Fin de Año</h2>
          </div>
        </div>
      </div>
      <div class="imagen-inicio">
        <img id="foto-banner" src="fotos/banner-hacienda/1.jpg" alt="">
      </div>
      <div class="margen-contenido">
        <div class="promociones">
          <p>Se llega el fin del año y es el momento de decidir el lugar para celebrar y reconocer a nuestros <strong>ejecutivos</strong> la labor realizada.</p>
          <p>Si está <strong>buscando salones  o lugares de eventos en Bogota de primer nivel</strong> , existen alternativas mucho más divertidas. Dentro de los <strong>lugares mas exclusivos para eventos empresariales en Bogotá</strong> está la Hacienda El Salitre ubicada en el Valle de Sopó a tan solo 30 minutos de la capital. Para las <strong>fiestas empresariales</strong> de fin de año tenemos los mejores planes.</p>
          <p><strong>¡Escríbenos ya!</strong></p>
        </div>
      </div>
    </section>
    <section id="formulario" class="seccion-formulario">
      <div class="imagen-formulario">
        <img src="fotos/banner-hacienda/2.jpg" alt="">
      </div>
      <div class="margen-contenido" style="height: 100vh;">
        <form id="contactForm" class="formulario" action="./" method="post">
          <h2>Últimas fechas con el 10% de descuento</h2>
          <h3>1 de Diciembre</h3>
          <h3>15 de Diciembre</h3>
          <h3>23 de Diciembre</h3>
          <h5>** Pregunta por otras fechas disponibles</h5>
          <label for="name">Nombre</label>
          <input type="text" name="name" value="" required>
          <label for="email">E-mail</label>
          <input type="email" name="email" value="" required>
          <label for="telephone">Teléfono</label>
          <input type="text" name="telephone" value="" required>
          <label for="description">Descripción</label>
          <textarea name="description" rows="5" cols="40" required></textarea>
          <div class="boton">
            <button class="g-recaptcha" data-sitekey="6Le1JzoUAAAAAJ9zDsTil6c1tR22pFc2uQjKqa1t" data-callback="submitForm">
              Enviar
            </button>
          </div>
        </form>
      </div>

    </section>
    <section id="final" class="seccion-final">
      <footer class="footer">
        <div class="margen">
          <div class="info-footer">
            <div class="logo-footer">
              <img src="fotos/logo-oscuro.png" alt="">
            </div>
            <div class="proveedores">
              <h2>Proveedores</h2>
              <div class="grid-proveedores">
                <div class="proveedor">
                  <img src="fotos/proveedores/bodega-y-cocina.jpg" alt="">
                </div>
                <div class="proveedor">
                  <img src="fotos/proveedores/casa-medina.jpg" alt="">
                </div>
                <div class="proveedor">
                  <img src="fotos/proveedores/eventos.jpg" alt="">
                </div>
              </div>
            </div>
            <div class="redes-footer">
              <span>Síguenos</span>
              <a href="https://www.facebook.com/Haciendaelsalitre" target="_blank"><i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i></a>
              <a href="https://www.instagram.com/haciendaelsalitre" target="_blank"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
            </div>
            <div class="contacto-footer">
              <span><i class="fa fa-envelope fa-lg" aria-hidden="true"></i>haciendaelsalitre@gmail.com</span>
              <span><i class="fa fa-phone-square fa-lg" aria-hidden="true"></i>(+57) 315 846 4211 - (+57) 315 801 5404</span>
              <span><i class="fa fa-phone-square fa-lg" aria-hidden="true"></i>(1) 8052632</span>
            </div>
          </div>
        </div>

      </footer>
    </section>
    <a href="#formulario"><div class="flotante">
      <span>Contacto</span>
    </div></a>
    <script src='https://www.google.com/recaptcha/api.js'></script>
  </body>
</html>
<?php include_once('sendmail.php'); ?>
