<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateCompilationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max> $MaxRuntimeInSeconds
 * @property int<1, max> $MaxWaitTimeInSeconds
 * @property int<7200, 2419200> $MaxPendingTimeInSeconds
 */
class StoppingCondition extends Shape
{
    /**
     * @param array{
     *     MaxRuntimeInSeconds?: int<1, max>,
     *     MaxWaitTimeInSeconds?: int<1, max>,
     *     MaxPendingTimeInSeconds?: int<7200, 2419200>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
