<?php

namespace Sunaoka\Aws\Structures\AutoScaling\PutScalingPolicy\Shapes;

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
