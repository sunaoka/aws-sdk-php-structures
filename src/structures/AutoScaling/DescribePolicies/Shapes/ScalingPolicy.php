<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribePolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AutoScalingGroupName
 * @property string $PolicyName
 * @property string $PolicyARN
 * @property string $PolicyType
 * @property string $AdjustmentType
 * @property int $MinAdjustmentStep
 * @property int $MinAdjustmentMagnitude
 * @property int $ScalingAdjustment
 * @property int $Cooldown
 * @property list<StepAdjustment> $StepAdjustments
 * @property string $MetricAggregationType
 * @property int $EstimatedInstanceWarmup
 * @property list<Alarm> $Alarms
 * @property TargetTrackingConfiguration $TargetTrackingConfiguration
 * @property bool $Enabled
 * @property PredictiveScalingConfiguration $PredictiveScalingConfiguration
 */
class ScalingPolicy extends Shape
{
    /**
     * @param array{
     *     AutoScalingGroupName?: string,
     *     PolicyName?: string,
     *     PolicyARN?: string,
     *     PolicyType?: string,
     *     AdjustmentType?: string,
     *     MinAdjustmentStep?: int,
     *     MinAdjustmentMagnitude?: int,
     *     ScalingAdjustment?: int,
     *     Cooldown?: int,
     *     StepAdjustments?: list<StepAdjustment>,
     *     MetricAggregationType?: string,
     *     EstimatedInstanceWarmup?: int,
     *     Alarms?: list<Alarm>,
     *     TargetTrackingConfiguration?: TargetTrackingConfiguration,
     *     Enabled?: bool,
     *     PredictiveScalingConfiguration?: PredictiveScalingConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
