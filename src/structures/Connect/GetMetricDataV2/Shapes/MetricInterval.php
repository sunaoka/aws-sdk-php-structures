<?php

namespace Sunaoka\Aws\Structures\Connect\GetMetricDataV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FIFTEEN_MIN'|'THIRTY_MIN'|'HOUR'|'DAY'|'WEEK'|'TOTAL' $Interval
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 */
class MetricInterval extends Shape
{
    /**
     * @param array{
     *     Interval?: 'FIFTEEN_MIN'|'THIRTY_MIN'|'HOUR'|'DAY'|'WEEK'|'TOTAL',
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
