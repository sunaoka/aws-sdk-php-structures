<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RouteRentalOverviewSummary|null $Overview
 * @property RouteRentalTravelOnlySummary|null $TravelOnly
 */
class RouteRentalSummary extends Shape
{
    /**
     * @param array{
     *     Overview?: RouteRentalOverviewSummary|null,
     *     TravelOnly?: RouteRentalTravelOnlySummary|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
