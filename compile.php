#! /usr/bin/env php
<?php
$services = include('service_listing.php');
$json = array();

foreach ($services as $service)
{
	foreach ($service['short'] as $code)
	{
		$json[$code] = $service;
		$json[$code]['short'] = $code;
	}
}

if (version_compare(PHP_VERSION, '5.4.0', '>='))
{
	file_put_contents('services.json', json_encode($json, JSON_PRETTY_PRINT));
}
else
{
	file_put_contents('services.json', json_encode($json));
}
