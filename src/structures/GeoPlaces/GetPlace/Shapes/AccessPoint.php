<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\GetPlace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<double> $Position
 */
class AccessPoint extends Shape
{
    /**
     * @param array{Position?: list<double>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
