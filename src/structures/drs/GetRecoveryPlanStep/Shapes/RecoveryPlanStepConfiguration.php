<?php

namespace Sunaoka\Aws\Structures\drs\GetRecoveryPlanStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ServerStepConfiguration|null $serverStepConfiguration
 * @property WaitStepConfiguration|null $waitStepConfiguration
 */
class RecoveryPlanStepConfiguration extends Shape
{
    /**
     * @param array{
     *     serverStepConfiguration?: ServerStepConfiguration|null,
     *     waitStepConfiguration?: WaitStepConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
