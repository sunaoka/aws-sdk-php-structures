<?php

namespace Sunaoka\Aws\Structures\ApplicationAutoScaling\DescribeScalingPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PredictiveScalingMetricDimension> $Dimensions
 * @property string $MetricName
 * @property string $Namespace
 */
class PredictiveScalingMetric extends Shape
{
    /**
     * @param array{
     *     Dimensions?: list<PredictiveScalingMetricDimension>,
     *     MetricName?: string,
     *     Namespace?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
