<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeScheduledInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Frequency
 * @property int $Interval
 * @property list<int> $OccurrenceDaySet
 * @property bool $OccurrenceRelativeToEnd
 * @property string $OccurrenceUnit
 */
class ScheduledInstanceRecurrence extends Shape
{
    /**
     * @param array{
     *     Frequency?: string,
     *     Interval?: int,
     *     OccurrenceDaySet?: list<int>,
     *     OccurrenceRelativeToEnd?: bool,
     *     OccurrenceUnit?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
