<?php

class EraseController extends Request
{
    protected $action = '';
    
    public function __construct(){
       $this->api = new WeatherAPI();
       $this->action = 'actionDefault';
    }
    
    /*
     * Calls the coresponding function based on the request
     */
    public function actionDefault(){
        $requestParams = $this->getEraseRequestParams($_GET);
        if(!isset($requestParams['error'])){
            return $this->api->eraseData($requestParams);
        }
        else{
            return json_encode($requestParams);
        }
    }
}
