<?php

namespace Sunaoka\Aws\Structures\Swf\PollForDecisionTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WorkflowExecution|null $externalWorkflowExecution
 * @property int|null $externalInitiatedEventId
 * @property 'CHILD_POLICY_APPLIED'|null $cause
 */
class WorkflowExecutionCancelRequestedEventAttributes extends Shape
{
    /**
     * @param array{
     *     externalWorkflowExecution?: WorkflowExecution|null,
     *     externalInitiatedEventId?: int|null,
     *     cause?: 'CHILD_POLICY_APPLIED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
