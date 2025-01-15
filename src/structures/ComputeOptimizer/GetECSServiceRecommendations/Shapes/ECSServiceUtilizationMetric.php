<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetECSServiceRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Cpu'|'Memory'|null $name
 * @property 'Maximum'|'Average'|null $statistic
 * @property double|null $value
 */
class ECSServiceUtilizationMetric extends Shape
{
    /**
     * @param array{
     *     name?: 'Cpu'|'Memory'|null,
     *     statistic?: 'Maximum'|'Average'|null,
     *     value?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
