<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribePolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $MetricIntervalLowerBound
 * @property double|null $MetricIntervalUpperBound
 * @property int $ScalingAdjustment
 */
class StepAdjustment extends Shape
{
    /**
     * @param array{
     *     MetricIntervalLowerBound?: double|null,
     *     MetricIntervalUpperBound?: double|null,
     *     ScalingAdjustment: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
