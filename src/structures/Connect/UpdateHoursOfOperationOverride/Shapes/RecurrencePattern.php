<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateHoursOfOperationOverride\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'WEEKLY'|'MONTHLY'|'YEARLY' $Frequency
 * @property int<1, 6> $Interval
 * @property list<int<1, 12>>|null $ByMonth
 * @property list<int<-1, 31>>|null $ByMonthDay
 * @property list<int<-1, 4>>|null $ByWeekdayOccurrence
 */
class RecurrencePattern extends Shape
{
    /**
     * @param array{
     *     Frequency: 'WEEKLY'|'MONTHLY'|'YEARLY',
     *     Interval: int<1, 6>,
     *     ByMonth?: list<int<1, 12>>|null,
     *     ByMonthDay?: list<int<-1, 31>>|null,
     *     ByWeekdayOccurrence?: list<int<-1, 4>>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
