<?php

class ModCityHelper{
    public static function getCity($params){
        $cities = $params->get('cities');
        return $cities;
    }
}