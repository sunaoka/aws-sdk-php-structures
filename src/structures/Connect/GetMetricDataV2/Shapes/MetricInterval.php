<?php

namespace Sunaoka\Aws\Structures\Connect\GetMetricDataV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FIFTEEN_MIN'|'THIRTY_MIN'|'HOUR'|'DAY'|'WEEK'|'TOTAL'|null $Interval
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 */
class MetricInterval extends Shape
{
    /**
     * @param array{
     *     Interval?: 'FIFTEEN_MIN'|'THIRTY_MIN'|'HOUR'|'DAY'|'WEEK'|'TOTAL'|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
