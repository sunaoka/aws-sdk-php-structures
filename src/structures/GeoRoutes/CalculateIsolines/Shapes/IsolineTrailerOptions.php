<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateIsolines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max>|null $AxleCount
 * @property int<1, 255>|null $TrailerCount
 */
class IsolineTrailerOptions extends Shape
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
