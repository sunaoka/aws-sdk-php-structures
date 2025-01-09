<?php

namespace Sunaoka\Aws\Structures\AutoScaling\PutScalingPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ASGCPUUtilization'|'ASGNetworkIn'|'ASGNetworkOut'|'ALBRequestCount' $PredefinedMetricType
 * @property string $ResourceLabel
 */
class PredictiveScalingPredefinedMetricPair extends Shape
{
    /**
     * @param array{
     *     PredefinedMetricType: 'ASGCPUUtilization'|'ASGNetworkIn'|'ASGNetworkOut'|'ALBRequestCount',
     *     ResourceLabel?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
