<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RouteTaxiOverviewSummary|null $Overview
 * @property RouteTaxiTravelOnlySummary|null $TravelOnly
 */
class RouteTaxiSummary extends Shape
{
    /**
     * @param array{
     *     Overview?: RouteTaxiOverviewSummary|null,
     *     TravelOnly?: RouteTaxiTravelOnlySummary|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
