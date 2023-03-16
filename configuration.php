<?php

$locale = 'de_DE';
$timezone = 'CET'; // GMT = Grenwich Time, CET = GMT+2 (Central EU Time Sommerzeit) oder GMT+1 (Central EU Time Winterzeit)
$dateType = IntlDateFormatter::FULL; // Formatierungsform (lang, kurz, komplett etc.)
$timeType = IntlDateFormatter::FULL; // Formatierungsform (lang, kurz, komplett etc.)
$calendar = IntlDateFormatter::GREGORIAN; // Kalender - GREGORIAN ist der STandard, es gäbe noch weitere wie z.B. den buddhistischen Kalender

// SESSION CONFIG
define('CONFIG_SESSION_NAME', 'PlanITSESSIONNAME');
define('CONFIG_SESSION_LIFETIME', 3600);

// DATENBANK CONFIGERATION
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'PlanIT_DB');

?>