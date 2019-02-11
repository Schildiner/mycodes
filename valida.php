<?php

$login=$_POST["usuario"];

$senha=$_POST["senha"];

if (($login == "USUARIO") && ($id2 == "SENHA")){

echo '<script>window.location="usuario.php";</script>';

}else {

echo '<script type="text/javascript>alert("Usuario ou Senha invalido!")</script>';

}

?>