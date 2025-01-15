<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetECSServiceRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Cpu'|'Memory'|null $name
 * @property 'Maximum'|'Average'|null $statistic
 * @property double|null $lowerBoundValue
 * @property double|null $upperBoundValue
 */
class ECSServiceProjectedUtilizationMetric extends Shape
{
    /**
     * @param array{
     *     name?: 'Cpu'|'Memory'|null,
     *     statistic?: 'Maximum'|'Average'|null,
     *     lowerBoundValue?: double|null,
     *     upperBoundValue?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
