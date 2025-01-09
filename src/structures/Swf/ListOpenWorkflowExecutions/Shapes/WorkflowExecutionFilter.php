<?php

namespace Sunaoka\Aws\Structures\Swf\ListOpenWorkflowExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $workflowId
 */
class WorkflowExecutionFilter extends Shape
{
    /**
     * @param array{workflowId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
