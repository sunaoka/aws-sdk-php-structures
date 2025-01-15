<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetWirelessDeviceStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $GatewayEui
 * @property double|null $Snr
 * @property double|null $Rssi
 */
class LoRaWANGatewayMetadata extends Shape
{
    /**
     * @param array{
     *     GatewayEui?: string|null,
     *     Snr?: double|null,
     *     Rssi?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
