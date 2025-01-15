<?php

namespace Sunaoka\Aws\Structures\Swf\PollForDecisionTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $signalName
 * @property string|null $input
 * @property WorkflowExecution|null $externalWorkflowExecution
 * @property int|null $externalInitiatedEventId
 */
class WorkflowExecutionSignaledEventAttributes extends Shape
{
    /**
     * @param array{
     *     signalName: string,
     *     input?: string|null,
     *     externalWorkflowExecution?: WorkflowExecution|null,
     *     externalInitiatedEventId?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
