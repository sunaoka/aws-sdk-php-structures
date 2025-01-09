<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LocalizedString $RoadName
 * @property RouteNumber $RouteNumber
 */
class RouteMajorRoadLabel extends Shape
{
    /**
     * @param array{
     *     RoadName?: LocalizedString,
     *     RouteNumber?: RouteNumber
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
