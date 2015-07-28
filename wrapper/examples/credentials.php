<?php
//Change these values below.

define('FEDEX_ACCOUNT_NUMBER', '510087909');
define('FEDEX_METER_NUMBER', '100259255');
define('FEDEX_KEY', 'Z6AVzkmm7MEOacO9');
define('FEDEX_PASSWORD', 'OlSVHSRthKiQFcVmIuN0qI7jQ');


if (!defined('FEDEX_ACCOUNT_NUMBER') || !defined('FEDEX_METER_NUMBER') || !defined('FEDEX_KEY') || !defined('FEDEX_PASSWORD')) {
    die("The constants 'FEDEX_ACCOUNT_NUMBER', 'FEDEX_METER_NUMBER', 'FEDEX_KEY', and 'FEDEX_PASSWORD' need to be defined in: " . realpath(__FILE__));
}

