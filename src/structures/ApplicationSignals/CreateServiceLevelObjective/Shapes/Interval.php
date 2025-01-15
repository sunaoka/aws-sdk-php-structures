<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\CreateServiceLevelObjective\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RollingInterval|null $RollingInterval
 * @property CalendarInterval|null $CalendarInterval
 */
class Interval extends Shape
{
    /**
     * @param array{
     *     RollingInterval?: RollingInterval|null,
     *     CalendarInterval?: CalendarInterval|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
