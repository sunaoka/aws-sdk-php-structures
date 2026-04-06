<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateAlgorithm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max>|null $MaxRuntimeInSeconds
 * @property int<1, max>|null $MaxWaitTimeInSeconds
 * @property int<7200, 2419200>|null $MaxPendingTimeInSeconds
 */
class StoppingCondition extends Shape
{
    /**
     * @param array{
     *     MaxRuntimeInSeconds?: int<1, max>|null,
     *     MaxWaitTimeInSeconds?: int<1, max>|null,
     *     MaxPendingTimeInSeconds?: int<7200, 2419200>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
