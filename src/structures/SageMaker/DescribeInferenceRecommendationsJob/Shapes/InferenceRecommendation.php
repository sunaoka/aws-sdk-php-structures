<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeInferenceRecommendationsJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RecommendationId
 * @property RecommendationMetrics $Metrics
 * @property EndpointOutputConfiguration $EndpointConfiguration
 * @property ModelConfiguration $ModelConfiguration
 * @property \Aws\Api\DateTimeResult $InvocationEndTime
 * @property \Aws\Api\DateTimeResult $InvocationStartTime
 */
class InferenceRecommendation extends Shape
{
    /**
     * @param array{
     *     RecommendationId?: string,
     *     Metrics?: RecommendationMetrics,
     *     EndpointConfiguration: EndpointOutputConfiguration,
     *     ModelConfiguration: ModelConfiguration,
     *     InvocationEndTime?: \Aws\Api\DateTimeResult,
     *     InvocationStartTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
