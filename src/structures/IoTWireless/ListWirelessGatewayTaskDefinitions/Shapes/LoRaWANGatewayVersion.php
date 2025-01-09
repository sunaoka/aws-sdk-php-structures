<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListWirelessGatewayTaskDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PackageVersion
 * @property string $Model
 * @property string $Station
 */
class LoRaWANGatewayVersion extends Shape
{
    /**
     * @param array{
     *     PackageVersion?: string,
     *     Model?: string,
     *     Station?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
