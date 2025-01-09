<?php

namespace Sunaoka\Aws\Structures\AutoScaling\PutScalingPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AutoScalingGroupName
 * @property string $PolicyName
 * @property string $PolicyType
 * @property string $AdjustmentType
 * @property int $MinAdjustmentStep
 * @property int $MinAdjustmentMagnitude
 * @property int $ScalingAdjustment
 * @property int $Cooldown
 * @property string $MetricAggregationType
 * @property list<Shapes\StepAdjustment> $StepAdjustments
 * @property int $EstimatedInstanceWarmup
 * @property Shapes\TargetTrackingConfiguration $TargetTrackingConfiguration
 * @property bool $Enabled
 * @property Shapes\PredictiveScalingConfiguration $PredictiveScalingConfiguration
 */
class PutScalingPolicyRequest extends Request
{
    /**
     * @param array{
     *     AutoScalingGroupName: string,
     *     PolicyName: string,
     *     PolicyType?: string,
     *     AdjustmentType?: string,
     *     MinAdjustmentStep?: int,
     *     MinAdjustmentMagnitude?: int,
     *     ScalingAdjustment?: int,
     *     Cooldown?: int,
     *     MetricAggregationType?: string,
     *     StepAdjustments?: list<Shapes\StepAdjustment>,
     *     EstimatedInstanceWarmup?: int,
     *     TargetTrackingConfiguration?: Shapes\TargetTrackingConfiguration,
     *     Enabled?: bool,
     *     PredictiveScalingConfiguration?: Shapes\PredictiveScalingConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
