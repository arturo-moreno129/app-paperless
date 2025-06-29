<?php
require 'dompdf/vendor/autoload.php';

use Dompdf\Dompdf;
use Dompdf\Options;

$options = new Options();
$options->set('isHtml5ParserEnabled', true);
$options->set('isRemoteEnabled', true);

$dompdf = new Dompdf($options);

$html = '
    <center><h1 style="color: #4CAF50;">Esta es la factura_ejemplo</h1></center>
    <p>Cliente: Juan Pérez</p>
    <p>Producto: Camisa personalizada</p>
    <p>Precio: $250.00</p>
    <p>Fecha: ' . date('d/m/Y') . '</p>
';

$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();

// Envía el PDF al navegador sin forzar la descarga
header('Content-Type: application/pdf');
echo $dompdf->output();
exit;
?>
