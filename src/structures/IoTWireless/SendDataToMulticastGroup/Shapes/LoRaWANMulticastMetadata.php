<?php

namespace Sunaoka\Aws\Structures\IoTWireless\SendDataToMulticastGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $FPort
 */
class LoRaWANMulticastMetadata extends Shape
{
    /**
     * @param array{FPort?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
