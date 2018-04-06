<?php
use Gitlab\Client;

$v = include($module->getPath() . "/" . $module->getBasepath() . "../vendor/autoload.php");

$client = Client::create('http://gitlab.com')->authenticate('2Ssqs99RcxfWtawBocbX', \Gitlab\Client::AUTH_URL_TOKEN);

$issues = $client->api("repositories");
var_dump($issues);
