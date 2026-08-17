<?php

namespace Sunaoka\Aws\Structures\drs\ListRecoveryPlanExecutionSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NOT_STARTED'|'EXECUTING'|'WAITING'|'COMPLETED'|'FAILED'|'TIMED_OUT'|'SKIPPED'|null $status
 */
class ListRecoveryPlanExecutionStepsFilter extends Shape
{
    /**
     * @param array{status?: 'NOT_STARTED'|'EXECUTING'|'WAITING'|'COMPLETED'|'FAILED'|'TIMED_OUT'|'SKIPPED'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
