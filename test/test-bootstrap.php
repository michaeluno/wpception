<?php

deleteFiles( 'tests' );
deleteFiles( 'codeception.yml' );

$_SERVER[ 'argv' ][ 1 ] = 'bootstrap';
require dirname( __DIR__ ) . '/app.php';

function deleteFiles( $sPath ) {

    if ( ! file_exists( $sPath )  ) {
        return;
    }
    if ( is_file( $sPath ) ) {
        unlink( $sPath );
        return;
    }

    // At this point, it is a directory.
    $_aItems = scandir( $sPath );
    foreach( $_aItems as $_sItem ) {
        if ( $_sItem !== "." && $_sItem !== ".." ) {
            deleteFiles($sPath . "/" . $_sItem );
        }
    }
    rmdir( $sPath );

}