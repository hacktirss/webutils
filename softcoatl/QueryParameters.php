<?php
/**
 * QueryParameters
 * XXXXXXXXXX®
 * © 2019, Softcoatl
 * http://www.softcoatl.mx
 * @author Rolando Esquivel Villafaña, Softcoatl
 * @version 1.0
 * @since may 2019
 */

namespace com\softcoatl\utils;

class QueryParameters {
    private $attibutes = array();
    
    function __construct($array) {
        if (!empty($array)) {
            foreach ($array as $key=>$value) {
                $this->attibutes[$key] = $value;
            }
        }
    }

    function getAttribute($key, $default = "") {
        return $this->presentAttribute($key) ? $this->attibutes[$key] : $default;
    }
    
    function hasAttribute($key) {
        return array_key_exists($key, $this->attibutes) && !empty($this->attibutes[$key]);
    }
    
    function presentAttribute($key) {
        return array_key_exists($key, $this->attibutes);
    }
    
    function setAttribute($key, $value = "") {
       $this->attibutes[$key] = $value;
    }

    function getAttributes() {
        return $this->attibutes;
    }

}//Parameter
