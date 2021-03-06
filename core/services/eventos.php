<?php

include 'models/EventosSql.php';

if (isset($_POST['action'])) {
   $eve = new EventosSql;

   /** MENÚ DEL SERVICIO EVENTOS */
   switch ($_POST['action']) {
      case 'obtener_una_orden':
         $res['data']  = $eve->getOrdenSercicio($_POST['id']);
         $res['error'] = false;
         break;

      case 'obtener_ingreso':
         $res['ingreso'] = $eve->getIngreso($_POST['evento_id']);
         $res['error'] = false;
         break;
   }
} else {
   $res['msg']   = 'No se reconoció el comando';
   $res['error'] = true;
}