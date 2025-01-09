<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\ListAnomalyGroupSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EvaluationStartDate
 * @property int $TotalCount
 * @property list<ItemizedMetricStats> $ItemizedMetricStatsList
 */
class AnomalyGroupStatistics extends Shape
{
    /**
     * @param array{
     *     EvaluationStartDate?: string,
     *     TotalCount?: int,
     *     ItemizedMetricStatsList?: list<ItemizedMetricStats>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
