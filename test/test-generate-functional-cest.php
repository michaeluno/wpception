<?php

$_SERVER[ 'argv' ][ 1 ] = 'generate:cest';
$_SERVER[ 'argv' ][ 2 ] = 'functional';
$_SERVER[ 'argv' ][ 3 ] = 'Foo';
require dirname( __DIR__ ) . '/app.php';
