<?php

namespace Sunaoka\Aws\Structures\ApplicationAutoScaling\PutScalingPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ChangeInCapacity'|'PercentChangeInCapacity'|'ExactCapacity' $AdjustmentType
 * @property list<StepAdjustment> $StepAdjustments
 * @property int $MinAdjustmentMagnitude
 * @property int $Cooldown
 * @property 'Average'|'Minimum'|'Maximum' $MetricAggregationType
 */
class StepScalingPolicyConfiguration extends Shape
{
    /**
     * @param array{
     *     AdjustmentType?: 'ChangeInCapacity'|'PercentChangeInCapacity'|'ExactCapacity',
     *     StepAdjustments?: list<StepAdjustment>,
     *     MinAdjustmentMagnitude?: int,
     *     Cooldown?: int,
     *     MetricAggregationType?: 'Average'|'Minimum'|'Maximum'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
