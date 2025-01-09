<?php

namespace Sunaoka\Aws\Structures\ApplicationAutoScaling\DescribeScalingPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $TargetValue
 * @property PredictiveScalingPredefinedMetricPairSpecification $PredefinedMetricPairSpecification
 * @property PredictiveScalingPredefinedScalingMetricSpecification $PredefinedScalingMetricSpecification
 * @property PredictiveScalingPredefinedLoadMetricSpecification $PredefinedLoadMetricSpecification
 * @property PredictiveScalingCustomizedMetricSpecification $CustomizedScalingMetricSpecification
 * @property PredictiveScalingCustomizedMetricSpecification $CustomizedLoadMetricSpecification
 * @property PredictiveScalingCustomizedMetricSpecification $CustomizedCapacityMetricSpecification
 */
class PredictiveScalingMetricSpecification extends Shape
{
    /**
     * @param array{
     *     TargetValue: double,
     *     PredefinedMetricPairSpecification?: PredictiveScalingPredefinedMetricPairSpecification,
     *     PredefinedScalingMetricSpecification?: PredictiveScalingPredefinedScalingMetricSpecification,
     *     PredefinedLoadMetricSpecification?: PredictiveScalingPredefinedLoadMetricSpecification,
     *     CustomizedScalingMetricSpecification?: PredictiveScalingCustomizedMetricSpecification,
     *     CustomizedLoadMetricSpecification?: PredictiveScalingCustomizedMetricSpecification,
     *     CustomizedCapacityMetricSpecification?: PredictiveScalingCustomizedMetricSpecification
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
