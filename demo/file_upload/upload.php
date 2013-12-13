<?php

    $file = fopen( "test.mp3", "w" );
    fwrite( $file, base64_decode( $_POST["file"] ) );
    fclose($file);

    $result = array('uid' => $_POST["uid"], 'sign'=>$_POST["sign"]);
    echo json_encode($result);

?>