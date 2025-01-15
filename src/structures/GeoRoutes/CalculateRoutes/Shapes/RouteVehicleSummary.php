<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RouteVehicleOverviewSummary|null $Overview
 * @property RouteVehicleTravelOnlySummary|null $TravelOnly
 */
class RouteVehicleSummary extends Shape
{
    /**
     * @param array{
     *     Overview?: RouteVehicleOverviewSummary|null,
     *     TravelOnly?: RouteVehicleTravelOnlySummary|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
