<?php

namespace Sunaoka\Aws\Structures\AutoScaling\PutScalingPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PredefinedMetricSpecification $PredefinedMetricSpecification
 * @property CustomizedMetricSpecification $CustomizedMetricSpecification
 * @property double $TargetValue
 * @property bool $DisableScaleIn
 */
class TargetTrackingConfiguration extends Shape
{
    /**
     * @param array{
     *     PredefinedMetricSpecification?: PredefinedMetricSpecification,
     *     CustomizedMetricSpecification?: CustomizedMetricSpecification,
     *     TargetValue: double,
     *     DisableScaleIn?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
