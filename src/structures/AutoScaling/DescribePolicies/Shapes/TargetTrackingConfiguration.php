<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribePolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PredefinedMetricSpecification|null $PredefinedMetricSpecification
 * @property CustomizedMetricSpecification|null $CustomizedMetricSpecification
 * @property double $TargetValue
 * @property bool|null $DisableScaleIn
 */
class TargetTrackingConfiguration extends Shape
{
    /**
     * @param array{
     *     PredefinedMetricSpecification?: PredefinedMetricSpecification|null,
     *     CustomizedMetricSpecification?: CustomizedMetricSpecification|null,
     *     TargetValue: double,
     *     DisableScaleIn?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
