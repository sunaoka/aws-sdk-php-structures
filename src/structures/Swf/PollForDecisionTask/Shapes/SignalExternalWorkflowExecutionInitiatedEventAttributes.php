<?php

namespace Sunaoka\Aws\Structures\Swf\PollForDecisionTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $workflowId
 * @property string|null $runId
 * @property string $signalName
 * @property string|null $input
 * @property int $decisionTaskCompletedEventId
 * @property string|null $control
 */
class SignalExternalWorkflowExecutionInitiatedEventAttributes extends Shape
{
    /**
     * @param array{
     *     workflowId: string,
     *     runId?: string|null,
     *     signalName: string,
     *     input?: string|null,
     *     decisionTaskCompletedEventId: int,
     *     control?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
