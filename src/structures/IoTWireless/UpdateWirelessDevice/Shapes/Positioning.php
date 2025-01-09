<?php

namespace Sunaoka\Aws\Structures\IoTWireless\UpdateWirelessDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $ClockSync
 * @property int $Stream
 * @property int $Gnss
 */
class Positioning extends Shape
{
    /**
     * @param array{
     *     ClockSync?: int,
     *     Stream?: int,
     *     Gnss?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
