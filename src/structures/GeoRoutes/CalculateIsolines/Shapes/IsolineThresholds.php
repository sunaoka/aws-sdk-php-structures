<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateIsolines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<int<0, 300000>> $Distance
 * @property list<int<0, 10800>> $Time
 */
class IsolineThresholds extends Shape
{
    /**
     * @param array{
     *     Distance?: list<int<0, 300000>>,
     *     Time?: list<int<0, 10800>>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
