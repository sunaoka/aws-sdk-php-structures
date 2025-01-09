<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\ListAnomalyGroupSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StartTime
 * @property string $EndTime
 * @property string $AnomalyGroupId
 * @property double $AnomalyGroupScore
 * @property string $PrimaryMetricName
 */
class AnomalyGroupSummary extends Shape
{
    /**
     * @param array{
     *     StartTime?: string,
     *     EndTime?: string,
     *     AnomalyGroupId?: string,
     *     AnomalyGroupScore?: double,
     *     PrimaryMetricName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
