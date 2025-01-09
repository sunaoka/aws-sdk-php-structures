<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateIsolines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max> $AxleCount
 * @property int<1, 255> $TrailerCount
 */
class IsolineTrailerOptions extends Shape
{
    /**
     * @param array{
     *     AxleCount?: int<1, max>,
     *     TrailerCount?: int<1, 255>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
