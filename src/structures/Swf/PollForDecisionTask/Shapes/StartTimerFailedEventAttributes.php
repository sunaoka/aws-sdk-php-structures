<?php

namespace Sunaoka\Aws\Structures\Swf\PollForDecisionTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $timerId
 * @property 'TIMER_ID_ALREADY_IN_USE'|'OPEN_TIMERS_LIMIT_EXCEEDED'|'TIMER_CREATION_RATE_EXCEEDED'|'OPERATION_NOT_PERMITTED' $cause
 * @property int $decisionTaskCompletedEventId
 */
class StartTimerFailedEventAttributes extends Shape
{
    /**
     * @param array{
     *     timerId: string,
     *     cause: 'TIMER_ID_ALREADY_IN_USE'|'OPEN_TIMERS_LIMIT_EXCEEDED'|'TIMER_CREATION_RATE_EXCEEDED'|'OPERATION_NOT_PERMITTED',
     *     decisionTaskCompletedEventId: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
