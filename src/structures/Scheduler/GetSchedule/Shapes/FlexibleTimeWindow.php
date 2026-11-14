<?php

namespace Sunaoka\Aws\Structures\Scheduler\GetSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OFF'|'FLEXIBLE' $Mode
 * @property int<1, 1440>|null $MaximumWindowInMinutes
 */
class FlexibleTimeWindow extends Shape
{
    /**
     * @param array{
     *     Mode: 'OFF'|'FLEXIBLE',
     *     MaximumWindowInMinutes?: int<1, 1440>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
