<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\ListAnomalyGroupSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MetricName
 * @property int|null $OccurrenceCount
 */
class ItemizedMetricStats extends Shape
{
    /**
     * @param array{
     *     MetricName?: string|null,
     *     OccurrenceCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
