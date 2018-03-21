<?php
use Gitlab\Client;

$v = include($module->getPath() . "/" . $module->getBasepath() . "../vendor/autoload.php");

$client = Client::create('http://gitlab.com')->authenticate('2Ssqs99RcxfWtawBocbX', \Gitlab\Client::AUTH_URL_TOKEN);

$project = $client->api('projects');
echo "<pre>" . var_dump($project) . "</pre>";
