<?php 
// Convierte una moneda al trm de fedex

	$currencyFrom = 'USD';
	$valueToConvert = '1';
	$currencyTo = 'COP';
	$convertCurrencyDate = '07/28/2015';


	$params = array ('reqData' => '{currencyFrom:"'. $currencyFrom . '", valueToConvert:"'. $valueToConvert .'", convertCurrencyDate:"'. $convertCurrencyDate .'", currencyTo:"'. $currencyTo .'"}');
	 
	// Build Http query using params
	$query = http_build_query ($params);
	 
	// Create Http context details
	$contextData = array ( 
		'method' => 'POST',
		'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
		'content'=> $query );
	 
	// Create context resource for our request
	$context = stream_context_create (array ( 'http' => $contextData ));
	 
	// Read page rendered as result of your POST request
	$result =  file_get_contents (
					  'https://images.fedex.com/GTM/ConvertCurrency?clienttype=wgrt&method=doAjax',  // page url
					  false,
					  $context);
	$currency = json_decode($result);

	print $currency->resultCurrency;
	 
?>