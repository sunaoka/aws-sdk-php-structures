<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\DescribeAnomaly\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CloudWatchMetricsDetail> $CloudWatchMetrics
 * @property list<PerformanceInsightsMetricsDetail> $PerformanceInsightsMetrics
 */
class AnomalySourceDetails extends Shape
{
    /**
     * @param array{
     *     CloudWatchMetrics?: list<CloudWatchMetricsDetail>,
     *     PerformanceInsightsMetrics?: list<PerformanceInsightsMetricsDetail>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
