<?php

namespace SWServices\Stamp;


use SWServices\Services as Services;
use SWServices\Stamp\StampRequest as stampRequest;


class Timbrado extends Services{
    public function __construct($params) {
        parent::__construct($params);
    }

    public static function Set($params){
        return new Timbrado($params);
    }
    public static function TimbradoV1($xml){
        return stampRequest::sendReq(Services::get_url(), Services::get_token(), $xml, "v1",Services::get_proxy());
    }
     public static function TimbradoV2($xml, $isb64 = false){
         if($isb64){
            return stampRequest::sendReqB64(Services::get_url(), Services::get_token(), $xml, "v2",Services::get_proxy());
         }
        return stampRequest::sendReq(Services::get_url(), Services::get_token(), $xml, "v2",Services::get_proxy());
    }

     public static function TimbradoV3($xml, $isb64 = false){
         if($isb64){
            return stampRequest::sendReqB64(Services::get_url(), Services::get_token(), $xml, "v3",Services::get_proxy());
         }
        return stampRequest::sendReq(Services::get_url(), Services::get_token(), $xml, "v3",Services::get_proxy());
    }
     public static function TimbradoV4($xml, $isb64 = false){
         if($isb64){
            return stampRequest::sendReqB64(Services::get_url(), Services::get_token(), $xml, "v4",Services::get_proxy());
         }
        return stampRequest::sendReq(Services::get_url(), Services::get_token(), $xml, "v4",Services::get_proxy());
    }
}


?>