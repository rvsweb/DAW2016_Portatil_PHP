<!--
    @Created on : 24-nov-2016, 19:29:33
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
    <style>
      body{
        background-color: #999999;
      }

      p{
        width: 140px;
        background-color: #99ff99;
      }

      p#n1{
        width: 140px;
        background-color: #99ff99;
      }

      p#n2{
        width: 100px;
        background-color: #428bca;
      }
      p#d1{
        width: 140px;
        background-color: #99ff99;
      }
      p#d2{
        width: 100px;
        background-color: #428bca;
      }
    </style>
  </head>
  <body>
    <?php
    if (isset($_POST['enviar'])) {
      if (!empty($_POST['modulos']) && !empty($_POST['nombre'])) {
        $nombre = $_POST['nombre'];
        $modulos = $_POST['modulos'];
        print "<p id='n1'>Nombre : </p><p id='n2'>" . $nombre . "</p>";
        foreach ($modulos as $modulo) {
          print "<p id='d1'>Modulo : </p><p id='d2'>" . $modulo . "</p>";
        }
      }
      if (empty($_POST['modulos'])) {
        echo "<br><p>Modulo</p><p style='background-color: #ff4499'>No seleccionado</p>";
        echo "<a href=''>Regresar 1</a>";
      }
      if (empty($_POST['nombre'])) {
        echo "<br><p>Nombre</p><p style='background-color: #ff4499'>No seleccionado</p>";
        echo "<a href=''>Regresar 2</a>";
      }
    } else {
      ?>
      <form name="input" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <fieldset>
          <legend>Formulario</legend>
          <label>Nombre del alumno :</label>
          <input type="text"  name="nombre" value="<?php echo $_POST['nombre']; ?>"  />
          <?php
          if (isset($_POST['enviar']) && empty($_POST['nombre'])) {
            echo "<span style='color: red'></span>";
          }
          ?><br>
          <label>Ciclo que cursa :</label>
          <br>DWES
          <input type="checkbox" name="modulos[]" value="DWES">
          <br>DWEC
          <input type="checkbox" name="modulos[]" value="DWEC">
          <br>
          <input type="submit" value="Enviar" name="enviar">
          </form>
          <?php
        }
        ?>
      </fieldset>
  </body>
</html>
