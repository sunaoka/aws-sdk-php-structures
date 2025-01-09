<?php

namespace Sunaoka\Aws\Structures\Swf\GetWorkflowExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WorkflowExecution $workflowExecution
 * @property WorkflowType $workflowType
 * @property 'START_TO_CLOSE' $timeoutType
 * @property int $initiatedEventId
 * @property int $startedEventId
 */
class ChildWorkflowExecutionTimedOutEventAttributes extends Shape
{
    /**
     * @param array{
     *     workflowExecution: WorkflowExecution,
     *     workflowType: WorkflowType,
     *     timeoutType: 'START_TO_CLOSE',
     *     initiatedEventId: int,
     *     startedEventId: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
