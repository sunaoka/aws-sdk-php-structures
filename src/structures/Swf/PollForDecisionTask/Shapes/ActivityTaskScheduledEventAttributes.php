<?php

namespace Sunaoka\Aws\Structures\Swf\PollForDecisionTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ActivityType $activityType
 * @property string $activityId
 * @property string $input
 * @property string $control
 * @property string $scheduleToStartTimeout
 * @property string $scheduleToCloseTimeout
 * @property string $startToCloseTimeout
 * @property TaskList $taskList
 * @property string $taskPriority
 * @property int $decisionTaskCompletedEventId
 * @property string $heartbeatTimeout
 */
class ActivityTaskScheduledEventAttributes extends Shape
{
    /**
     * @param array{
     *     activityType: ActivityType,
     *     activityId: string,
     *     input?: string,
     *     control?: string,
     *     scheduleToStartTimeout?: string,
     *     scheduleToCloseTimeout?: string,
     *     startToCloseTimeout?: string,
     *     taskList: TaskList,
     *     taskPriority?: string,
     *     decisionTaskCompletedEventId: int,
     *     heartbeatTimeout?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
