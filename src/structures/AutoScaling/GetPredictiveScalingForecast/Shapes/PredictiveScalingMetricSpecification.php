<?php

namespace Sunaoka\Aws\Structures\AutoScaling\GetPredictiveScalingForecast\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $TargetValue
 * @property PredictiveScalingPredefinedMetricPair $PredefinedMetricPairSpecification
 * @property PredictiveScalingPredefinedScalingMetric $PredefinedScalingMetricSpecification
 * @property PredictiveScalingPredefinedLoadMetric $PredefinedLoadMetricSpecification
 * @property PredictiveScalingCustomizedScalingMetric $CustomizedScalingMetricSpecification
 * @property PredictiveScalingCustomizedLoadMetric $CustomizedLoadMetricSpecification
 * @property PredictiveScalingCustomizedCapacityMetric $CustomizedCapacityMetricSpecification
 */
class PredictiveScalingMetricSpecification extends Shape
{
    /**
     * @param array{
     *     TargetValue: double,
     *     PredefinedMetricPairSpecification?: PredictiveScalingPredefinedMetricPair,
     *     PredefinedScalingMetricSpecification?: PredictiveScalingPredefinedScalingMetric,
     *     PredefinedLoadMetricSpecification?: PredictiveScalingPredefinedLoadMetric,
     *     CustomizedScalingMetricSpecification?: PredictiveScalingCustomizedScalingMetric,
     *     CustomizedLoadMetricSpecification?: PredictiveScalingCustomizedLoadMetric,
     *     CustomizedCapacityMetricSpecification?: PredictiveScalingCustomizedCapacityMetric
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
