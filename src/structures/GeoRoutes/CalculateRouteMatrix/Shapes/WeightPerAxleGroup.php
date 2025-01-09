<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRouteMatrix\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 4294967295> $Single
 * @property int<0, 4294967295> $Tandem
 * @property int<0, 4294967295> $Triple
 * @property int<0, 4294967295> $Quad
 * @property int<0, 4294967295> $Quint
 */
class WeightPerAxleGroup extends Shape
{
    /**
     * @param array{
     *     Single?: int<0, 4294967295>,
     *     Tandem?: int<0, 4294967295>,
     *     Triple?: int<0, 4294967295>,
     *     Quad?: int<0, 4294967295>,
     *     Quint?: int<0, 4294967295>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
