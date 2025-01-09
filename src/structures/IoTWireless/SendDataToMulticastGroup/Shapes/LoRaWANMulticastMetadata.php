<?php

namespace Sunaoka\Aws\Structures\IoTWireless\SendDataToMulticastGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 223> $FPort
 */
class LoRaWANMulticastMetadata extends Shape
{
    /**
     * @param array{FPort?: int<1, 223>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
