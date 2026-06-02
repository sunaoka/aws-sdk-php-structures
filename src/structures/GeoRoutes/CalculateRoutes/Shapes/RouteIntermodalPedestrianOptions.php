<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 6000>|null $MaxDistance
 * @property double|null $Speed
 */
class RouteIntermodalPedestrianOptions extends Shape
{
    /**
     * @param array{
     *     MaxDistance?: int<0, 6000>|null,
     *     Speed?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
