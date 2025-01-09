<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeInferenceRecommendationsJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float $CostPerHour
 * @property float $CostPerInference
 * @property int $MaxInvocations
 * @property int $ModelLatency
 * @property float $CpuUtilization
 * @property float $MemoryUtilization
 * @property int<0, max> $ModelSetupTime
 */
class RecommendationMetrics extends Shape
{
    /**
     * @param array{
     *     CostPerHour?: float,
     *     CostPerInference?: float,
     *     MaxInvocations?: int,
     *     ModelLatency?: int,
     *     CpuUtilization?: float,
     *     MemoryUtilization?: float,
     *     ModelSetupTime?: int<0, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
