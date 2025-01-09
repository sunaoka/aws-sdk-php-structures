<?php

namespace Sunaoka\Aws\Structures\Scheduler\CreateSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MaximumWindowInMinutes
 * @property 'OFF'|'FLEXIBLE' $Mode
 */
class FlexibleTimeWindow extends Shape
{
    /**
     * @param array{
     *     MaximumWindowInMinutes?: int,
     *     Mode: 'OFF'|'FLEXIBLE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
