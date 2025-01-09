<?php

namespace Sunaoka\Aws\Structures\Swf\PollForDecisionTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'START_TO_CLOSE' $timeoutType
 * @property 'TERMINATE'|'REQUEST_CANCEL'|'ABANDON' $childPolicy
 */
class WorkflowExecutionTimedOutEventAttributes extends Shape
{
    /**
     * @param array{
     *     timeoutType: 'START_TO_CLOSE',
     *     childPolicy: 'TERMINATE'|'REQUEST_CANCEL'|'ABANDON'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
