# Fedex tarifas

Ejemplos(para Paises latinoamerica como: Colombia, Peru, Venezuela, Argentina, Mexico, de como retornar valores fedex, estos ejemplos pueden retornar valores diferentes a los consultados en la calculadora, recuerda que para que el sitema genere tarifas reales debes de tener una cuenta en producción, solo hasta este momento retornara la tarifa del envio en la moneda local y con el descuento de fedex.

## Información necesaria para comenzar
- Crear una cuenta real en fedex, es posible que esto demore se pueden comunicar con la oficina de fedex de su pais de recidencia para crearla
- Crear codigos de prueba($key, $password ,$account_number, $meter_number), estos codigos se generan en: https://www.fedex.com/us/developer/web-services/process.html?tab=tab2, click en el boton (Get your test Key) esto enviara mostrara unos datos en pantalla y el password lo envia al correo registrado en el proceso.
- Para generar codigos reales ir a: https://www.fedex.com/us/developer/web-services/process.html?tab=tab4#tab4 y luego al boton (Get production Key)

## Configuración
- Para iniciar el archivo config-demo.php renombrarlo como config.php.
- Personalizar los datos del archivo config.php con los personales.
- Ejecutar cualquiera de los archivos de ejemplo.

# Tipos de envio
- EUROPE_FIRST_INTERNATIONAL_PRIORITY
- FEDEX_1_DAY_FREIGHT
- FEDEX_2_DAY
- FEDEX_2_DAY_AM
- FEDEX_2_DAY_FREIGHT
- FEDEX_3_DAY_FREIGHT
- FEDEX_EXPRESS_SAVER
- FEDEX_FIRST_FREIGHT
- FEDEX_GROUND
- FEDEX_HOME_DELIVERY
- FIRST_OVERNIGHT
- INTERNATIONAL_DISTRIBUTION_FREIGHT
- INTERNATIONAL_ECONOMY
- INTERNATIONAL_ECONOMY_DISTRIBUTION
- INTERNATIONAL_ECONOMY_FREIGHT
- INTERNATIONAL_FIRST
- INTERNATIONAL_PRIORITY
- INTERNATIONAL_PRIORITY_DISTRIBUTION
- INTERNATIONAL_PRIORITY_FREIGHT
- PRIORITY_OVERNIGHT
- STANDARD_OVERNIGHT

# Tipo de empaque
- YOUR_PACKAGING
- FEDEX_10KG_BOX
- FEDEX_25KG_BOX
- FEDEX_BOX
- FEDEX_ENVELOPE
- FEDEX_EXTRA_LARGE_BOX
- FEDEX_LARGE_BOX
- FEDEX_MEDIUM_BOX
- FEDEX_PAK
- FEDEX_SMALL_BOX
- FEDEX_TUBE
