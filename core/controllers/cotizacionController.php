<?php
if (!isset($_SESSION['puesto'])) {
   unset($_GET['view']);
   header('location:index.php?view=index');
}
$html = new Smarty();

$html->assign('titulo', 'Cotización');
$html->display('views/cotizacion.html');