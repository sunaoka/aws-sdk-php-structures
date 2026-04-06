<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\Suggest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<double> $Center
 * @property int<1, 21000000> $Radius
 */
class FilterCircle extends Shape
{
    /**
     * @param array{
     *     Center: list<double>,
     *     Radius: int<1, 21000000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
