<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max>|null $AxleCount
 * @property int<1, 255>|null $TrailerCount
 */
class RouteTrailerOptions extends Shape
{
    /**
     * @param array{
     *     AxleCount?: int<1, max>|null,
     *     TrailerCount?: int<1, 255>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
