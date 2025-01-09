<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeInferenceRecommendationsJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InferenceMetrics $Metrics
 * @property EndpointInfo $EndpointInfo
 */
class EndpointPerformance extends Shape
{
    /**
     * @param array{
     *     Metrics: InferenceMetrics,
     *     EndpointInfo: EndpointInfo
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
