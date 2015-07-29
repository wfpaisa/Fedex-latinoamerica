<?php
$key = 'Z6AVzkmm7MEOacO9';
$password = 'OlSVHSRthKiQFcVmIuN0qI7jQ';
$account_number = '510087909';
$meter_number = '100259255';

// Origen
$origenPostalCode = '055420'; // Envigado - Antioquia
$origenPais = 'CO'; // Colombia

// Destino
$destinoPostalCode = '20171'; //Herndon TN
$destinoPais = 'US'; // Estados Unidos

// Fecha
$fecha = '2015-07-28'; // Fecha de la transacción

// Url
$url = 'https://ws.fedex.com:443/web-services';

// Tipo de envio - ver el readme para seleccionar el tipo de envio
// tambien se puede ejecutar el archivo servicios-disponibles.php para
// saber que tipo de envios estan disponibles
$ServiceType = "INTERNATIONAL_ECONOMY"; // Ver en el Readme.md tipos de envio
$PackagingType= "YOUR_PACKAGING"; // Ver en el Readme.md tipos de empaque

$GroupPackageCount = '1'; //Numero de paquetes

$WeightTipo = 'LB'; //Peso unidad de medida
$WeightValue= '1'; // Peso valor

$Units= 'IN'; // tamaño unidad de medida (IN)pulgadas (cm)centimetros
$Length ='1'; // largo
$Width = '1'; // ancho
$Height = '1'; // Alto

?>
