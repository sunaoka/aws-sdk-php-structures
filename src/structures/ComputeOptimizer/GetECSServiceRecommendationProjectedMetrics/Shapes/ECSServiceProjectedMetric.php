<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetECSServiceRecommendationProjectedMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Cpu'|'Memory' $name
 * @property list<\Aws\Api\DateTimeResult> $timestamps
 * @property list<double> $upperBoundValues
 * @property list<double> $lowerBoundValues
 */
class ECSServiceProjectedMetric extends Shape
{
    /**
     * @param array{
     *     name?: 'Cpu'|'Memory',
     *     timestamps?: list<\Aws\Api\DateTimeResult>,
     *     upperBoundValues?: list<double>,
     *     lowerBoundValues?: list<double>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
