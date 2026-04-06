<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeInferenceRecommendationsJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float|null $CostPerHour
 * @property float|null $CostPerInference
 * @property int|null $MaxInvocations
 * @property int|null $ModelLatency
 * @property float|null $CpuUtilization
 * @property float|null $MemoryUtilization
 * @property int<0, max>|null $ModelSetupTime
 */
class RecommendationMetrics extends Shape
{
    /**
     * @param array{
     *     CostPerHour?: float|null,
     *     CostPerInference?: float|null,
     *     MaxInvocations?: int|null,
     *     ModelLatency?: int|null,
     *     CpuUtilization?: float|null,
     *     MemoryUtilization?: float|null,
     *     ModelSetupTime?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
