<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\ListAnomalyGroupSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StartTime
 * @property string|null $EndTime
 * @property string|null $AnomalyGroupId
 * @property double|null $AnomalyGroupScore
 * @property string|null $PrimaryMetricName
 */
class AnomalyGroupSummary extends Shape
{
    /**
     * @param array{
     *     StartTime?: string|null,
     *     EndTime?: string|null,
     *     AnomalyGroupId?: string|null,
     *     AnomalyGroupScore?: double|null,
     *     PrimaryMetricName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
