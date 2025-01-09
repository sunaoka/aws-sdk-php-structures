<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<list<double>> $LineString
 * @property int $Radius
 */
class Corridor extends Shape
{
    /**
     * @param array{
     *     LineString: list<list<double>>,
     *     Radius: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
