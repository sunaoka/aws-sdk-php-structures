<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListWirelessDevices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DestinationName
 */
class SidewalkPositioning extends Shape
{
    /**
     * @param array{DestinationName?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
