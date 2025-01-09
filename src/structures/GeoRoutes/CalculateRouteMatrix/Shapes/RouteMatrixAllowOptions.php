<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRouteMatrix\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Hot
 * @property bool $Hov
 */
class RouteMatrixAllowOptions extends Shape
{
    /**
     * @param array{
     *     Hot?: bool,
     *     Hov?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
