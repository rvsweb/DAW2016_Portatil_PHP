<?php
echo "<h1>Bienvenido," . $this->session->userdata("nombreusr") . "</h1>";
echo "<h4>Estás dentro de la aplicación</h4>";
echo "Se han creado las variables de session idusr =  "
 . $this->session->userdata("idusr") . " y tipousr = "
 . $this->session->userdata("tipousr") . "</p>";

// Si el controlador nos envía algún mensaje, lo mostramos
if (isset($result)) {
  echo "<table align='center'><tr><td><p class='msg'>$result</p></td></tr></table>";
}
?>
<hr>
<table border="1" align="center"> 
  <tr>
    <td>Username</td>
    <td>Email</td>
    <td>Teléfono</td>
    <td>Foto de perfil</td>
    <td colspan="2" align="center">Acciones</td>
  </tr>
  <tr>
    <?php
    foreach ($resultado as $fila) {
      echo "<tr>";
      echo "<td>"
      . $fila->nombre . "</td><td>"
      . $fila->apellidos . "</td><td>"
      . $fila->telefono . "</td><td>"
      . $fila->fotografia . "</td><td>"
      . $fila->email . "</td><td>";
      /* . "<img src='" . base_url("uploads") . "/" . $fila->img . "'/></td>";

        echo "<td><a href='users/update_user/" . $fila->id . "'>Modificar</a></td>";
        echo "<td><a href='users/delete_user/" . $fila->id . "'>Eliminar</a></td>";
       * 
       */
      echo "</tr>";
    }
    ?>
  </tr>
</table>

<?php
echo "<p align='center'><a href='" . site_url('users/show_add_user') . "'>Nuevo</a></p>";
?>