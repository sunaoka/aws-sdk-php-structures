<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRouteMatrix\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 200000> $Margin
 * @property int<0, 200000> $MaxRadius
 */
class RouteMatrixAutoCircle extends Shape
{
    /**
     * @param array{
     *     Margin?: int<0, 200000>,
     *     MaxRadius?: int<0, 200000>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
