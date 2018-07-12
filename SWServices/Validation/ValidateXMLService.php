<?php
namespace SWServices\Validation;

use SWServices\Services as Services;
use SWServices\Validation\ValidateRequest as validateRequest;
use Exception;

class ValidarXML extends Services{
       
    public function __construct($params) {
        parent::__construct($params);
    }
    
   public static function Set($params){
        return new ValidarXML($params);
    }
    
    public static function ValidaXML($xml, $isb64 = false){
       return ($isb64?
                validateRequest::sendReqXMLb64(Services::get_url(), Services::get_token(), $xml, Services::get_proxy())
               :
                validateRequest::sendReqXML(Services::get_url(), Services::get_token(), $xml, Services::get_proxy()));
    }    
}

?>
