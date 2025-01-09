<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListSessionMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AnalyticsBinKey> $binKeys
 * @property list<AnalyticsSessionGroupByKey> $groupByKeys
 * @property list<AnalyticsSessionMetricResult> $metricsResults
 */
class AnalyticsSessionResult extends Shape
{
    /**
     * @param array{
     *     binKeys?: list<AnalyticsBinKey>,
     *     groupByKeys?: list<AnalyticsSessionGroupByKey>,
     *     metricsResults?: list<AnalyticsSessionMetricResult>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
