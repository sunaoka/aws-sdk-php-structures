<?php

namespace Sunaoka\Aws\Structures\Swf\GetWorkflowExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WorkflowExecution $externalWorkflowExecution
 * @property int $externalInitiatedEventId
 * @property 'CHILD_POLICY_APPLIED' $cause
 */
class WorkflowExecutionCancelRequestedEventAttributes extends Shape
{
    /**
     * @param array{
     *     externalWorkflowExecution?: WorkflowExecution,
     *     externalInitiatedEventId?: int,
     *     cause?: 'CHILD_POLICY_APPLIED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
