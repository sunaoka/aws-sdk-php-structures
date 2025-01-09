<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\SearchText\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<double> $Center
 * @property int $Radius
 */
class FilterCircle extends Shape
{
    /**
     * @param array{
     *     Center: list<double>,
     *     Radius: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
