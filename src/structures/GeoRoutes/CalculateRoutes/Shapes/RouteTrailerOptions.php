<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $AxleCount
 * @property int $TrailerCount
 */
class RouteTrailerOptions extends Shape
{
    /**
     * @param array{
     *     AxleCount?: int,
     *     TrailerCount?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
