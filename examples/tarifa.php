<?
// Retorna la tarifa para un valor determinado

require_once('../config.php');

$xml = '<?xml version="1.0" encoding="UTF-8"?>
<SOAP-ENV:Envelope xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/" xmlns:ns1="http://fedex.com/ws/rate/v14"><SOAP-ENV:Body><ns1:RateRequest>
<ns1:WebAuthenticationDetail>
<ns1:UserCredential>
<ns1:Key>'.$key.'</ns1:Key>
<ns1:Password>'.$password.'</ns1:Password>
</ns1:UserCredential></ns1:WebAuthenticationDetail>
<ns1:ClientDetail>
<ns1:AccountNumber>'.$account_number.'</ns1:AccountNumber>
<ns1:MeterNumber>'.$meter_number.'</ns1:MeterNumber>
</ns1:ClientDetail>
<ns1:TransactionDetail><ns1:CustomerTransactionId> *** Rate Request v14 using PHP ***</ns1:CustomerTransactionId></ns1:TransactionDetail><ns1:Version><ns1:ServiceId>crs</ns1:ServiceId><ns1:Major>14</ns1:Major><ns1:Intermediate>0</ns1:Intermediate><ns1:Minor>0</ns1:Minor></ns1:Version><ns1:ReturnTransitAndCommit>true</ns1:ReturnTransitAndCommit><ns1:RequestedShipment>
<ns1:DropoffType>REGULAR_PICKUP</ns1:DropoffType>
<ns1:ServiceType>'.$ServiceType.'</ns1:ServiceType>
<ns1:PackagingType>'.$PackagingType.'</ns1:PackagingType>
<ns1:PreferredCurrency>'.$currency.'</ns1:PreferredCurrency>
<ns1:Shipper><ns1:Contact><ns1:PersonName>Sender Name</ns1:PersonName><ns1:CompanyName>Sender Company Name</ns1:CompanyName><ns1:PhoneNumber></ns1:PhoneNumber></ns1:Contact><ns1:Address><ns1:StreetLines></ns1:StreetLines><ns1:City></ns1:City><ns1:StateOrProvinceCode></ns1:StateOrProvinceCode>
<ns1:PostalCode>'.$origenPostalCode.'</ns1:PostalCode><ns1:CountryCode>'.$origenPais.'</ns1:CountryCode></ns1:Address></ns1:Shipper>
<ns1:Recipient><ns1:Contact><ns1:PersonName>Recipient Name</ns1:PersonName><ns1:CompanyName>Company Name</ns1:CompanyName><ns1:PhoneNumber></ns1:PhoneNumber></ns1:Contact><ns1:Address><ns1:StreetLines></ns1:StreetLines><ns1:City></ns1:City><ns1:StateOrProvinceCode></ns1:StateOrProvinceCode>
<ns1:PostalCode>'.$destinoPostalCode.'</ns1:PostalCode>
<ns1:CountryCode>'.$destinoPais.'</ns1:CountryCode><ns1:Residential>false</ns1:Residential></ns1:Address></ns1:Recipient><ns1:ShippingChargesPayment><ns1:PaymentType>SENDER</ns1:PaymentType><ns1:Payor>
<ns1:ResponsibleParty>
<ns1:AccountNumber>'.$account_number.'</ns1:AccountNumber>
</ns1:ResponsibleParty>
</ns1:Payor></ns1:ShippingChargesPayment>
<ns1:RateRequestTypes>ACCOUNT</ns1:RateRequestTypes><ns1:PackageCount>1</ns1:PackageCount><ns1:RequestedPackageLineItems><ns1:SequenceNumber>1</ns1:SequenceNumber>
<ns1:GroupPackageCount>'.$GroupPackageCount.'</ns1:GroupPackageCount>
<ns1:Weight><ns1:Units>'.$WeightTipo.'</ns1:Units><ns1:Value>'.$WeightValue.'</ns1:Value></ns1:Weight>
<ns1:Dimensions>
<ns1:Length>'.$Length.'</ns1:Length>
<ns1:Width>'.$Width.'</ns1:Width>
<ns1:Height>'.$Height.'</ns1:Height>
<ns1:Units>'.$Units.'</ns1:Units>
</ns1:Dimensions>
</ns1:RequestedPackageLineItems>
</ns1:RequestedShipment></ns1:RateRequest></SOAP-ENV:Body></SOAP-ENV:Envelope>';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
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
curl_close($ch);

// Moneda local
print $result->SOAPENVBody->RateReply->RateReplyDetails->RatedShipmentDetails[0]->ShipmentRateDetail->TotalNetCharge->Amount;

// Dolares
//print $result->SOAPENVBody->RateReply->RateReplyDetails->RatedShipmentDetails[1]->ShipmentRateDetail->TotalNetCharge->Amount;

// imprime todo el restulado de la consulta
// print '<pre>';
// print_r($result);


?>
