<?php

namespace Sunaoka\Aws\Structures\ApplicationAutoScaling\DescribeScalingPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TargetTrackingMetricDimension> $Dimensions
 * @property string $MetricName
 * @property string $Namespace
 */
class TargetTrackingMetric extends Shape
{
    /**
     * @param array{
     *     Dimensions?: list<TargetTrackingMetricDimension>,
     *     MetricName?: string,
     *     Namespace?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
