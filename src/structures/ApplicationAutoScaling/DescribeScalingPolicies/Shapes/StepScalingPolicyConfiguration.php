<?php

namespace Sunaoka\Aws\Structures\ApplicationAutoScaling\DescribeScalingPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ChangeInCapacity'|'PercentChangeInCapacity'|'ExactCapacity'|null $AdjustmentType
 * @property list<StepAdjustment>|null $StepAdjustments
 * @property int|null $MinAdjustmentMagnitude
 * @property int|null $Cooldown
 * @property 'Average'|'Minimum'|'Maximum'|null $MetricAggregationType
 */
class StepScalingPolicyConfiguration extends Shape
{
    /**
     * @param array{
     *     AdjustmentType?: 'ChangeInCapacity'|'PercentChangeInCapacity'|'ExactCapacity'|null,
     *     StepAdjustments?: list<StepAdjustment>|null,
     *     MinAdjustmentMagnitude?: int|null,
     *     Cooldown?: int|null,
     *     MetricAggregationType?: 'Average'|'Minimum'|'Maximum'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
