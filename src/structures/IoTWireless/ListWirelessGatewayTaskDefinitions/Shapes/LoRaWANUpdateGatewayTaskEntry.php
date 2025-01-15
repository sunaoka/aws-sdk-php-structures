<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListWirelessGatewayTaskDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LoRaWANGatewayVersion|null $CurrentVersion
 * @property LoRaWANGatewayVersion|null $UpdateVersion
 */
class LoRaWANUpdateGatewayTaskEntry extends Shape
{
    /**
     * @param array{
     *     CurrentVersion?: LoRaWANGatewayVersion|null,
     *     UpdateVersion?: LoRaWANGatewayVersion|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
