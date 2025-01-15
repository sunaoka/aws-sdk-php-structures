<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListAnomaliesForInsight\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TimestampMetricValuePair>|null $TimestampMetricValuePairList
 * @property 'Complete'|'InternalError'|'PartialData'|null $StatusCode
 */
class CloudWatchMetricsDataSummary extends Shape
{
    /**
     * @param array{
     *     TimestampMetricValuePairList?: list<TimestampMetricValuePair>|null,
     *     StatusCode?: 'Complete'|'InternalError'|'PartialData'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
