<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RouteAvoidanceAreaGeometry> $Except
 * @property RouteAvoidanceAreaGeometry $Geometry
 */
class RouteAvoidanceArea extends Shape
{
    /**
     * @param array{
     *     Except?: list<RouteAvoidanceAreaGeometry>,
     *     Geometry: RouteAvoidanceAreaGeometry
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
