<?php

namespace Sunaoka\Aws\Structures\Scheduler\UpdateSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 1440> $MaximumWindowInMinutes
 * @property 'OFF'|'FLEXIBLE' $Mode
 */
class FlexibleTimeWindow extends Shape
{
    /**
     * @param array{
     *     MaximumWindowInMinutes?: int<1, 1440>,
     *     Mode: 'OFF'|'FLEXIBLE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
