<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeInferenceRecommendationsJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RecommendationMetrics $Metrics
 * @property EndpointOutputConfiguration $EndpointConfiguration
 * @property ModelConfiguration $ModelConfiguration
 * @property string|null $RecommendationId
 * @property \Aws\Api\DateTimeResult|null $InvocationEndTime
 * @property \Aws\Api\DateTimeResult|null $InvocationStartTime
 */
class InferenceRecommendation extends Shape
{
    /**
     * @param array{
     *     Metrics: RecommendationMetrics,
     *     EndpointConfiguration: EndpointOutputConfiguration,
     *     ModelConfiguration: ModelConfiguration,
     *     RecommendationId?: string|null,
     *     InvocationEndTime?: \Aws\Api\DateTimeResult|null,
     *     InvocationStartTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
