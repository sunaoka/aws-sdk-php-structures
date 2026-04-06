<?php

namespace Sunaoka\Aws\Structures\ApplicationAutoScaling\GetPredictiveScalingForecast\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $TargetValue
 * @property PredictiveScalingPredefinedMetricPairSpecification|null $PredefinedMetricPairSpecification
 * @property PredictiveScalingPredefinedScalingMetricSpecification|null $PredefinedScalingMetricSpecification
 * @property PredictiveScalingPredefinedLoadMetricSpecification|null $PredefinedLoadMetricSpecification
 * @property PredictiveScalingCustomizedMetricSpecification|null $CustomizedScalingMetricSpecification
 * @property PredictiveScalingCustomizedMetricSpecification|null $CustomizedLoadMetricSpecification
 * @property PredictiveScalingCustomizedMetricSpecification|null $CustomizedCapacityMetricSpecification
 */
class PredictiveScalingMetricSpecification extends Shape
{
    /**
     * @param array{
     *     TargetValue: double,
     *     PredefinedMetricPairSpecification?: PredictiveScalingPredefinedMetricPairSpecification|null,
     *     PredefinedScalingMetricSpecification?: PredictiveScalingPredefinedScalingMetricSpecification|null,
     *     PredefinedLoadMetricSpecification?: PredictiveScalingPredefinedLoadMetricSpecification|null,
     *     CustomizedScalingMetricSpecification?: PredictiveScalingCustomizedMetricSpecification|null,
     *     CustomizedLoadMetricSpecification?: PredictiveScalingCustomizedMetricSpecification|null,
     *     CustomizedCapacityMetricSpecification?: PredictiveScalingCustomizedMetricSpecification|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
