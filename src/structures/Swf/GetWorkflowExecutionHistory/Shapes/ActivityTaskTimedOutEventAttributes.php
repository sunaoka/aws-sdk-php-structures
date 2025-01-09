<?php

namespace Sunaoka\Aws\Structures\Swf\GetWorkflowExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'START_TO_CLOSE'|'SCHEDULE_TO_START'|'SCHEDULE_TO_CLOSE'|'HEARTBEAT' $timeoutType
 * @property int $scheduledEventId
 * @property int $startedEventId
 * @property string $details
 */
class ActivityTaskTimedOutEventAttributes extends Shape
{
    /**
     * @param array{
     *     timeoutType: 'START_TO_CLOSE'|'SCHEDULE_TO_START'|'SCHEDULE_TO_CLOSE'|'HEARTBEAT',
     *     scheduledEventId: int,
     *     startedEventId: int,
     *     details?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
