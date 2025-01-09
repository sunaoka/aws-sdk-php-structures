<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetPositionEstimate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MacAddress
 * @property int<-128, 0> $Rss
 */
class WiFiAccessPoint extends Shape
{
    /**
     * @param array{
     *     MacAddress: string,
     *     Rss: int<-128, 0>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
