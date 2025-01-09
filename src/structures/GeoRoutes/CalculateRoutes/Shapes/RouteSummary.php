<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 4294967295> $Distance
 * @property int<0, 4294967295> $Duration
 * @property RouteTollSummary $Tolls
 */
class RouteSummary extends Shape
{
    /**
     * @param array{
     *     Distance?: int<0, 4294967295>,
     *     Duration?: int<0, 4294967295>,
     *     Tolls?: RouteTollSummary
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
