<?php

namespace Sunaoka\Aws\Structures\Swf\PollForDecisionTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $details
 * @property int $decisionTaskCompletedEventId
 */
class WorkflowExecutionCanceledEventAttributes extends Shape
{
    /**
     * @param array{
     *     details?: string,
     *     decisionTaskCompletedEventId: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
