<?php

namespace Sunaoka\Aws\Structures\Swf\DescribeActivityType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $defaultTaskStartToCloseTimeout
 * @property string $defaultTaskHeartbeatTimeout
 * @property TaskList $defaultTaskList
 * @property string $defaultTaskPriority
 * @property string $defaultTaskScheduleToStartTimeout
 * @property string $defaultTaskScheduleToCloseTimeout
 */
class ActivityTypeConfiguration extends Shape
{
    /**
     * @param array{
     *     defaultTaskStartToCloseTimeout?: string,
     *     defaultTaskHeartbeatTimeout?: string,
     *     defaultTaskList?: TaskList,
     *     defaultTaskPriority?: string,
     *     defaultTaskScheduleToStartTimeout?: string,
     *     defaultTaskScheduleToCloseTimeout?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
