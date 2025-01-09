<?php

namespace Sunaoka\Aws\Structures\ApplicationAutoScaling\DescribeScalingPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $MetricIntervalLowerBound
 * @property double $MetricIntervalUpperBound
 * @property int $ScalingAdjustment
 */
class StepAdjustment extends Shape
{
    /**
     * @param array{
     *     MetricIntervalLowerBound?: double,
     *     MetricIntervalUpperBound?: double,
     *     ScalingAdjustment: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
