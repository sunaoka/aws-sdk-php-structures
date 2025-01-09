<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListWirelessGatewayTaskDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LoRaWANGatewayVersion $CurrentVersion
 * @property LoRaWANGatewayVersion $UpdateVersion
 */
class LoRaWANUpdateGatewayTaskEntry extends Shape
{
    /**
     * @param array{
     *     CurrentVersion?: LoRaWANGatewayVersion,
     *     UpdateVersion?: LoRaWANGatewayVersion
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
