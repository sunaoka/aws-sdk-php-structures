<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListUtteranceMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AnalyticsBinKey>|null $binKeys
 * @property list<AnalyticsUtteranceGroupByKey>|null $groupByKeys
 * @property list<AnalyticsUtteranceMetricResult>|null $metricsResults
 * @property list<AnalyticsUtteranceAttributeResult>|null $attributeResults
 */
class AnalyticsUtteranceResult extends Shape
{
    /**
     * @param array{
     *     binKeys?: list<AnalyticsBinKey>|null,
     *     groupByKeys?: list<AnalyticsUtteranceGroupByKey>|null,
     *     metricsResults?: list<AnalyticsUtteranceMetricResult>|null,
     *     attributeResults?: list<AnalyticsUtteranceAttributeResult>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
