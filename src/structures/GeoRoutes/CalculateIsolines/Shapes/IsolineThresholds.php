<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateIsolines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<int> $Distance
 * @property list<int> $Time
 */
class IsolineThresholds extends Shape
{
    /**
     * @param array{
     *     Distance?: list<int>,
     *     Time?: list<int>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
