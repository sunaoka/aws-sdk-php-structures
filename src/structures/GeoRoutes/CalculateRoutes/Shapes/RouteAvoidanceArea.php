<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RouteAvoidanceAreaGeometry>|null $Except
 * @property RouteAvoidanceAreaGeometry $Geometry
 */
class RouteAvoidanceArea extends Shape
{
    /**
     * @param array{
     *     Except?: list<RouteAvoidanceAreaGeometry>|null,
     *     Geometry: RouteAvoidanceAreaGeometry
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
