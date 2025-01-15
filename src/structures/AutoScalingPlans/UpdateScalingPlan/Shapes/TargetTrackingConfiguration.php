<?php

namespace Sunaoka\Aws\Structures\AutoScalingPlans\UpdateScalingPlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PredefinedScalingMetricSpecification|null $PredefinedScalingMetricSpecification
 * @property CustomizedScalingMetricSpecification|null $CustomizedScalingMetricSpecification
 * @property double $TargetValue
 * @property bool|null $DisableScaleIn
 * @property int|null $ScaleOutCooldown
 * @property int|null $ScaleInCooldown
 * @property int|null $EstimatedInstanceWarmup
 */
class TargetTrackingConfiguration extends Shape
{
    /**
     * @param array{
     *     PredefinedScalingMetricSpecification?: PredefinedScalingMetricSpecification|null,
     *     CustomizedScalingMetricSpecification?: CustomizedScalingMetricSpecification|null,
     *     TargetValue: double,
     *     DisableScaleIn?: bool|null,
     *     ScaleOutCooldown?: int|null,
     *     ScaleInCooldown?: int|null,
     *     EstimatedInstanceWarmup?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
