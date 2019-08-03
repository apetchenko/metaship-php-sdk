<?php

namespace MetaShipRU\MetaShipPHPSDK\Component\ResponseFormatter;

use JMS\Serializer\SerializerBuilder;
use MetaShipRU\MetaShipPHPSDK\Response\Order\OrderResponse;
use Psr\Http\Message\ResponseInterface;

class OrderResponseFormatter
{
    public static function format(ResponseInterface $orderResponse): OrderResponse
    {
        $serializer = SerializerBuilder::create()->build();
        return $serializer->deserialize($orderResponse->getBody()->getContents(), OrderResponse::class, 'json');
    }
}