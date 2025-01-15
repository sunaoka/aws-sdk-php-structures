<?php

namespace Sunaoka\Aws\Structures\Swf\GetWorkflowExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $reason
 * @property string|null $details
 * @property int $decisionTaskCompletedEventId
 */
class WorkflowExecutionFailedEventAttributes extends Shape
{
    /**
     * @param array{
     *     reason?: string|null,
     *     details?: string|null,
     *     decisionTaskCompletedEventId: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
