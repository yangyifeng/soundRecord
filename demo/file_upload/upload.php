<?php

    $file = fopen( $_POST["rnd"].".mp3", "w" );
    fwrite( $file, base64_decode( $_POST["file"] ) );
    fclose($file);

?>