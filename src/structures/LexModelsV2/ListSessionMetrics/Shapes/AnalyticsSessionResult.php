<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListSessionMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AnalyticsBinKey>|null $binKeys
 * @property list<AnalyticsSessionGroupByKey>|null $groupByKeys
 * @property list<AnalyticsSessionMetricResult>|null $metricsResults
 */
class AnalyticsSessionResult extends Shape
{
    /**
     * @param array{
     *     binKeys?: list<AnalyticsBinKey>|null,
     *     groupByKeys?: list<AnalyticsSessionGroupByKey>|null,
     *     metricsResults?: list<AnalyticsSessionMetricResult>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
