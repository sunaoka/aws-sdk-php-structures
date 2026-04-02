<?php

namespace Sunaoka\Aws\Structures\Deadline\CreateQueue\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SchedulingMaxPriorityOverrideAlwaysScheduleFirst|null $alwaysScheduleFirst
 */
class SchedulingMaxPriorityOverride extends Shape
{
    /**
     * @param array{alwaysScheduleFirst?: SchedulingMaxPriorityOverrideAlwaysScheduleFirst|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
