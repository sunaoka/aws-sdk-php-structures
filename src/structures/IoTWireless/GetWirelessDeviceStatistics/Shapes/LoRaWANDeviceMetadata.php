<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetWirelessDeviceStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DevEui
 * @property int $FPort
 * @property int $DataRate
 * @property int $Frequency
 * @property string $Timestamp
 * @property list<LoRaWANGatewayMetadata> $Gateways
 * @property list<LoRaWANPublicGatewayMetadata> $PublicGateways
 */
class LoRaWANDeviceMetadata extends Shape
{
    /**
     * @param array{
     *     DevEui?: string,
     *     FPort?: int,
     *     DataRate?: int,
     *     Frequency?: int,
     *     Timestamp?: string,
     *     Gateways?: list<LoRaWANGatewayMetadata>,
     *     PublicGateways?: list<LoRaWANPublicGatewayMetadata>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
