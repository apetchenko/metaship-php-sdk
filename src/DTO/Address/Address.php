<?php

namespace MetaShipRU\MetaShipPHPSDK\DTO\Address;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\DTO\City\City;

class Address
{
    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $city;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $street;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $house;

    /**
     * @Serializer\Type("integer")
     * @var int
     */
    public $zip;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $housing;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $building;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $apartment;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $comment;
}
