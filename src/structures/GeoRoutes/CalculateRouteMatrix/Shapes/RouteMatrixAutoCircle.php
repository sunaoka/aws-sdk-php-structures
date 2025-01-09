<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRouteMatrix\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Margin
 * @property int $MaxRadius
 */
class RouteMatrixAutoCircle extends Shape
{
    /**
     * @param array{
     *     Margin?: int,
     *     MaxRadius?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
