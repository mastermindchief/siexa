<h1>Listado de Articulos</h1>
<table>
    <tr>
      <td>nombre</td>
      <td>passwd</td>
    </tr>
 
    <?php foreach($usuarios as $usuario): ?>
    <tr>
        <td><?php echo $usuario['usuario_usuario']?></td>
        <td><?php echo $usuario['usuario_password']?></td>
    </tr>
<?php endforeach;?>
</table>

