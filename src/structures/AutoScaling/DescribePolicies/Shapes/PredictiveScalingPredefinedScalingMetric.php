<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribePolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ASGAverageCPUUtilization'|'ASGAverageNetworkIn'|'ASGAverageNetworkOut'|'ALBRequestCountPerTarget' $PredefinedMetricType
 * @property string|null $ResourceLabel
 */
class PredictiveScalingPredefinedScalingMetric extends Shape
{
    /**
     * @param array{
     *     PredefinedMetricType: 'ASGAverageCPUUtilization'|'ASGAverageNetworkIn'|'ASGAverageNetworkOut'|'ALBRequestCountPerTarget',
     *     ResourceLabel?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
