<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetWirelessDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 223>|null $ClockSync
 * @property int<1, 223>|null $Stream
 * @property int<1, 223>|null $Gnss
 */
class Positioning extends Shape
{
    /**
     * @param array{
     *     ClockSync?: int<1, 223>|null,
     *     Stream?: int<1, 223>|null,
     *     Gnss?: int<1, 223>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
