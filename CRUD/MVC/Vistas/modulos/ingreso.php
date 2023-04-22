<br>
<h1>INGRESAR</h1>

<FORM method="post" action="">
    <input type="text" placeholder="Usuario" name="usuarioI" required>
    <input type="password" placeholder="Contraseña" name="claveI" required>
    <input type="submit" value="Ingresar">
</FORM>

<?php
$ingreso = new AdminC();
$ingreso -> IngresoC();
?>