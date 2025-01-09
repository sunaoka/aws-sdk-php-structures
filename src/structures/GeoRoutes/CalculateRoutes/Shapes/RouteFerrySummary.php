<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RouteFerryOverviewSummary $Overview
 * @property RouteFerryTravelOnlySummary $TravelOnly
 */
class RouteFerrySummary extends Shape
{
    /**
     * @param array{
     *     Overview?: RouteFerryOverviewSummary,
     *     TravelOnly?: RouteFerryTravelOnlySummary
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
