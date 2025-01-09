<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListWirelessGatewayTaskDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property LoRaWANUpdateGatewayTaskEntry $LoRaWAN
 * @property string $Arn
 */
class UpdateWirelessGatewayTaskEntry extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     LoRaWAN?: LoRaWANUpdateGatewayTaskEntry,
     *     Arn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
