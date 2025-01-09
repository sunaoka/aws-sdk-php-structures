<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateIsolines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MaxPoints
 * @property int $MaxResolution
 */
class IsolineGranularityOptions extends Shape
{
    /**
     * @param array{
     *     MaxPoints?: int,
     *     MaxResolution?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
