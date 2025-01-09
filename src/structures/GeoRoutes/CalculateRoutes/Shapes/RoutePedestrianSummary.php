<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RoutePedestrianOverviewSummary $Overview
 * @property RoutePedestrianTravelOnlySummary $TravelOnly
 */
class RoutePedestrianSummary extends Shape
{
    /**
     * @param array{
     *     Overview?: RoutePedestrianOverviewSummary,
     *     TravelOnly?: RoutePedestrianTravelOnlySummary
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
