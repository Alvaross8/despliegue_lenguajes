<?php
    $location = basename(__FILE__);
    include('includes/header.inc');
?>
<div class="container text-center">    
  <div class="row content">
    <div class="col-sm-3 sidenav">
    <iframe width="100%" height="50%" src="https://www.youtube.com/embed/Z0F7sJaOQtw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <p>Tutorial de Java</p>
    </div>
    <div class="col-sm-7 text-left"> 
      <h1 id="h1Principal">Java</h1>
      <p>Sun Microsystems desarrolló, en 1991, el lenguaje de programación orientado a objetos que se conoce como Java.
         El objetivo era utilizarlo en un set-top box, un tipo de dispositivo que se encarga de la recepción y la descodificación
          de la señal televisiva. El primer nombre del lenguaje fue Oak, luego se conoció como Green y finamente adoptó la denominación de Java.</p>

      <p>La intención de Sun era crear un lenguaje con una estructura y una sintaxis similar a C y C++,
         aunque con un modelo de objetos más simple y eliminando las herramientas de bajo nivel.</p>

      <p>Los pilares en los que se sustenta Java son cinco: la programación orientada a objetos, la posibilidad de ejecutar un mismo programa en diversos sistemas operativos,
         la inclusión por defecto de soporte para trabajo en red, la opción de ejecutar el código en sistemas remotos de manera segura y la facilidad de uso.</p>

      <p>Lo habitual es que las aplicaciones Java se encuentren compiladas en un bytecode (un fichero binario que tiene un programa ejecutable), 
        aunque también pueden estar compiladas en código máquina nativo.
        Sun controla las especificaciones y el desarrollo del lenguaje, los compiladores, las máquinas virtuales y las bibliotecas de clases a través del Java Community Process. 
        En los últimos años, la empresa (que fue adquirida por Oracle) ha liberado gran parte de las tecnologías Java bajo la licencia GNU GPL.</p>

      <p>La aplicación de Java es muy amplia. El lenguaje se utiliza en una gran variedad de dispositivos móviles,
        como teléfonos y pequeños electrodomésticos. Dentro del ámbito de Internet, Java permite desarrollar pequeñas aplicaciones
        (conocidas con el nombre de applets) que se incrustan en el código HTML de una página, para su directa ejecución desde un navegador; 
        cabe mencionar que es necesario contar con el plug-in adecuado para su funcionamiento, pero la instalación es liviana y sencilla.</p>
    <?php include("includes/comments.inc"); ?>
    </div>
    <div class="col-sm-2 sidenav">
      <div>
        <p><img src="multimedia/java1.png"></p>
      </div>
      <br>
      <div>
        <p><img src="multimedia/java3.png"></p>
      </div>
      <br>
      <div>
        <p><img src="multimedia/java2.jpg"></p>
      </div>
    </div>
  </div>
</div>
<?php
  include('includes/footer.inc');
?>