<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetWirelessGatewayTaskDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PackageVersion
 * @property string|null $Model
 * @property string|null $Station
 */
class LoRaWANGatewayVersion extends Shape
{
    /**
     * @param array{
     *     PackageVersion?: string|null,
     *     Model?: string|null,
     *     Station?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
