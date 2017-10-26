<?php

$loader = require __DIR__ . '/vendor/autoload.php';
$director = new \mvcsystem\RequestDirector();
$director->httpRequest();