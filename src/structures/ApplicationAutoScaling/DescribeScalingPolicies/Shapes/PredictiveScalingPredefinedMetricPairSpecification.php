<?php

namespace Sunaoka\Aws\Structures\ApplicationAutoScaling\DescribeScalingPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PredefinedMetricType
 * @property string $ResourceLabel
 */
class PredictiveScalingPredefinedMetricPairSpecification extends Shape
{
    /**
     * @param array{
     *     PredefinedMetricType: string,
     *     ResourceLabel?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
