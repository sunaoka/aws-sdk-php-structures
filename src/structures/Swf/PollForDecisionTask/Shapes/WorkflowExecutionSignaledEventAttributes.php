<?php

namespace Sunaoka\Aws\Structures\Swf\PollForDecisionTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $signalName
 * @property string $input
 * @property WorkflowExecution $externalWorkflowExecution
 * @property int $externalInitiatedEventId
 */
class WorkflowExecutionSignaledEventAttributes extends Shape
{
    /**
     * @param array{
     *     signalName: string,
     *     input?: string,
     *     externalWorkflowExecution?: WorkflowExecution,
     *     externalInitiatedEventId?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
