<?php

$_SERVER[ 'argv' ][ 1 ] = 'generate:test';
$_SERVER[ 'argv' ][ 2 ] = 'unit';
$_SERVER[ 'argv' ][ 3 ] = 'Foo';
require dirname( __DIR__ ) . '/app.php';
