<?php

namespace Sunaoka\Aws\Structures\Swf\GetWorkflowExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WorkflowExecution $workflowExecution
 * @property WorkflowType $workflowType
 * @property string $result
 * @property int $initiatedEventId
 * @property int $startedEventId
 */
class ChildWorkflowExecutionCompletedEventAttributes extends Shape
{
    /**
     * @param array{
     *     workflowExecution: WorkflowExecution,
     *     workflowType: WorkflowType,
     *     result?: string,
     *     initiatedEventId: int,
     *     startedEventId: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
