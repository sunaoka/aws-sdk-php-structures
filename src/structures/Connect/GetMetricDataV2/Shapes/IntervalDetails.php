<?php

namespace Sunaoka\Aws\Structures\Connect\GetMetricDataV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TimeZone
 * @property 'FIFTEEN_MIN'|'THIRTY_MIN'|'HOUR'|'DAY'|'WEEK'|'TOTAL' $IntervalPeriod
 */
class IntervalDetails extends Shape
{
    /**
     * @param array{
     *     TimeZone?: string,
     *     IntervalPeriod?: 'FIFTEEN_MIN'|'THIRTY_MIN'|'HOUR'|'DAY'|'WEEK'|'TOTAL'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
