<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribePolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AutoScalingGroupName
 * @property string|null $PolicyName
 * @property string|null $PolicyARN
 * @property string|null $PolicyType
 * @property string|null $AdjustmentType
 * @property int|null $MinAdjustmentStep
 * @property int|null $MinAdjustmentMagnitude
 * @property int|null $ScalingAdjustment
 * @property int|null $Cooldown
 * @property list<StepAdjustment>|null $StepAdjustments
 * @property string|null $MetricAggregationType
 * @property int|null $EstimatedInstanceWarmup
 * @property list<Alarm>|null $Alarms
 * @property TargetTrackingConfiguration|null $TargetTrackingConfiguration
 * @property bool|null $Enabled
 * @property PredictiveScalingConfiguration|null $PredictiveScalingConfiguration
 */
class ScalingPolicy extends Shape
{
    /**
     * @param array{
     *     AutoScalingGroupName?: string|null,
     *     PolicyName?: string|null,
     *     PolicyARN?: string|null,
     *     PolicyType?: string|null,
     *     AdjustmentType?: string|null,
     *     MinAdjustmentStep?: int|null,
     *     MinAdjustmentMagnitude?: int|null,
     *     ScalingAdjustment?: int|null,
     *     Cooldown?: int|null,
     *     StepAdjustments?: list<StepAdjustment>|null,
     *     MetricAggregationType?: string|null,
     *     EstimatedInstanceWarmup?: int|null,
     *     Alarms?: list<Alarm>|null,
     *     TargetTrackingConfiguration?: TargetTrackingConfiguration|null,
     *     Enabled?: bool|null,
     *     PredictiveScalingConfiguration?: PredictiveScalingConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
