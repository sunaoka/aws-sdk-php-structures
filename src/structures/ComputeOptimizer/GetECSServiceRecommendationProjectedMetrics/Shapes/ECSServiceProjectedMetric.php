<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetECSServiceRecommendationProjectedMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Cpu'|'Memory'|null $name
 * @property list<\Aws\Api\DateTimeResult>|null $timestamps
 * @property list<double>|null $upperBoundValues
 * @property list<double>|null $lowerBoundValues
 */
class ECSServiceProjectedMetric extends Shape
{
    /**
     * @param array{
     *     name?: 'Cpu'|'Memory'|null,
     *     timestamps?: list<\Aws\Api\DateTimeResult>|null,
     *     upperBoundValues?: list<double>|null,
     *     lowerBoundValues?: list<double>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
