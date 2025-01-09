<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListIntentMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AnalyticsBinKey> $binKeys
 * @property list<AnalyticsIntentGroupByKey> $groupByKeys
 * @property list<AnalyticsIntentMetricResult> $metricsResults
 */
class AnalyticsIntentResult extends Shape
{
    /**
     * @param array{
     *     binKeys?: list<AnalyticsBinKey>,
     *     groupByKeys?: list<AnalyticsIntentGroupByKey>,
     *     metricsResults?: list<AnalyticsIntentMetricResult>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
