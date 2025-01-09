<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetECSServiceRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Cpu'|'Memory' $name
 * @property 'Maximum'|'Average' $statistic
 * @property double $lowerBoundValue
 * @property double $upperBoundValue
 */
class ECSServiceProjectedUtilizationMetric extends Shape
{
    /**
     * @param array{
     *     name?: 'Cpu'|'Memory',
     *     statistic?: 'Maximum'|'Average',
     *     lowerBoundValue?: double,
     *     upperBoundValue?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
