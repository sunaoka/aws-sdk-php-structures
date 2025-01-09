<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListWirelessGateways\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Id
 * @property string $Name
 * @property string $Description
 * @property LoRaWANGateway $LoRaWAN
 * @property string $LastUplinkReceivedAt
 */
class WirelessGatewayStatistics extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     Id?: string,
     *     Name?: string,
     *     Description?: string,
     *     LoRaWAN?: LoRaWANGateway,
     *     LastUplinkReceivedAt?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
