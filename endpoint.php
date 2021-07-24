<?php

if ( $_REQUEST ) {
    if (isset($_REQUEST['id'])) {
        $file = fopen("notificacion_".$_REQUEST['id'].".txt", "w");
        foreach ( $_REQUEST as $key => $value ) {
            $var = $key.": ".$value;
            fwrite($file, $var. PHP_EOL);
            header("HTTP/1.1 200 OK");
        }
    } else {
        $file = fopen("notificacion_incorrecta.txt", "w");
        fwrite($file, "". PHP_EOL);
    }
    
} else {
    $file = fopen("notificacion_no_recibida.txt", "w");
    fwrite($file, "". PHP_EOL);
}
fclose($file);


?>