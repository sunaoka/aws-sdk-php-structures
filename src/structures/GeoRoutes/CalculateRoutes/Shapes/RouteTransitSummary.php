<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RouteTransitOverviewSummary|null $Overview
 * @property RouteTransitTravelOnlySummary|null $TravelOnly
 */
class RouteTransitSummary extends Shape
{
    /**
     * @param array{
     *     Overview?: RouteTransitOverviewSummary|null,
     *     TravelOnly?: RouteTransitTravelOnlySummary|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
