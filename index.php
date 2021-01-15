<!DOCTYPE html>

<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Gabriel Espinosa - Periodista</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>

  <div class="contenedor">

    <!--BARRA DE NAVEGACIÓN-->
    <nav id="header" class="header">
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo" id="logo"><a href="#inicio">Gabriel Espinosa</a></label>
      <ul>
        <li><a href="#inicio"><i class="fas fa-home"></i>Inicio</a></li>
        <li><a href="#sobre-mi"><i class="fas fa-user"></i>Acerca de mí</a></li>
        <li><a href="#servicios"><i class="fas fa-briefcase"></i>Servicios</a></li>
        <li><a href="#contacto"><i class="fas fa-envelope"></i>Contacto</a></li>
      </ul>
    </nav>
    <!--FIN BARRA DE NAVEGACIÓN-->

    <!--INICIO-->
    <section id="inicio" class="inicio">
      <div class="contenedor-inicio">
        <div class="img-container"><img class="foto" src="PERFIL.png"></div>
        <h1>Gabriel Espinosa Bustos</h1>
        <h2>Periodista</h2>
        <a title="Perfil en LinkedIn - Gabriel Espinosa"
          href="https://www.linkedin.com/in/gabriel-espinosa-bustos-883788190/" target="_blank"><i
            class="fab fa-linkedin linkedin"></i></a>
      </div>
    </section>
    <!--FIN INICIO-->

    <!--ACERCA DE MI-->
    <section id="sobre-mi" class="sobre-mi">
      <h2><i class="fas fa-user"></i> Acerca de mí</h2>

      <p><b>Periodista y Licenciado en Comunicación Social de la Universidad de Concepción</b>, con experiencia en
        redacción de textos periodísticos para medios de comunicación impresos (Diario El Sur) y
        gestión de la comunicación corporativa (Buses Hualpén), implementando canales comunicacionales internos,
        elaboración de informes de prensa, gestión de prensa, organización de eventos y ejecución de campañas
        comerciales
        y de seguridad.</p>

      <p>En la actualidad, mi objetivo es comenzar una carrera como <b>redactor de contenidos web autónomo (freelance)</b>,
        enfocado en la escritura de textos
        optimizados para su posicionamiento orgánico en Google u otros motores de búsqueda (SEO), aumentando la
        visibilidad de mis clientes en Internet y ayudando a los usuarios a encontrar esa información de valor que tanto
        necesitan.</p>

      <p>Sin embargo, también estoy interesado en integrar equipos enfocados en la
        comunicación digital en empresas dedicadas a la prensa, marketing o diseño/desarrollo de productos, en un rol
        similar o bien vinculado al Search Engine Marketing (SEM), Copywriting o UX Writing.</p>
    </section>
    <!--FIN ACERCA DE MI-->

    <!--SERVICIOS-->
    <section id="servicios" class="servicios">

      <h2><i class="fas fa-briefcase"></i> Servicios</h2>

      <div class="grid-servicios">

        <div class="investigacion" class="servicio"><i class="fab fa-google fa-2x flex-show"></i>
          <i class="fab fa-google flex-hidden" style="display: none"></i>
          <h3>Investigación de palabras clave</h3>
        </div>

        <div class="auditoria" class="servicio">
          <i class="fas fa-laptop-code fa-2x flex-show"></i>
          <i class="fas fa-laptop-code flex-hidden" style="display: none"></i>
          <h3>Auditoría de contenidos</h3>
        </div>

        <div class="editorial" class="servicio">
          <i class="fas fa-edit fa-2x flex-show"></i>
          <i class="fas fa-edit flex-hidden" style="display: none"></i>
          <h3>Redacción de contenido editorial</h3>
        </div>

        <div class="producto" class="servicio"><i class="far fa-edit fa-2x flex-show"></i>
          <i class="far fa-edit flex-hidden" style="display: none"></i>
          <h3>Redacción de páginas de producto</h3>
        </div>

        <div class="linkbuilding" class="servicio">
          <i class="fas fa-link fa-2x flex-show"></i>
          <i class="fas fa-link flex-hidden" style="display: none"></i>
          <h3>Campañas de linkbuilding</h3>
        </div>

        <div class="desempeño" class="servicio"><i class="fas fa-chart-line fa-2x flex-show"></i>
          <i class="fas fa-chart-line flex-hidden" style="display: none"></i>
          <h3>Monitoreo de desempeño</h3>
        </div>
      </div>
    </section>
    <!--FIN SERVICIOS-->

    <!--CONTACTO-->
    <section id="contacto" class="contacto">
      <h2><i class="fas fa-envelope"></i>Contacto</h2>

      <div class="grid-contacto">
        <div class="form">
          <form action="contactform.php" method="post">

            <input type="text" id="nombre" name="name" placeholder="Nombre completo..." required>

            <input type="email" id="email" name="mail" placeholder="Correo electrónico..." class="formblock" required>

            <input type="text" id="asunto" name="subject" placeholder="Asunto..." class="formblock" required>

            <textarea id="mensaje" name="message" placeholder="Escriba su mensaje aquí..." class="formblock" required></textarea>

            <input type="submit"  name= "submit" value="Enviar" class="enviar">
          </form>
        </div>

        <div class="datos">

          <div class="web-datos">
            <i class="fas fa-at show"></i>
            <i class="fas fa-at fa-2x hidden" style="display: none"></i>
            <h4>Correo electrónico</h4>
            <p>contacto@gabrielespinosa.cl</p>
          </div>
          
          <div class="telefono-datos">
            <i class="fas fa-mobile-alt show"></i>
            <i class="fas fa-mobile-alt fa-2x hidden" style="display: none"></i>
            <h4>Teléfono móvil</h4>
            <p>+56961970780</p>
          </div>

          <div class="direccion-datos">
            <i class="fas fa-map-marker-alt show"></i>
            <i class="fas fa-map-marker-alt fa-2x hidden" style="display: none"></i>
            <h4>Ubicación</h4>
            <p>Hualpén, Región del Biobío, Chile</p>
          </div>

        </div>
      </div>
    </section>
    <!--FIN CONTACTO-->

    <!--INICIO FOOTER-->
    <footer id="footer" class="footer">
      <p>Sitio web desarrollado por Gabriel Espinosa Bustos</p>
    </footer>
    <!--FIN FOOTER-->
  </div>

</body>

</html>