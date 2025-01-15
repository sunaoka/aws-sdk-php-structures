<?php

namespace Sunaoka\Aws\Structures\AutoScaling\GetPredictiveScalingForecast\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $TargetValue
 * @property PredictiveScalingPredefinedMetricPair|null $PredefinedMetricPairSpecification
 * @property PredictiveScalingPredefinedScalingMetric|null $PredefinedScalingMetricSpecification
 * @property PredictiveScalingPredefinedLoadMetric|null $PredefinedLoadMetricSpecification
 * @property PredictiveScalingCustomizedScalingMetric|null $CustomizedScalingMetricSpecification
 * @property PredictiveScalingCustomizedLoadMetric|null $CustomizedLoadMetricSpecification
 * @property PredictiveScalingCustomizedCapacityMetric|null $CustomizedCapacityMetricSpecification
 */
class PredictiveScalingMetricSpecification extends Shape
{
    /**
     * @param array{
     *     TargetValue: double,
     *     PredefinedMetricPairSpecification?: PredictiveScalingPredefinedMetricPair|null,
     *     PredefinedScalingMetricSpecification?: PredictiveScalingPredefinedScalingMetric|null,
     *     PredefinedLoadMetricSpecification?: PredictiveScalingPredefinedLoadMetric|null,
     *     CustomizedScalingMetricSpecification?: PredictiveScalingCustomizedScalingMetric|null,
     *     CustomizedLoadMetricSpecification?: PredictiveScalingCustomizedLoadMetric|null,
     *     CustomizedCapacityMetricSpecification?: PredictiveScalingCustomizedCapacityMetric|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
