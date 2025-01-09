<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListInferenceRecommendationsJobSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RecommendationMetrics $Metrics
 * @property InferenceMetrics $EndpointMetrics
 * @property EndpointOutputConfiguration $EndpointConfiguration
 * @property ModelConfiguration $ModelConfiguration
 * @property string $FailureReason
 * @property \Aws\Api\DateTimeResult $InvocationEndTime
 * @property \Aws\Api\DateTimeResult $InvocationStartTime
 */
class RecommendationJobInferenceBenchmark extends Shape
{
    /**
     * @param array{
     *     Metrics?: RecommendationMetrics,
     *     EndpointMetrics?: InferenceMetrics,
     *     EndpointConfiguration?: EndpointOutputConfiguration,
     *     ModelConfiguration: ModelConfiguration,
     *     FailureReason?: string,
     *     InvocationEndTime?: \Aws\Api\DateTimeResult,
     *     InvocationStartTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
