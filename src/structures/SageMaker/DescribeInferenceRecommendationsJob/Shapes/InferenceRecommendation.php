<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeInferenceRecommendationsJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RecommendationId
 * @property RecommendationMetrics|null $Metrics
 * @property EndpointOutputConfiguration $EndpointConfiguration
 * @property ModelConfiguration $ModelConfiguration
 * @property \Aws\Api\DateTimeResult|null $InvocationEndTime
 * @property \Aws\Api\DateTimeResult|null $InvocationStartTime
 */
class InferenceRecommendation extends Shape
{
    /**
     * @param array{
     *     RecommendationId?: string|null,
     *     Metrics?: RecommendationMetrics|null,
     *     EndpointConfiguration: EndpointOutputConfiguration,
     *     ModelConfiguration: ModelConfiguration,
     *     InvocationEndTime?: \Aws\Api\DateTimeResult|null,
     *     InvocationStartTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
