<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRouteMatrix\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Hot
 * @property bool|null $Hov
 */
class RouteMatrixAllowOptions extends Shape
{
    /**
     * @param array{
     *     Hot?: bool|null,
     *     Hov?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
