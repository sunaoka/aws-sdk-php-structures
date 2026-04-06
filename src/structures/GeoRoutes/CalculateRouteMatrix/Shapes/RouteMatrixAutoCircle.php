<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRouteMatrix\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 200000>|null $Margin
 * @property int<0, 200000>|null $MaxRadius
 */
class RouteMatrixAutoCircle extends Shape
{
    /**
     * @param array{
     *     Margin?: int<0, 200000>|null,
     *     MaxRadius?: int<0, 200000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
