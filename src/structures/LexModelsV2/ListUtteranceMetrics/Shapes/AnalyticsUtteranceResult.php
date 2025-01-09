<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListUtteranceMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AnalyticsBinKey> $binKeys
 * @property list<AnalyticsUtteranceGroupByKey> $groupByKeys
 * @property list<AnalyticsUtteranceMetricResult> $metricsResults
 * @property list<AnalyticsUtteranceAttributeResult> $attributeResults
 */
class AnalyticsUtteranceResult extends Shape
{
    /**
     * @param array{
     *     binKeys?: list<AnalyticsBinKey>,
     *     groupByKeys?: list<AnalyticsUtteranceGroupByKey>,
     *     metricsResults?: list<AnalyticsUtteranceMetricResult>,
     *     attributeResults?: list<AnalyticsUtteranceAttributeResult>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
