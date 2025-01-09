<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetWirelessDeviceStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GatewayEui
 * @property double $Snr
 * @property double $Rssi
 */
class LoRaWANGatewayMetadata extends Shape
{
    /**
     * @param array{
     *     GatewayEui?: string,
     *     Snr?: double,
     *     Rssi?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
