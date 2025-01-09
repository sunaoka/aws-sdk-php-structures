<?php

namespace Sunaoka\Aws\Structures\Swf\PollForDecisionTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WorkflowExecution $workflowExecution
 * @property int $initiatedEventId
 */
class ExternalWorkflowExecutionSignaledEventAttributes extends Shape
{
    /**
     * @param array{
     *     workflowExecution: WorkflowExecution,
     *     initiatedEventId: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
