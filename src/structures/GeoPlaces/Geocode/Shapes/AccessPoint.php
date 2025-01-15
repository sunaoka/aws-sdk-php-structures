<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\Geocode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<double>|null $Position
 */
class AccessPoint extends Shape
{
    /**
     * @param array{Position?: list<double>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
