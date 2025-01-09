<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListAnomaliesForInsight\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TimestampMetricValuePair> $TimestampMetricValuePairList
 * @property 'Complete'|'InternalError'|'PartialData' $StatusCode
 */
class CloudWatchMetricsDataSummary extends Shape
{
    /**
     * @param array{
     *     TimestampMetricValuePairList?: list<TimestampMetricValuePair>,
     *     StatusCode?: 'Complete'|'InternalError'|'PartialData'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
