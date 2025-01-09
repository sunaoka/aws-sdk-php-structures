<?php

namespace Sunaoka\Aws\Structures\Swf\PollForDecisionTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ActivityType $activityType
 * @property string $activityId
 * @property 'ACTIVITY_TYPE_DEPRECATED'|'ACTIVITY_TYPE_DOES_NOT_EXIST'|'ACTIVITY_ID_ALREADY_IN_USE'|'OPEN_ACTIVITIES_LIMIT_EXCEEDED'|'ACTIVITY_CREATION_RATE_EXCEEDED'|'DEFAULT_SCHEDULE_TO_CLOSE_TIMEOUT_UNDEFINED'|'DEFAULT_TASK_LIST_UNDEFINED'|'DEFAULT_SCHEDULE_TO_START_TIMEOUT_UNDEFINED'|'DEFAULT_START_TO_CLOSE_TIMEOUT_UNDEFINED'|'DEFAULT_HEARTBEAT_TIMEOUT_UNDEFINED'|'OPERATION_NOT_PERMITTED' $cause
 * @property int $decisionTaskCompletedEventId
 */
class ScheduleActivityTaskFailedEventAttributes extends Shape
{
    /**
     * @param array{
     *     activityType: ActivityType,
     *     activityId: string,
     *     cause: 'ACTIVITY_TYPE_DEPRECATED'|'ACTIVITY_TYPE_DOES_NOT_EXIST'|'ACTIVITY_ID_ALREADY_IN_USE'|'OPEN_ACTIVITIES_LIMIT_EXCEEDED'|'ACTIVITY_CREATION_RATE_EXCEEDED'|'DEFAULT_SCHEDULE_TO_CLOSE_TIMEOUT_UNDEFINED'|'DEFAULT_TASK_LIST_UNDEFINED'|'DEFAULT_SCHEDULE_TO_START_TIMEOUT_UNDEFINED'|'DEFAULT_START_TO_CLOSE_TIMEOUT_UNDEFINED'|'DEFAULT_HEARTBEAT_TIMEOUT_UNDEFINED'|'OPERATION_NOT_PERMITTED',
     *     decisionTaskCompletedEventId: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
