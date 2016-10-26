<?php
include_once "sweph.php";

$sweph = new sweph();

$params = array(
	'altitude'=>0,
	'latitude'=>'40.649645',
	'longitude'=>'-76.93392',
	'year'=>1968,
	'month'=>03,
	'day'=>03
);

echo "<pre>".print_r($sweph->getSunrise($params['year'], $params['month'], $params['day'], $params['longitude'], $params['latitude'], $params['altitude']),true)."</pre>";
?>
