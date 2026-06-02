<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 4294967295> $Duration
 * @property int<0, 4294967295> $Distance
 */
class RouteRentalOverviewSummary extends Shape
{
    /**
     * @param array{
     *     Duration: int<0, 4294967295>,
     *     Distance: int<0, 4294967295>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
