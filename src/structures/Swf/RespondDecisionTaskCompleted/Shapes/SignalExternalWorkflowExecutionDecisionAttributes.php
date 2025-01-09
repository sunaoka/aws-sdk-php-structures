<?php

namespace Sunaoka\Aws\Structures\Swf\RespondDecisionTaskCompleted\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $workflowId
 * @property string $runId
 * @property string $signalName
 * @property string $input
 * @property string $control
 */
class SignalExternalWorkflowExecutionDecisionAttributes extends Shape
{
    /**
     * @param array{
     *     workflowId: string,
     *     runId?: string,
     *     signalName: string,
     *     input?: string,
     *     control?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
