<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetECSServiceRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Cpu'|'Memory' $name
 * @property 'Maximum'|'Average' $statistic
 * @property double $value
 */
class ECSServiceUtilizationMetric extends Shape
{
    /**
     * @param array{
     *     name?: 'Cpu'|'Memory',
     *     statistic?: 'Maximum'|'Average',
     *     value?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
