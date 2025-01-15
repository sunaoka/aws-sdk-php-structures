<?php

namespace Sunaoka\Aws\Structures\LocationService\SearchPlaceIndexForText\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<double>|null $Point
 */
class PlaceGeometry extends Shape
{
    /**
     * @param array{Point?: list<double>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
