<!--
    @Created on : 30-oct-2016, 19:23:36
    @Author     : RVS - N.F.N.D
    @Pag        :
    @version    :
    @TODO       :
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <form method="get" action="<?php echo $_SERVER['PHP_SELF'] ?> ">
      <fieldset>
        <legend>Personalizar</legend>
        <textarea name="nombre" rows="4" cols="40">Con texto
        </textarea>
        <textarea name="nombre" rows="4" cols="40">
        </textarea>
        <br>
        Hombre
        <input type="radio" name="sexo" value="nombre" checked="checked">
        <br>
        Mujer
        <input type="radio" name="sexo" value="mujer">
        <p>Lenguajes de Programacion</p>
        <input name="java" type="checkbox" value="on">Java
        <br>
        <input name="csharp" type="checkbox" value="on">C#
        <br>
        <input name="c" type="checkbox" value="off">C:
        <br>
        <input name="otros" type="checkbox" value="off">Otros
        <br>
        <br>
        First Name : <input type="text" name="name1" value="">
        <br>
        Second Name : <input type="text" name="name2" value="">
        <br>
        Password : 
        <input type="password" name="pass" value="">
        <br>
        <br>
        <input type="submit">
      </fieldset>
    </form>
    <?php
    if (isset($_REQUEST['name1']) && isset($_REQUEST['name2'])) {
      if (!empty($_REQUEST['pass'])) {
        $password = $_REQUEST['pass'];
        if ($password == '123') {
          echo "Bienvenido Pringado";
          $var1 = $_REQUEST['name1'];
          echo '<br> ';
          echo 'valores : ';
          echo $var1;
          $var2 = $_REQUEST['name2'];
          echo '<br> ';
          echo 'valores : ';
          echo $var2;
        } else {
          echo "<br>";
          echo "<h3>error</h3>";
          echo "Pringado";
        }
      }
    }
    ?>
  </body>
</html>
