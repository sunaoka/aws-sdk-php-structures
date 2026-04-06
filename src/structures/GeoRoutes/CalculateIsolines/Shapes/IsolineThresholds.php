<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateIsolines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<int<0, 300000>>|null $Distance
 * @property list<int<0, 10800>>|null $Time
 */
class IsolineThresholds extends Shape
{
    /**
     * @param array{
     *     Distance?: list<int<0, 300000>>|null,
     *     Time?: list<int<0, 10800>>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
