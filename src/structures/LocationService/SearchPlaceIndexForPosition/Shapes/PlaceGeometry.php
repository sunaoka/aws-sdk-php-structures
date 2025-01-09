<?php

namespace Sunaoka\Aws\Structures\LocationService\SearchPlaceIndexForPosition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<double> $Point
 */
class PlaceGeometry extends Shape
{
    /**
     * @param array{Point?: list<double>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
