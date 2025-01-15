<?php

namespace Sunaoka\Aws\Structures\Swf\RespondDecisionTaskCompleted\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $result
 */
class CompleteWorkflowExecutionDecisionAttributes extends Shape
{
    /**
     * @param array{result?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
