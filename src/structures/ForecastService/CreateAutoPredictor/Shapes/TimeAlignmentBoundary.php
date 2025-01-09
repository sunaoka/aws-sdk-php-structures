<?php

namespace Sunaoka\Aws\Structures\ForecastService\CreateAutoPredictor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'JANUARY'|'FEBRUARY'|'MARCH'|'APRIL'|'MAY'|'JUNE'|'JULY'|'AUGUST'|'SEPTEMBER'|'OCTOBER'|'NOVEMBER'|'DECEMBER' $Month
 * @property int $DayOfMonth
 * @property 'MONDAY'|'TUESDAY'|'WEDNESDAY'|'THURSDAY'|'FRIDAY'|'SATURDAY'|'SUNDAY' $DayOfWeek
 * @property int $Hour
 */
class TimeAlignmentBoundary extends Shape
{
    /**
     * @param array{
     *     Month?: 'JANUARY'|'FEBRUARY'|'MARCH'|'APRIL'|'MAY'|'JUNE'|'JULY'|'AUGUST'|'SEPTEMBER'|'OCTOBER'|'NOVEMBER'|'DECEMBER',
     *     DayOfMonth?: int,
     *     DayOfWeek?: 'MONDAY'|'TUESDAY'|'WEDNESDAY'|'THURSDAY'|'FRIDAY'|'SATURDAY'|'SUNDAY',
     *     Hour?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
