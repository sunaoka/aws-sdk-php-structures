<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\BatchGetServiceLevelObjectiveBudgetReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RollingInterval $RollingInterval
 * @property CalendarInterval $CalendarInterval
 */
class Interval extends Shape
{
    /**
     * @param array{
     *     RollingInterval?: RollingInterval,
     *     CalendarInterval?: CalendarInterval
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
