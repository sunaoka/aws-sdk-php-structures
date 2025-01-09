<?php

namespace Sunaoka\Aws\Structures\ApplicationAutoScaling\GetPredictiveScalingForecast\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<\Aws\Api\DateTimeResult> $Timestamps
 * @property list<double> $Values
 * @property PredictiveScalingMetricSpecification $MetricSpecification
 */
class LoadForecast extends Shape
{
    /**
     * @param array{
     *     Timestamps: list<\Aws\Api\DateTimeResult>,
     *     Values: list<double>,
     *     MetricSpecification: PredictiveScalingMetricSpecification
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
