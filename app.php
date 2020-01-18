<?php
require_once __DIR__ . '/vendor/autoload.php';

echo \PHPUnit\Runner\Version::getVersionString() . PHP_EOL;
require_once __DIR__ . '/vendor/codeception/codeception/app.php';

