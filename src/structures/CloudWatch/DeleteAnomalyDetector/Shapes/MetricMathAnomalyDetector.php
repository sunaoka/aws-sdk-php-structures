<?php

namespace Sunaoka\Aws\Structures\CloudWatch\DeleteAnomalyDetector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<MetricDataQuery>|null $MetricDataQueries
 */
class MetricMathAnomalyDetector extends Shape
{
    /**
     * @param array{MetricDataQueries?: list<MetricDataQuery>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
