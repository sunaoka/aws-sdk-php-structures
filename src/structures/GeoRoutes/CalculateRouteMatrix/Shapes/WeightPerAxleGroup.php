<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRouteMatrix\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Single
 * @property int $Tandem
 * @property int $Triple
 * @property int $Quad
 * @property int $Quint
 */
class WeightPerAxleGroup extends Shape
{
    /**
     * @param array{
     *     Single?: int,
     *     Tandem?: int,
     *     Triple?: int,
     *     Quad?: int,
     *     Quint?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
