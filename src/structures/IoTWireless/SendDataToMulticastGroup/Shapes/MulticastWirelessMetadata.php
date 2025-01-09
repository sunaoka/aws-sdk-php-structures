<?php

namespace Sunaoka\Aws\Structures\IoTWireless\SendDataToMulticastGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LoRaWANMulticastMetadata $LoRaWAN
 */
class MulticastWirelessMetadata extends Shape
{
    /**
     * @param array{LoRaWAN?: LoRaWANMulticastMetadata} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
