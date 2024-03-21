<?php

namespace App\DataTypes;

//Clasa do typu danych

abstract class OfferStatus{
    //Statusy oferty
    const DRAFT = "Szkic";
    const READY = "Gotowa";
    const SENT = "Wysłana";


    const TYPES = [
        self::DRAFT,
        self::READY,
        self::SENT,
    ];

}


