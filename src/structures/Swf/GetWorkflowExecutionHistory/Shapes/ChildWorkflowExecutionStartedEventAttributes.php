<?php

namespace Sunaoka\Aws\Structures\Swf\GetWorkflowExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WorkflowExecution $workflowExecution
 * @property WorkflowType $workflowType
 * @property int $initiatedEventId
 */
class ChildWorkflowExecutionStartedEventAttributes extends Shape
{
    /**
     * @param array{
     *     workflowExecution: WorkflowExecution,
     *     workflowType: WorkflowType,
     *     initiatedEventId: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
