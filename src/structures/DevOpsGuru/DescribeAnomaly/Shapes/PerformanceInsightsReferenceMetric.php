<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\DescribeAnomaly\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PerformanceInsightsMetricQuery|null $MetricQuery
 */
class PerformanceInsightsReferenceMetric extends Shape
{
    /**
     * @param array{MetricQuery?: PerformanceInsightsMetricQuery|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
