<?php

namespace Sunaoka\Aws\Structures\Swf\RespondDecisionTaskCompleted\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ActivityType $activityType
 * @property string $activityId
 * @property string|null $control
 * @property string|null $input
 * @property string|null $scheduleToCloseTimeout
 * @property TaskList|null $taskList
 * @property string|null $taskPriority
 * @property string|null $scheduleToStartTimeout
 * @property string|null $startToCloseTimeout
 * @property string|null $heartbeatTimeout
 */
class ScheduleActivityTaskDecisionAttributes extends Shape
{
    /**
     * @param array{
     *     activityType: ActivityType,
     *     activityId: string,
     *     control?: string|null,
     *     input?: string|null,
     *     scheduleToCloseTimeout?: string|null,
     *     taskList?: TaskList|null,
     *     taskPriority?: string|null,
     *     scheduleToStartTimeout?: string|null,
     *     startToCloseTimeout?: string|null,
     *     heartbeatTimeout?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
