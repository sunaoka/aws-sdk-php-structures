<?php

namespace Sunaoka\Aws\Structures\CloudWatch\DeleteAnomalyDetector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<MetricDataQuery> $MetricDataQueries
 */
class MetricMathAnomalyDetector extends Shape
{
    /**
     * @param array{MetricDataQueries?: list<MetricDataQuery>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
