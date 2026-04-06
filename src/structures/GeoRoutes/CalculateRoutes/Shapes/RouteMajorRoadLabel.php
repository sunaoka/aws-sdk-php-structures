<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LocalizedString|null $RoadName
 * @property RouteNumber|null $RouteNumber
 */
class RouteMajorRoadLabel extends Shape
{
    /**
     * @param array{
     *     RoadName?: LocalizedString|null,
     *     RouteNumber?: RouteNumber|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
