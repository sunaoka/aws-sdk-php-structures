<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RouteVehicleOverviewSummary $Overview
 * @property RouteVehicleTravelOnlySummary $TravelOnly
 */
class RouteVehicleSummary extends Shape
{
    /**
     * @param array{
     *     Overview?: RouteVehicleOverviewSummary,
     *     TravelOnly?: RouteVehicleTravelOnlySummary
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
