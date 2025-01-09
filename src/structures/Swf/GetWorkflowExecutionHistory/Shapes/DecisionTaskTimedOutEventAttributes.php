<?php

namespace Sunaoka\Aws\Structures\Swf\GetWorkflowExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'START_TO_CLOSE'|'SCHEDULE_TO_START' $timeoutType
 * @property int $scheduledEventId
 * @property int $startedEventId
 */
class DecisionTaskTimedOutEventAttributes extends Shape
{
    /**
     * @param array{
     *     timeoutType: 'START_TO_CLOSE'|'SCHEDULE_TO_START',
     *     scheduledEventId: int,
     *     startedEventId: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
