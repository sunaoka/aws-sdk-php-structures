<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListIntentStageMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AnalyticsBinKey> $binKeys
 * @property list<AnalyticsIntentStageGroupByKey> $groupByKeys
 * @property list<AnalyticsIntentStageMetricResult> $metricsResults
 */
class AnalyticsIntentStageResult extends Shape
{
    /**
     * @param array{
     *     binKeys?: list<AnalyticsBinKey>,
     *     groupByKeys?: list<AnalyticsIntentStageGroupByKey>,
     *     metricsResults?: list<AnalyticsIntentStageMetricResult>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
