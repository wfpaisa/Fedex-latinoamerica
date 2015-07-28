<?
//Retorna una lista de tipos de servicio para la zonas estimadas
require_once('config.php');


$xml = '<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:v2="http://fedex.com/ws/vacs/v2">
<soapenv:Header/>
<soapenv:Body>
<v2:ServiceAvailabilityRequest>
<v2:WebAuthenticationDetail>
<v2:UserCredential>
<v2:Key>'.$key.'</v2:Key>
<v2:Password>'.$password.'</v2:Password>
</v2:UserCredential>
</v2:WebAuthenticationDetail>
<v2:ClientDetail>
<v2:AccountNumber>'.$account_number.'</v2:AccountNumber>
<v2:MeterNumber>'.$meter_number.'</v2:MeterNumber>
</v2:ClientDetail>
<v2:TransactionDetail>
<v2:CustomerTransactionId>ServiceAvailabilityRequest</v2:CustomerTransactionId>
</v2:TransactionDetail>
<v2:Version>
<v2:ServiceId>vacs</v2:ServiceId>
<v2:Major>2</v2:Major>
<v2:Intermediate>0</v2:Intermediate>
<v2:Minor>0</v2:Minor>
</v2:Version>
<v2:Origin>
<v2:PostalCode>'.$origenPostalCode.'</v2:PostalCode>
<v2:CountryCode>'.$origenPais.'</v2:CountryCode>
</v2:Origin>
<v2:Destination>
<v2:PostalCode>'.$destinoPostalCode.'</v2:PostalCode>
<v2:CountryCode>'.$destinoPais.'</v2:CountryCode>
</v2:Destination>
<v2:ShipDate>'.$fecha.'</v2:ShipDate>
<v2:CarrierCode>FDXE</v2:CarrierCode>
</v2:ServiceAvailabilityRequest>
</soapenv:Body>
</soapenv:Envelope>';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://wsbeta.fedex.com:443/web-services');
curl_setopt($ch, CURLOPT_POSTFIELDS, $xml);
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
$result_xml = curl_exec($ch);


// quitar dos puntos y rayas para simplificar el xml
$result_xml = str_replace(array(':','-'), '', $result_xml);
$result = @simplexml_load_string($result_xml);

$rateTypes = $result->SOAPENVBody->ServiceAvailabilityReply;

// imprime
print '<ul>';
foreach ($rateTypes->Options as $value) {
	print '<li>' . $value->Service . '</li>';
}
print '</ul>'

?>