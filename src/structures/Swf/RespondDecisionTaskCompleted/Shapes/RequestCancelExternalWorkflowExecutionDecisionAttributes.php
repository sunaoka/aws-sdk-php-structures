<?php

namespace Sunaoka\Aws\Structures\Swf\RespondDecisionTaskCompleted\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $workflowId
 * @property string $runId
 * @property string $control
 */
class RequestCancelExternalWorkflowExecutionDecisionAttributes extends Shape
{
    /**
     * @param array{
     *     workflowId: string,
     *     runId?: string,
     *     control?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
