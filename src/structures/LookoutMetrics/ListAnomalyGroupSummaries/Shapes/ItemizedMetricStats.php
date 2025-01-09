<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\ListAnomalyGroupSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MetricName
 * @property int $OccurrenceCount
 */
class ItemizedMetricStats extends Shape
{
    /**
     * @param array{
     *     MetricName?: string,
     *     OccurrenceCount?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
