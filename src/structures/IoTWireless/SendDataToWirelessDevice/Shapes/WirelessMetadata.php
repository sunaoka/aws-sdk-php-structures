<?php

namespace Sunaoka\Aws\Structures\IoTWireless\SendDataToWirelessDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LoRaWANSendDataToDevice|null $LoRaWAN
 * @property SidewalkSendDataToDevice|null $Sidewalk
 */
class WirelessMetadata extends Shape
{
    /**
     * @param array{
     *     LoRaWAN?: LoRaWANSendDataToDevice|null,
     *     Sidewalk?: SidewalkSendDataToDevice|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
