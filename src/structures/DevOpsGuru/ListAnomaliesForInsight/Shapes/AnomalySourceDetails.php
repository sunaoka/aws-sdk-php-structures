<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListAnomaliesForInsight\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CloudWatchMetricsDetail>|null $CloudWatchMetrics
 * @property list<PerformanceInsightsMetricsDetail>|null $PerformanceInsightsMetrics
 */
class AnomalySourceDetails extends Shape
{
    /**
     * @param array{
     *     CloudWatchMetrics?: list<CloudWatchMetricsDetail>|null,
     *     PerformanceInsightsMetrics?: list<PerformanceInsightsMetricsDetail>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
