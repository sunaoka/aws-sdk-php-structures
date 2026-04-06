<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetWirelessDeviceStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DevEui
 * @property int|null $FPort
 * @property int|null $DataRate
 * @property int|null $Frequency
 * @property string|null $Timestamp
 * @property list<LoRaWANGatewayMetadata>|null $Gateways
 */
class LoRaWANDeviceMetadata extends Shape
{
    /**
     * @param array{
     *     DevEui?: string|null,
     *     FPort?: int|null,
     *     DataRate?: int|null,
     *     Frequency?: int|null,
     *     Timestamp?: string|null,
     *     Gateways?: list<LoRaWANGatewayMetadata>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
