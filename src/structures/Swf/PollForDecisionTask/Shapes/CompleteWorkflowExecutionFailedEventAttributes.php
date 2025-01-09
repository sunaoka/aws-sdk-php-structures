<?php

namespace Sunaoka\Aws\Structures\Swf\PollForDecisionTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'UNHANDLED_DECISION'|'OPERATION_NOT_PERMITTED' $cause
 * @property int $decisionTaskCompletedEventId
 */
class CompleteWorkflowExecutionFailedEventAttributes extends Shape
{
    /**
     * @param array{
     *     cause: 'UNHANDLED_DECISION'|'OPERATION_NOT_PERMITTED',
     *     decisionTaskCompletedEventId: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
