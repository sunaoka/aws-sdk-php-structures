<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListWirelessGateways\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $Id
 * @property string|null $Name
 * @property string|null $Description
 * @property LoRaWANGateway|null $LoRaWAN
 * @property string|null $LastUplinkReceivedAt
 */
class WirelessGatewayStatistics extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     Id?: string|null,
     *     Name?: string|null,
     *     Description?: string|null,
     *     LoRaWAN?: LoRaWANGateway|null,
     *     LastUplinkReceivedAt?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
