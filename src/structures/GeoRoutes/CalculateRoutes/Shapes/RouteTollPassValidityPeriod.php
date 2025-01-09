<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Annual'|'Days'|'ExtendedAnnual'|'Minutes'|'Months' $Period
 * @property int $PeriodCount
 */
class RouteTollPassValidityPeriod extends Shape
{
    /**
     * @param array{
     *     Period: 'Annual'|'Days'|'ExtendedAnnual'|'Minutes'|'Months',
     *     PeriodCount?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
