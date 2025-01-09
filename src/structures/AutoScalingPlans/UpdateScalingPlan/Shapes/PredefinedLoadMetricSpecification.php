<?php

namespace Sunaoka\Aws\Structures\AutoScalingPlans\UpdateScalingPlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ASGTotalCPUUtilization'|'ASGTotalNetworkIn'|'ASGTotalNetworkOut'|'ALBTargetGroupRequestCount' $PredefinedLoadMetricType
 * @property string $ResourceLabel
 */
class PredefinedLoadMetricSpecification extends Shape
{
    /**
     * @param array{
     *     PredefinedLoadMetricType: 'ASGTotalCPUUtilization'|'ASGTotalNetworkIn'|'ASGTotalNetworkOut'|'ALBTargetGroupRequestCount',
     *     ResourceLabel?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
