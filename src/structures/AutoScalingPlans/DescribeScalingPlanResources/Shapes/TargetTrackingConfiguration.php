<?php

namespace Sunaoka\Aws\Structures\AutoScalingPlans\DescribeScalingPlanResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PredefinedScalingMetricSpecification $PredefinedScalingMetricSpecification
 * @property CustomizedScalingMetricSpecification $CustomizedScalingMetricSpecification
 * @property double $TargetValue
 * @property bool $DisableScaleIn
 * @property int $ScaleOutCooldown
 * @property int $ScaleInCooldown
 * @property int $EstimatedInstanceWarmup
 */
class TargetTrackingConfiguration extends Shape
{
    /**
     * @param array{
     *     PredefinedScalingMetricSpecification?: PredefinedScalingMetricSpecification,
     *     CustomizedScalingMetricSpecification?: CustomizedScalingMetricSpecification,
     *     TargetValue: double,
     *     DisableScaleIn?: bool,
     *     ScaleOutCooldown?: int,
     *     ScaleInCooldown?: int,
     *     EstimatedInstanceWarmup?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
