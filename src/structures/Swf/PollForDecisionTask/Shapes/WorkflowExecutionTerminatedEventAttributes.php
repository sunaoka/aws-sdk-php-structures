<?php

namespace Sunaoka\Aws\Structures\Swf\PollForDecisionTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $reason
 * @property string $details
 * @property 'TERMINATE'|'REQUEST_CANCEL'|'ABANDON' $childPolicy
 * @property 'CHILD_POLICY_APPLIED'|'EVENT_LIMIT_EXCEEDED'|'OPERATOR_INITIATED' $cause
 */
class WorkflowExecutionTerminatedEventAttributes extends Shape
{
    /**
     * @param array{
     *     reason?: string,
     *     details?: string,
     *     childPolicy: 'TERMINATE'|'REQUEST_CANCEL'|'ABANDON',
     *     cause?: 'CHILD_POLICY_APPLIED'|'EVENT_LIMIT_EXCEEDED'|'OPERATOR_INITIATED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
