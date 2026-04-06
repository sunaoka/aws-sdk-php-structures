<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListInferenceRecommendationsJobSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RecommendationMetrics|null $Metrics
 * @property EndpointOutputConfiguration|null $EndpointConfiguration
 * @property ModelConfiguration $ModelConfiguration
 * @property string|null $FailureReason
 * @property InferenceMetrics|null $EndpointMetrics
 * @property \Aws\Api\DateTimeResult|null $InvocationEndTime
 * @property \Aws\Api\DateTimeResult|null $InvocationStartTime
 */
class RecommendationJobInferenceBenchmark extends Shape
{
    /**
     * @param array{
     *     Metrics?: RecommendationMetrics|null,
     *     EndpointConfiguration?: EndpointOutputConfiguration|null,
     *     ModelConfiguration: ModelConfiguration,
     *     FailureReason?: string|null,
     *     EndpointMetrics?: InferenceMetrics|null,
     *     InvocationEndTime?: \Aws\Api\DateTimeResult|null,
     *     InvocationStartTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
