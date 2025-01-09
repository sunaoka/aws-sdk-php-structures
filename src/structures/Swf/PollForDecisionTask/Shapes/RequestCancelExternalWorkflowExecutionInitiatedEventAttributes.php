<?php

namespace Sunaoka\Aws\Structures\Swf\PollForDecisionTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $workflowId
 * @property string $runId
 * @property int $decisionTaskCompletedEventId
 * @property string $control
 */
class RequestCancelExternalWorkflowExecutionInitiatedEventAttributes extends Shape
{
    /**
     * @param array{
     *     workflowId: string,
     *     runId?: string,
     *     decisionTaskCompletedEventId: int,
     *     control?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
