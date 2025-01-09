<?php

namespace Sunaoka\Aws\Structures\IoTWireless\UpdateWirelessDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 223> $ClockSync
 * @property int<1, 223> $Stream
 * @property int<1, 223> $Gnss
 */
class Positioning extends Shape
{
    /**
     * @param array{
     *     ClockSync?: int<1, 223>,
     *     Stream?: int<1, 223>,
     *     Gnss?: int<1, 223>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
