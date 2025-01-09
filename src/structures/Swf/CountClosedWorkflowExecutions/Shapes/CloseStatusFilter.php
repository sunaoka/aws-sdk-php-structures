<?php

namespace Sunaoka\Aws\Structures\Swf\CountClosedWorkflowExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'COMPLETED'|'FAILED'|'CANCELED'|'TERMINATED'|'CONTINUED_AS_NEW'|'TIMED_OUT' $status
 */
class CloseStatusFilter extends Shape
{
    /**
     * @param array{status: 'COMPLETED'|'FAILED'|'CANCELED'|'TERMINATED'|'CONTINUED_AS_NEW'|'TIMED_OUT'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
