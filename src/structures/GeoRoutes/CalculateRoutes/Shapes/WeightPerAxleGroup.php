<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 4294967295>|null $Single
 * @property int<0, 4294967295>|null $Tandem
 * @property int<0, 4294967295>|null $Triple
 * @property int<0, 4294967295>|null $Quad
 * @property int<0, 4294967295>|null $Quint
 */
class WeightPerAxleGroup extends Shape
{
    /**
     * @param array{
     *     Single?: int<0, 4294967295>|null,
     *     Tandem?: int<0, 4294967295>|null,
     *     Triple?: int<0, 4294967295>|null,
     *     Quad?: int<0, 4294967295>|null,
     *     Quint?: int<0, 4294967295>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
