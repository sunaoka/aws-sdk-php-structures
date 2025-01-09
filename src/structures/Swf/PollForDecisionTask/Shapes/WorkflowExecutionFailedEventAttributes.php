<?php

namespace Sunaoka\Aws\Structures\Swf\PollForDecisionTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $reason
 * @property string $details
 * @property int $decisionTaskCompletedEventId
 */
class WorkflowExecutionFailedEventAttributes extends Shape
{
    /**
     * @param array{
     *     reason?: string,
     *     details?: string,
     *     decisionTaskCompletedEventId: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
