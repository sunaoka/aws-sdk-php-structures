<?php

namespace Sunaoka\Aws\Structures\AutoScaling\PutScalingPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AutoScalingGroupName
 * @property string $PolicyName
 * @property string|null $PolicyType
 * @property string|null $AdjustmentType
 * @property int|null $MinAdjustmentStep
 * @property int|null $MinAdjustmentMagnitude
 * @property int|null $ScalingAdjustment
 * @property int|null $Cooldown
 * @property string|null $MetricAggregationType
 * @property list<Shapes\StepAdjustment>|null $StepAdjustments
 * @property int|null $EstimatedInstanceWarmup
 * @property Shapes\TargetTrackingConfiguration|null $TargetTrackingConfiguration
 * @property bool|null $Enabled
 * @property Shapes\PredictiveScalingConfiguration|null $PredictiveScalingConfiguration
 */
class PutScalingPolicyRequest extends Request
{
    /**
     * @param array{
     *     AutoScalingGroupName: string,
     *     PolicyName: string,
     *     PolicyType?: string|null,
     *     AdjustmentType?: string|null,
     *     MinAdjustmentStep?: int|null,
     *     MinAdjustmentMagnitude?: int|null,
     *     ScalingAdjustment?: int|null,
     *     Cooldown?: int|null,
     *     MetricAggregationType?: string|null,
     *     StepAdjustments?: list<Shapes\StepAdjustment>|null,
     *     EstimatedInstanceWarmup?: int|null,
     *     TargetTrackingConfiguration?: Shapes\TargetTrackingConfiguration|null,
     *     Enabled?: bool|null,
     *     PredictiveScalingConfiguration?: Shapes\PredictiveScalingConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
