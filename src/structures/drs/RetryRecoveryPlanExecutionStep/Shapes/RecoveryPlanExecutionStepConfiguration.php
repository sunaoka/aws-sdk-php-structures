<?php

namespace Sunaoka\Aws\Structures\drs\RetryRecoveryPlanExecutionStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ExecutionServerStepConfiguration|null $executionServerStepConfiguration
 * @property WaitStepConfiguration|null $waitStepConfiguration
 */
class RecoveryPlanExecutionStepConfiguration extends Shape
{
    /**
     * @param array{
     *     executionServerStepConfiguration?: ExecutionServerStepConfiguration|null,
     *     waitStepConfiguration?: WaitStepConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
