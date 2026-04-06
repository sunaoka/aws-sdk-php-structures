<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 4294967295>|null $Distance
 * @property int<0, 4294967295>|null $Duration
 * @property RouteTollSummary|null $Tolls
 */
class RouteSummary extends Shape
{
    /**
     * @param array{
     *     Distance?: int<0, 4294967295>|null,
     *     Duration?: int<0, 4294967295>|null,
     *     Tolls?: RouteTollSummary|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
