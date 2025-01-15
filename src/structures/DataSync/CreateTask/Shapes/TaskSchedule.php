<?php

namespace Sunaoka\Aws\Structures\DataSync\CreateTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ScheduleExpression
 * @property 'ENABLED'|'DISABLED'|null $Status
 */
class TaskSchedule extends Shape
{
    /**
     * @param array{
     *     ScheduleExpression: string,
     *     Status?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
