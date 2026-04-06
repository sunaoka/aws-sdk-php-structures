<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RoutePedestrianOverviewSummary|null $Overview
 * @property RoutePedestrianTravelOnlySummary|null $TravelOnly
 */
class RoutePedestrianSummary extends Shape
{
    /**
     * @param array{
     *     Overview?: RoutePedestrianOverviewSummary|null,
     *     TravelOnly?: RoutePedestrianTravelOnlySummary|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
