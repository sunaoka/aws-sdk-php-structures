<?php

namespace Sunaoka\Aws\Structures\IoTWireless\SendDataToWirelessDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LoRaWANSendDataToDevice $LoRaWAN
 * @property SidewalkSendDataToDevice $Sidewalk
 */
class WirelessMetadata extends Shape
{
    /**
     * @param array{
     *     LoRaWAN?: LoRaWANSendDataToDevice,
     *     Sidewalk?: SidewalkSendDataToDevice
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
