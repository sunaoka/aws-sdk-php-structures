<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<double> $OriginalPosition
 * @property list<double> $Position
 * @property int<0, max> $WaypointIndex
 */
class RoutePassThroughPlace extends Shape
{
    /**
     * @param array{
     *     OriginalPosition?: list<double>,
     *     Position: list<double>,
     *     WaypointIndex?: int<0, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
