<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListAnomaliesForInsight\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MetricDisplayName
 * @property string|null $Unit
 * @property PerformanceInsightsMetricQuery|null $MetricQuery
 * @property list<PerformanceInsightsReferenceData>|null $ReferenceData
 * @property list<PerformanceInsightsStat>|null $StatsAtAnomaly
 * @property list<PerformanceInsightsStat>|null $StatsAtBaseline
 */
class PerformanceInsightsMetricsDetail extends Shape
{
    /**
     * @param array{
     *     MetricDisplayName?: string|null,
     *     Unit?: string|null,
     *     MetricQuery?: PerformanceInsightsMetricQuery|null,
     *     ReferenceData?: list<PerformanceInsightsReferenceData>|null,
     *     StatsAtAnomaly?: list<PerformanceInsightsStat>|null,
     *     StatsAtBaseline?: list<PerformanceInsightsStat>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
