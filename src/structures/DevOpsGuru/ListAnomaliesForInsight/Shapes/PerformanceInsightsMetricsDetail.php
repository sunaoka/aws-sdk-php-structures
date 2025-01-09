<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListAnomaliesForInsight\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MetricDisplayName
 * @property string $Unit
 * @property PerformanceInsightsMetricQuery $MetricQuery
 * @property list<PerformanceInsightsReferenceData> $ReferenceData
 * @property list<PerformanceInsightsStat> $StatsAtAnomaly
 * @property list<PerformanceInsightsStat> $StatsAtBaseline
 */
class PerformanceInsightsMetricsDetail extends Shape
{
    /**
     * @param array{
     *     MetricDisplayName?: string,
     *     Unit?: string,
     *     MetricQuery?: PerformanceInsightsMetricQuery,
     *     ReferenceData?: list<PerformanceInsightsReferenceData>,
     *     StatsAtAnomaly?: list<PerformanceInsightsStat>,
     *     StatsAtBaseline?: list<PerformanceInsightsStat>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
