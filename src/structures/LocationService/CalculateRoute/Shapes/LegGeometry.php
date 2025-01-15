<?php

namespace Sunaoka\Aws\Structures\LocationService\CalculateRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<list<double>>|null $LineString
 */
class LegGeometry extends Shape
{
    /**
     * @param array{LineString?: list<list<double>>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
