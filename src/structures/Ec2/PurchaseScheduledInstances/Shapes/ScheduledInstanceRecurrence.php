<?php

namespace Sunaoka\Aws\Structures\Ec2\PurchaseScheduledInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Frequency
 * @property int|null $Interval
 * @property list<int>|null $OccurrenceDaySet
 * @property bool|null $OccurrenceRelativeToEnd
 * @property string|null $OccurrenceUnit
 */
class ScheduledInstanceRecurrence extends Shape
{
    /**
     * @param array{
     *     Frequency?: string|null,
     *     Interval?: int|null,
     *     OccurrenceDaySet?: list<int>|null,
     *     OccurrenceRelativeToEnd?: bool|null,
     *     OccurrenceUnit?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
