<?php

class Request{
    
    protected $requestErrorMessage = '';
    /*
     * Validates params for erase request and return the coresponding data or the error message
     */
    protected function getEraseRequestParams($get) : array
    {
        if($this->validateRequestParams($get, ['start', 'end', 'lat', 'lon'], ['start' => 'date', 'end' => 'date', 'lat' => 'float', 'lon' => 'float'])){
          return $get;   
        }
        return empty($this->requestErrorMessage) ? [] : ['error' => $this->requestErrorMessage];
    }
    
    /*
     * Validates params for weather request and return the coresponding data or the error message
     */
    public function getWeatherRequestParams($get) : array
    {
        if($this->validateRequestParams($get, ['lat', 'lon'], ['lat' => 'float', 'lon' => 'float'])){
            return ['lat' => $get['lat'], 'lon' => $get['lon']];
        }
        
        return empty($this->requestErrorMessage) ? [] : ['error' => $this->requestErrorMessage];
    }
    
    /*
     * Validates params for weather min/max request and return the coresponding data or the error message
     */
    public function getWeatherTemperatureRequestParams($get) : array
    {
        if($this->validateRequestParams($get, ['start', 'end'], ['start' => 'date', 'end' => 'date'])){
            return ['start' => $get['start'], 'end' => $get['end']];
        }
        return ['error' => empty($this->requestErrorMessage) ? 'The request is invalid.' : $this->requestErrorMessage];
    }
    
    /*
     * @param array $get - GET request
     * @param array $expected - Expected values to be present in the request
     * @param array $types - Types of the values required in the request
     */
    private function validateRequestParams($get, $expected, $types) : bool
    {
      return !empty($_GET) && $this->arrayKeysExists($get, $expected) && $this->validateRequestTypes($get, $types);
    }
    
    /*
     * Validates the type of the value expected for each request param.
     * In the case the type is invalid, return error message
     * @param array $get - GET request
     * @param array $types - Types for every key present
     */
    private function validateRequestTypes($get, $types) : bool
    {
        $valid = true;
        foreach($types as $key => $val){
            $func = 'is_'.$val;
            switch($val){
                case 'string':
                    $req = $func((string)$get[$key]);
                break;
                case 'int':
                    $req = $func((int)$get[$key]);
                break;
                case 'float':
                    $req = is_numeric($get[$key]);
                break;
                case 'date':
                   $date = DateTime::createFromFormat('Y-m-d', $get[$key]);
                   $req = $date && $date->format('Y-m-d') === $get[$key];
                break;
                default:
                    $req = $func($get[$key]);
                break;
            }
            
            if(!$req){
                $valid = false;
                $this->requestErrorMessage = sprintf('Invalid type for: %s. Expected: %s, recieved: %s', $key, $val, gettype($get[$key]));
                break;
            }
        }
        return $valid;
    }
    
    /*
     * Validates if all the keys request are present in the request
     * @param array $keys - Keys to be present in the request
     */
    private function arrayKeysExists($array, $keys){
        $exists = true;
        foreach($keys as $key){
            if(!filter_input(INPUT_GET, $key)){
                $exists = false;
                $this->requestErrorMessage = sprintf('Key does not exist: %s', $key);
                break;
            }
        }
        return $exists;
    }
    
    /*
     * Returns the coresponding action based on the request, or the error page
     */
    public function returnAction(){
        return method_exists($this, $this->action) ? $this->{$this->action}() : $this->action404();
    }
}
