<?php

namespace Sunaoka\Aws\Structures\ForecastService\CreateAutoPredictor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'JANUARY'|'FEBRUARY'|'MARCH'|'APRIL'|'MAY'|'JUNE'|'JULY'|'AUGUST'|'SEPTEMBER'|'OCTOBER'|'NOVEMBER'|'DECEMBER' $Month
 * @property int<1, 28> $DayOfMonth
 * @property 'MONDAY'|'TUESDAY'|'WEDNESDAY'|'THURSDAY'|'FRIDAY'|'SATURDAY'|'SUNDAY' $DayOfWeek
 * @property int<0, 23> $Hour
 */
class TimeAlignmentBoundary extends Shape
{
    /**
     * @param array{
     *     Month?: 'JANUARY'|'FEBRUARY'|'MARCH'|'APRIL'|'MAY'|'JUNE'|'JULY'|'AUGUST'|'SEPTEMBER'|'OCTOBER'|'NOVEMBER'|'DECEMBER',
     *     DayOfMonth?: int<1, 28>,
     *     DayOfWeek?: 'MONDAY'|'TUESDAY'|'WEDNESDAY'|'THURSDAY'|'FRIDAY'|'SATURDAY'|'SUNDAY',
     *     Hour?: int<0, 23>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
