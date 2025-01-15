<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribePolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ASGCPUUtilization'|'ASGNetworkIn'|'ASGNetworkOut'|'ALBRequestCount' $PredefinedMetricType
 * @property string|null $ResourceLabel
 */
class PredictiveScalingPredefinedMetricPair extends Shape
{
    /**
     * @param array{
     *     PredefinedMetricType: 'ASGCPUUtilization'|'ASGNetworkIn'|'ASGNetworkOut'|'ALBRequestCount',
     *     ResourceLabel?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
