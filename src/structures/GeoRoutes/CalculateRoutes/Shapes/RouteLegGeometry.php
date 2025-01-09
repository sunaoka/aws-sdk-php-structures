<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<list<double>> $LineString
 * @property string $Polyline
 */
class RouteLegGeometry extends Shape
{
    /**
     * @param array{
     *     LineString?: list<list<double>>,
     *     Polyline?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
