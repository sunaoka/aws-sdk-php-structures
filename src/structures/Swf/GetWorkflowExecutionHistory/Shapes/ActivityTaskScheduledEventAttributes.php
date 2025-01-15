<?php

namespace Sunaoka\Aws\Structures\Swf\GetWorkflowExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ActivityType $activityType
 * @property string $activityId
 * @property string|null $input
 * @property string|null $control
 * @property string|null $scheduleToStartTimeout
 * @property string|null $scheduleToCloseTimeout
 * @property string|null $startToCloseTimeout
 * @property TaskList $taskList
 * @property string|null $taskPriority
 * @property int $decisionTaskCompletedEventId
 * @property string|null $heartbeatTimeout
 */
class ActivityTaskScheduledEventAttributes extends Shape
{
    /**
     * @param array{
     *     activityType: ActivityType,
     *     activityId: string,
     *     input?: string|null,
     *     control?: string|null,
     *     scheduleToStartTimeout?: string|null,
     *     scheduleToCloseTimeout?: string|null,
     *     startToCloseTimeout?: string|null,
     *     taskList: TaskList,
     *     taskPriority?: string|null,
     *     decisionTaskCompletedEventId: int,
     *     heartbeatTimeout?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
