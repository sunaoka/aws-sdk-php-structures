<?php

namespace Sunaoka\Aws\Structures\Swf\RespondDecisionTaskCompleted\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ActivityType $activityType
 * @property string $activityId
 * @property string $control
 * @property string $input
 * @property string $scheduleToCloseTimeout
 * @property TaskList $taskList
 * @property string $taskPriority
 * @property string $scheduleToStartTimeout
 * @property string $startToCloseTimeout
 * @property string $heartbeatTimeout
 */
class ScheduleActivityTaskDecisionAttributes extends Shape
{
    /**
     * @param array{
     *     activityType: ActivityType,
     *     activityId: string,
     *     control?: string,
     *     input?: string,
     *     scheduleToCloseTimeout?: string,
     *     taskList?: TaskList,
     *     taskPriority?: string,
     *     scheduleToStartTimeout?: string,
     *     startToCloseTimeout?: string,
     *     heartbeatTimeout?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
