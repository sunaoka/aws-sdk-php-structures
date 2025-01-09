<?php

namespace Sunaoka\Aws\Structures\Swf\PollForDecisionTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $workflowId
 * @property string $runId
 * @property string $signalName
 * @property string $input
 * @property int $decisionTaskCompletedEventId
 * @property string $control
 */
class SignalExternalWorkflowExecutionInitiatedEventAttributes extends Shape
{
    /**
     * @param array{
     *     workflowId: string,
     *     runId?: string,
     *     signalName: string,
     *     input?: string,
     *     decisionTaskCompletedEventId: int,
     *     control?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
