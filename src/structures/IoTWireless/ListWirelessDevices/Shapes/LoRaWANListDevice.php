<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListWirelessDevices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DevEui
 */
class LoRaWANListDevice extends Shape
{
    /**
     * @param array{DevEui?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
