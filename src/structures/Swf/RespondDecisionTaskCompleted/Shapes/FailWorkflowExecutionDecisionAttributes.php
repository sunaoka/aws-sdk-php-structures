<?php

namespace Sunaoka\Aws\Structures\Swf\RespondDecisionTaskCompleted\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $reason
 * @property string $details
 */
class FailWorkflowExecutionDecisionAttributes extends Shape
{
    /**
     * @param array{
     *     reason?: string,
     *     details?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
