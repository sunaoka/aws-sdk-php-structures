<?php

namespace Sunaoka\Aws\Structures\drs\ListRecoveryPlanExecutionSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RecoveryPlanExecutionServer> $servers
 */
class ExecutionServerStepConfiguration extends Shape
{
    /**
     * @param array{servers: list<RecoveryPlanExecutionServer>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
