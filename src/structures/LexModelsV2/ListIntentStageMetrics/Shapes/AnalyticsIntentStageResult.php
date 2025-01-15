<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListIntentStageMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AnalyticsBinKey>|null $binKeys
 * @property list<AnalyticsIntentStageGroupByKey>|null $groupByKeys
 * @property list<AnalyticsIntentStageMetricResult>|null $metricsResults
 */
class AnalyticsIntentStageResult extends Shape
{
    /**
     * @param array{
     *     binKeys?: list<AnalyticsBinKey>|null,
     *     groupByKeys?: list<AnalyticsIntentStageGroupByKey>|null,
     *     metricsResults?: list<AnalyticsIntentStageMetricResult>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
