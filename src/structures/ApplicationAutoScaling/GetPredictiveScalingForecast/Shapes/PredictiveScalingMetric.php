<?php

namespace Sunaoka\Aws\Structures\ApplicationAutoScaling\GetPredictiveScalingForecast\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PredictiveScalingMetricDimension>|null $Dimensions
 * @property string|null $MetricName
 * @property string|null $Namespace
 */
class PredictiveScalingMetric extends Shape
{
    /**
     * @param array{
     *     Dimensions?: list<PredictiveScalingMetricDimension>|null,
     *     MetricName?: string|null,
     *     Namespace?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
