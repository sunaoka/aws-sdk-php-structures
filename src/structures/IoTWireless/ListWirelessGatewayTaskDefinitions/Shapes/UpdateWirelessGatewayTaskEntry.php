<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListWirelessGatewayTaskDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property LoRaWANUpdateGatewayTaskEntry|null $LoRaWAN
 * @property string|null $Arn
 */
class UpdateWirelessGatewayTaskEntry extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     LoRaWAN?: LoRaWANUpdateGatewayTaskEntry|null,
     *     Arn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
