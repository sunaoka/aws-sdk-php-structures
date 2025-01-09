<?php

namespace Sunaoka\Aws\Structures\ApplicationAutoScaling\PutScalingPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $TargetValue
 * @property PredefinedMetricSpecification $PredefinedMetricSpecification
 * @property CustomizedMetricSpecification $CustomizedMetricSpecification
 * @property int $ScaleOutCooldown
 * @property int $ScaleInCooldown
 * @property bool $DisableScaleIn
 */
class TargetTrackingScalingPolicyConfiguration extends Shape
{
    /**
     * @param array{
     *     TargetValue: double,
     *     PredefinedMetricSpecification?: PredefinedMetricSpecification,
     *     CustomizedMetricSpecification?: CustomizedMetricSpecification,
     *     ScaleOutCooldown?: int,
     *     ScaleInCooldown?: int,
     *     DisableScaleIn?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
