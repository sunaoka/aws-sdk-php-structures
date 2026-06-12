<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\CreateTrigger\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ScheduleCondition|null $schedule
 */
class TriggerCondition extends Shape
{
    /**
     * @param array{schedule?: ScheduleCondition|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
