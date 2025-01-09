<?php

namespace Sunaoka\Aws\Structures\Swf\RespondDecisionTaskCompleted\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $details
 */
class CancelWorkflowExecutionDecisionAttributes extends Shape
{
    /**
     * @param array{details?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
