<?php

namespace Sunaoka\Aws\Structures\AutoScaling\GetPredictiveScalingForecast\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ASGAverageCPUUtilization'|'ASGAverageNetworkIn'|'ASGAverageNetworkOut'|'ALBRequestCountPerTarget' $PredefinedMetricType
 * @property string $ResourceLabel
 */
class PredictiveScalingPredefinedScalingMetric extends Shape
{
    /**
     * @param array{
     *     PredefinedMetricType: 'ASGAverageCPUUtilization'|'ASGAverageNetworkIn'|'ASGAverageNetworkOut'|'ALBRequestCountPerTarget',
     *     ResourceLabel?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
