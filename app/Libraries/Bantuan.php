<?php
    namespace App\Libraries;

    class Bantuan 
    {
        function rajaongkir($url,$token,$data=null,$method='GET')
        {
            $client = service('curlrequest', ['verify'=>false]);
            $headers = [
                'Content-Type' => 'application/x-www-form-urlencoded',
                'key' => $token,
            ];
            $response = $client->request($method, $url, ['form_params'=>$data,'headers'=>$headers,'http_errors'=>false]);
           return $response->getBody();
        }
    }