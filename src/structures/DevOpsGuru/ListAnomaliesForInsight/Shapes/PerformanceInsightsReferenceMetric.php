<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListAnomaliesForInsight\Shapes;

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
