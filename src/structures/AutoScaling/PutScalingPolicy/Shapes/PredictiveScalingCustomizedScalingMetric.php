<?php

namespace Sunaoka\Aws\Structures\AutoScaling\PutScalingPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<MetricDataQuery> $MetricDataQueries
 */
class PredictiveScalingCustomizedScalingMetric extends Shape
{
    /**
     * @param array{MetricDataQueries: list<MetricDataQuery>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
