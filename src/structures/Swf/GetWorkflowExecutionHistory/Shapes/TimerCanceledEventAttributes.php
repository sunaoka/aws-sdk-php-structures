<?php

namespace Sunaoka\Aws\Structures\Swf\GetWorkflowExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $timerId
 * @property int $startedEventId
 * @property int $decisionTaskCompletedEventId
 */
class TimerCanceledEventAttributes extends Shape
{
    /**
     * @param array{
     *     timerId: string,
     *     startedEventId: int,
     *     decisionTaskCompletedEventId: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
