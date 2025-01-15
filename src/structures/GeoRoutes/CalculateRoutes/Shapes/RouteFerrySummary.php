<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RouteFerryOverviewSummary|null $Overview
 * @property RouteFerryTravelOnlySummary|null $TravelOnly
 */
class RouteFerrySummary extends Shape
{
    /**
     * @param array{
     *     Overview?: RouteFerryOverviewSummary|null,
     *     TravelOnly?: RouteFerryTravelOnlySummary|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
