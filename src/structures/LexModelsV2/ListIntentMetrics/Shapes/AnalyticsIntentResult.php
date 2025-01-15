<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListIntentMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AnalyticsBinKey>|null $binKeys
 * @property list<AnalyticsIntentGroupByKey>|null $groupByKeys
 * @property list<AnalyticsIntentMetricResult>|null $metricsResults
 */
class AnalyticsIntentResult extends Shape
{
    /**
     * @param array{
     *     binKeys?: list<AnalyticsBinKey>|null,
     *     groupByKeys?: list<AnalyticsIntentGroupByKey>|null,
     *     metricsResults?: list<AnalyticsIntentMetricResult>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
