<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\ListAnomalyGroupSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EvaluationStartDate
 * @property int|null $TotalCount
 * @property list<ItemizedMetricStats>|null $ItemizedMetricStatsList
 */
class AnomalyGroupStatistics extends Shape
{
    /**
     * @param array{
     *     EvaluationStartDate?: string|null,
     *     TotalCount?: int|null,
     *     ItemizedMetricStatsList?: list<ItemizedMetricStats>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
