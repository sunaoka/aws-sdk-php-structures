<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListInferenceRecommendationsJobSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float $CostPerHour
 * @property float $CostPerInference
 * @property int $MaxInvocations
 * @property int $ModelLatency
 * @property float|null $CpuUtilization
 * @property float|null $MemoryUtilization
 * @property int<0, max>|null $ModelSetupTime
 */
class RecommendationMetrics extends Shape
{
    /**
     * @param array{
     *     CostPerHour: float,
     *     CostPerInference: float,
     *     MaxInvocations: int,
     *     ModelLatency: int,
     *     CpuUtilization?: float|null,
     *     MemoryUtilization?: float|null,
     *     ModelSetupTime?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
