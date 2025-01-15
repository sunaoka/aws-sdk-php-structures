<?php

namespace Sunaoka\Aws\Structures\Swf\RespondDecisionTaskCompleted\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $workflowId
 * @property string|null $runId
 * @property string|null $control
 */
class RequestCancelExternalWorkflowExecutionDecisionAttributes extends Shape
{
    /**
     * @param array{
     *     workflowId: string,
     *     runId?: string|null,
     *     control?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
