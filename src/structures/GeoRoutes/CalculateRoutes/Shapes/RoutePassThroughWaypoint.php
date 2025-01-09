<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $GeometryOffset
 * @property RoutePassThroughPlace $Place
 */
class RoutePassThroughWaypoint extends Shape
{
    /**
     * @param array{
     *     GeometryOffset?: int,
     *     Place: RoutePassThroughPlace
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
