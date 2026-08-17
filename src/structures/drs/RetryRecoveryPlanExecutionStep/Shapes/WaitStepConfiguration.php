<?php

namespace Sunaoka\Aws\Structures\drs\RetryRecoveryPlanExecutionStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 120> $waitDurationMinutes
 */
class WaitStepConfiguration extends Shape
{
    /**
     * @param array{waitDurationMinutes: int<1, 120>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
