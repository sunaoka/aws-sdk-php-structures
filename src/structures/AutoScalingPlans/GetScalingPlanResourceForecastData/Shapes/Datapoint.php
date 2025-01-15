<?php

namespace Sunaoka\Aws\Structures\AutoScalingPlans\GetScalingPlanResourceForecastData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $Timestamp
 * @property double|null $Value
 */
class Datapoint extends Shape
{
    /**
     * @param array{
     *     Timestamp?: \Aws\Api\DateTimeResult|null,
     *     Value?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
