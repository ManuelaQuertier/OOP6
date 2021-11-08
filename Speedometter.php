<?php

class Speedometer {

    public const MILES_CONVERSION = 0.621;

    public static function convertKmToMiles(int $distance){
        return $distance * self::MILES_CONVERSION;
    }

    public static function convertMilesToKm(int $distance){
        return $distance / self::MILES_CONVERSION;
    }
}
echo Speedometer::convertKmToMiles(10) . '<br><br>'; 
echo Speedometer::convertMilesToKm(6.21);