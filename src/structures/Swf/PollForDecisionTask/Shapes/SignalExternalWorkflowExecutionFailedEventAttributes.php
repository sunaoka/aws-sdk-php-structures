<?php

namespace Sunaoka\Aws\Structures\Swf\PollForDecisionTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $workflowId
 * @property string $runId
 * @property 'UNKNOWN_EXTERNAL_WORKFLOW_EXECUTION'|'SIGNAL_EXTERNAL_WORKFLOW_EXECUTION_RATE_EXCEEDED'|'OPERATION_NOT_PERMITTED' $cause
 * @property int $initiatedEventId
 * @property int $decisionTaskCompletedEventId
 * @property string $control
 */
class SignalExternalWorkflowExecutionFailedEventAttributes extends Shape
{
    /**
     * @param array{
     *     workflowId: string,
     *     runId?: string,
     *     cause: 'UNKNOWN_EXTERNAL_WORKFLOW_EXECUTION'|'SIGNAL_EXTERNAL_WORKFLOW_EXECUTION_RATE_EXCEEDED'|'OPERATION_NOT_PERMITTED',
     *     initiatedEventId: int,
     *     decisionTaskCompletedEventId: int,
     *     control?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
