<?php

namespace Sunaoka\Aws\Structures\Connect\GetMetricDataV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TimeZone
 * @property 'FIFTEEN_MIN'|'THIRTY_MIN'|'HOUR'|'DAY'|'WEEK'|'TOTAL'|null $IntervalPeriod
 */
class IntervalDetails extends Shape
{
    /**
     * @param array{
     *     TimeZone?: string|null,
     *     IntervalPeriod?: 'FIFTEEN_MIN'|'THIRTY_MIN'|'HOUR'|'DAY'|'WEEK'|'TOTAL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
