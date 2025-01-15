<?php

namespace Sunaoka\Aws\Structures\Swf\RespondDecisionTaskCompleted\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $reason
 * @property string|null $details
 */
class FailWorkflowExecutionDecisionAttributes extends Shape
{
    /**
     * @param array{
     *     reason?: string|null,
     *     details?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
