<?php

namespace Sunaoka\Aws\Structures\Swf\DescribeActivityType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $defaultTaskStartToCloseTimeout
 * @property string|null $defaultTaskHeartbeatTimeout
 * @property TaskList|null $defaultTaskList
 * @property string|null $defaultTaskPriority
 * @property string|null $defaultTaskScheduleToStartTimeout
 * @property string|null $defaultTaskScheduleToCloseTimeout
 */
class ActivityTypeConfiguration extends Shape
{
    /**
     * @param array{
     *     defaultTaskStartToCloseTimeout?: string|null,
     *     defaultTaskHeartbeatTimeout?: string|null,
     *     defaultTaskList?: TaskList|null,
     *     defaultTaskPriority?: string|null,
     *     defaultTaskScheduleToStartTimeout?: string|null,
     *     defaultTaskScheduleToCloseTimeout?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
