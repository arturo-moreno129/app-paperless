<?php
require 'dompdf/vendor/autoload.php'; // Asegúrate de que la ruta sea correcta
require_once 'dompdf/autoload.inc.php';

use Dompdf\Dompdf;
use Dompdf\Options;

// Opciones para DOMPDF (opcional)
$options = new Options();
$options->set('isHtml5ParserEnabled', true);
$options->set('isRemoteEnabled', true); // Para usar imágenes externas

$dompdf = new Dompdf($options);

// HTML que quieres convertir en PDF
$html = '
    <center><h1 style="color: #4CAF50;">Factura</h1></center>
    <p>Cliente: Juan Pérez</p>
    <p>Producto: Camisa personalizada</p>
    <p>Precio: $250.00</p>
    <p>Fecha: ' . date('d/m/Y') . '</p>
';

// Cargar el HTML
$dompdf->loadHtml($html);

// Configurar el tamaño y la orientación del papel
$dompdf->setPaper('A4', 'portrait');

// Renderizar el HTML como PDF
$dompdf->render();

// Mostrar o descargar el PDF
$dompdf->stream('factura.pdf', ['Attachment' => 0]); // 0 = mostrar en el navegador
