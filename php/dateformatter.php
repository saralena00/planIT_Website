<?php 

$locale = 'de_DE';
$timezone = 'CET'; // GMT = Grenwich Time, CET = GMT+2 (Central EU Time Sommerzeit) oder GMT+1 (Central EU Time Winterzeit)
$dateType = IntlDateFormatter::FULL; // Formatierungsform (lang, kurz, komplett etc.)
$timeType = IntlDateFormatter::FULL; // Formatierungsform (lang, kurz, komplett etc.)
$calendar = IntlDateFormatter::GREGORIAN; // Kalender - GREGORIAN ist der STandard, es gäbe noch weitere wie z.B. den buddhistischen Kalender

$days = array("Sonntag","Montag","Dienstag","Mittwoch","Donnerstag","Freitag","Samstag","Sonntag","Montag","Dienstag","Mittwoch","Donnerstag","Freitag","Samstag","Sonntag","Montag","Dienstag","Mittwoch","Donnerstag","Freitag","Samstag","Sonntag");
$day = date("w");


$day_object = datefmt_create($locale, $dateType, $timeType, $timezone, $calendar, 'dd.MMMM YYYY');
$full_date = datefmt_format($day_object, time());


$array_date = array();

for ($i = 0; $i <= 12; $i++) {
        
        $weekday = $days[$day + $i];
        if ($weekday == "Samstag" || $weekday == "Sonntag") {
            continue;
        }

        $full_date = datefmt_format($day_object, time()+($i*86400));
    
        $date_string = strval($weekday. ' ' . $full_date);
        
        
        array_push($array_date, $date_string);
        
    }


if($debug == true) {
    echo '<pre>'; print_r($array_date); echo '</pre>';

    echo $days[$day];
}
?>