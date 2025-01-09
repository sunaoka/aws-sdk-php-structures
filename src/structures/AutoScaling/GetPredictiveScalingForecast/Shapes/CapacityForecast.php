<?php

namespace Sunaoka\Aws\Structures\AutoScaling\GetPredictiveScalingForecast\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<\Aws\Api\DateTimeResult> $Timestamps
 * @property list<double> $Values
 */
class CapacityForecast extends Shape
{
    /**
     * @param array{
     *     Timestamps: list<\Aws\Api\DateTimeResult>,
     *     Values: list<double>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
