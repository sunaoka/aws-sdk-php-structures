<?php

namespace Sunaoka\Aws\Structures\ApplicationAutoScaling\DescribeScalingPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TargetTrackingMetricDimension>|null $Dimensions
 * @property string|null $MetricName
 * @property string|null $Namespace
 */
class TargetTrackingMetric extends Shape
{
    /**
     * @param array{
     *     Dimensions?: list<TargetTrackingMetricDimension>|null,
     *     MetricName?: string|null,
     *     Namespace?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
