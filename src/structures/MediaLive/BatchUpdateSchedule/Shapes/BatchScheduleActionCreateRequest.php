<?php

namespace Sunaoka\Aws\Structures\MediaLive\BatchUpdateSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ScheduleAction> $ScheduleActions
 */
class BatchScheduleActionCreateRequest extends Shape
{
    /**
     * @param array{ScheduleActions: list<ScheduleAction>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
