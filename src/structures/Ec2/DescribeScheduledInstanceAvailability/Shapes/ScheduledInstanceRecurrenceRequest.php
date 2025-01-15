<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeScheduledInstanceAvailability\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Frequency
 * @property int|null $Interval
 * @property list<int>|null $OccurrenceDays
 * @property bool|null $OccurrenceRelativeToEnd
 * @property string|null $OccurrenceUnit
 */
class ScheduledInstanceRecurrenceRequest extends Shape
{
    /**
     * @param array{
     *     Frequency?: string|null,
     *     Interval?: int|null,
     *     OccurrenceDays?: list<int>|null,
     *     OccurrenceRelativeToEnd?: bool|null,
     *     OccurrenceUnit?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
