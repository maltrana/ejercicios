<?php

/*


AEMET provee un servicio api rest
 https://opendata.aemet.es/dist/index.html?#!/valores-climatologicos/Inventario_de_estaciones_valores_climatológicos


 */

class aemet {

    var $api_key;
    var $url;
    var $estaciones;
    var $tiempo;

    function __construct() {
        $this->api_key = "";
        $this->url = "https://opendata.aemet.es/opendata";

        $this->todas_estaciones = "/api/valores/climatologicos/inventarioestaciones/todasestaciones";
        $this->tiempo ="/api/valores/climatologicos/diarios/datos/fechaini/2007-08-01T00%3A00%3A00UTC/fechafin/2007-09-01T00%3A00%3A00UTC/estacion/2916A";
        
        
    }

    function getCurl($servicio) {

        $curl = curl_init();
        $url = $this->url . $servicio . "/?api_key=" . $this->api_key;

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array("cache-control: no-cache"),
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            $this->last_error = $err;
            return (FALSE);
        } else {
            return ($response);
        }
    }

    function getTodasEstaciones() {
        $ret = $this->getCurl($this->tiempo);
        $aRet = json_decode($ret, true);
        $metadatos = file_get_contents($aRet['metadatos']);
        $datos = file_get_contents($aRet['datos']);
        print_r($datos);
        file_put_contents('estaciones.dat', $datos);
    }

}

$ae = new aemet();
$ae->getTodasEstaciones();

