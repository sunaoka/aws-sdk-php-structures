<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListInferenceRecommendationsJobSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float $CostPerHour
 * @property float $CostPerInference
 * @property int $MaxInvocations
 * @property int $ModelLatency
 * @property float $CpuUtilization
 * @property float $MemoryUtilization
 * @property int $ModelSetupTime
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
     *     ModelSetupTime?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
