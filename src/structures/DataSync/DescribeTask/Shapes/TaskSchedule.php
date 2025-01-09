<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ScheduleExpression
 * @property 'ENABLED'|'DISABLED' $Status
 */
class TaskSchedule extends Shape
{
    /**
     * @param array{
     *     ScheduleExpression: string,
     *     Status?: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
