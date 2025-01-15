<?php

namespace Sunaoka\Aws\Structures\ForecastService\CreateAutoPredictor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'JANUARY'|'FEBRUARY'|'MARCH'|'APRIL'|'MAY'|'JUNE'|'JULY'|'AUGUST'|'SEPTEMBER'|'OCTOBER'|'NOVEMBER'|'DECEMBER'|null $Month
 * @property int<1, 28>|null $DayOfMonth
 * @property 'MONDAY'|'TUESDAY'|'WEDNESDAY'|'THURSDAY'|'FRIDAY'|'SATURDAY'|'SUNDAY'|null $DayOfWeek
 * @property int<0, 23>|null $Hour
 */
class TimeAlignmentBoundary extends Shape
{
    /**
     * @param array{
     *     Month?: 'JANUARY'|'FEBRUARY'|'MARCH'|'APRIL'|'MAY'|'JUNE'|'JULY'|'AUGUST'|'SEPTEMBER'|'OCTOBER'|'NOVEMBER'|'DECEMBER'|null,
     *     DayOfMonth?: int<1, 28>|null,
     *     DayOfWeek?: 'MONDAY'|'TUESDAY'|'WEDNESDAY'|'THURSDAY'|'FRIDAY'|'SATURDAY'|'SUNDAY'|null,
     *     Hour?: int<0, 23>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
