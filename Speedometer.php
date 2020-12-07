<?php

class Speedometer
{
    const MileToKm = 1.60934;
    const KmToMile = 0.621371;

    public static function convertKmToMiles(float $km):float
    {
        $miles = $km * self::KmToMile;
        return $miles;
    }

    public static function convertMilesToKm(float $miles):float
    {
        $km = $miles * self::MileToKm;
        return $km;
    }
}