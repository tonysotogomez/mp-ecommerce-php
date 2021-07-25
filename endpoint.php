<?php

if ( $_REQUEST ) {
    if (isset($_REQUEST['id'])) {
        $var = "";
        //$file = fopen("notificacion_".$_REQUEST['id'].".txt", "w");
        foreach ( $_REQUEST as $key => $value ) {
            $var .= $key.": ".$value. "\n";
            //fwrite($file, $var. PHP_EOL);
        }
        $url = 'http://18.224.192.133/api/v3/mp';
        $ch = curl_init($url);
        $payload = json_encode($_REQUEST);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);
        header("HTTP/1.1 200 OK");
    } else {
        //$file = fopen("notificacion_incorrecta.txt", "w");
        //fwrite($file, "". PHP_EOL);
    }
    
} else {
    //$file = fopen("notificacion_no_recibida.txt", "w");
    //fwrite($file, "". PHP_EOL);
}
//fclose($file);


?>