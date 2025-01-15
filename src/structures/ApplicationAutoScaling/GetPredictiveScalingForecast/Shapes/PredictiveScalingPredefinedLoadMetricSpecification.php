<?php

namespace Sunaoka\Aws\Structures\ApplicationAutoScaling\GetPredictiveScalingForecast\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PredefinedMetricType
 * @property string|null $ResourceLabel
 */
class PredictiveScalingPredefinedLoadMetricSpecification extends Shape
{
    /**
     * @param array{
     *     PredefinedMetricType: string,
     *     ResourceLabel?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
