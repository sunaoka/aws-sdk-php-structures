<?php

namespace Sunaoka\Aws\Structures\Swf\PollForDecisionTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WorkflowExecution $workflowExecution
 * @property WorkflowType $workflowType
 * @property string $reason
 * @property string $details
 * @property int $initiatedEventId
 * @property int $startedEventId
 */
class ChildWorkflowExecutionFailedEventAttributes extends Shape
{
    /**
     * @param array{
     *     workflowExecution: WorkflowExecution,
     *     workflowType: WorkflowType,
     *     reason?: string,
     *     details?: string,
     *     initiatedEventId: int,
     *     startedEventId: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
