<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribePolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<MetricDataQuery> $MetricDataQueries
 */
class PredictiveScalingCustomizedLoadMetric extends Shape
{
    /**
     * @param array{MetricDataQueries: list<MetricDataQuery>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
