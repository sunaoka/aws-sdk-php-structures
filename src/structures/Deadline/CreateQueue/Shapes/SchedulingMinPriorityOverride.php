<?php

namespace Sunaoka\Aws\Structures\Deadline\CreateQueue\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SchedulingMinPriorityOverrideAlwaysScheduleLast|null $alwaysScheduleLast
 */
class SchedulingMinPriorityOverride extends Shape
{
    /**
     * @param array{alwaysScheduleLast?: SchedulingMinPriorityOverrideAlwaysScheduleLast|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
