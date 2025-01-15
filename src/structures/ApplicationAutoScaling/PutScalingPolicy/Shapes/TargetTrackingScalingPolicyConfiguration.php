<?php

namespace Sunaoka\Aws\Structures\ApplicationAutoScaling\PutScalingPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $TargetValue
 * @property PredefinedMetricSpecification|null $PredefinedMetricSpecification
 * @property CustomizedMetricSpecification|null $CustomizedMetricSpecification
 * @property int|null $ScaleOutCooldown
 * @property int|null $ScaleInCooldown
 * @property bool|null $DisableScaleIn
 */
class TargetTrackingScalingPolicyConfiguration extends Shape
{
    /**
     * @param array{
     *     TargetValue: double,
     *     PredefinedMetricSpecification?: PredefinedMetricSpecification|null,
     *     CustomizedMetricSpecification?: CustomizedMetricSpecification|null,
     *     ScaleOutCooldown?: int|null,
     *     ScaleInCooldown?: int|null,
     *     DisableScaleIn?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
