<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListWirelessDevices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DevEui
 */
class LoRaWANListDevice extends Shape
{
    /**
     * @param array{DevEui?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
