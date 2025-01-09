<?php

namespace Sunaoka\Aws\Structures\Swf\GetWorkflowExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $timerId
 * @property 'TIMER_ID_UNKNOWN'|'OPERATION_NOT_PERMITTED' $cause
 * @property int $decisionTaskCompletedEventId
 */
class CancelTimerFailedEventAttributes extends Shape
{
    /**
     * @param array{
     *     timerId: string,
     *     cause: 'TIMER_ID_UNKNOWN'|'OPERATION_NOT_PERMITTED',
     *     decisionTaskCompletedEventId: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
