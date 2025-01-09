<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateIsolines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<31, max> $MaxPoints
 * @property int<0, 4294967295> $MaxResolution
 */
class IsolineGranularityOptions extends Shape
{
    /**
     * @param array{
     *     MaxPoints?: int<31, max>,
     *     MaxResolution?: int<0, 4294967295>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
