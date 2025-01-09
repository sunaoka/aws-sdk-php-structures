<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateTrainingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MaxRuntimeInSeconds
 * @property int $MaxWaitTimeInSeconds
 * @property int $MaxPendingTimeInSeconds
 */
class StoppingCondition extends Shape
{
    /**
     * @param array{
     *     MaxRuntimeInSeconds?: int,
     *     MaxWaitTimeInSeconds?: int,
     *     MaxPendingTimeInSeconds?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
