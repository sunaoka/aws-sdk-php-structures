<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateIsolines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Polyline
 * @property int $Radius
 */
class PolylineCorridor extends Shape
{
    /**
     * @param array{
     *     Polyline: string,
     *     Radius: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
