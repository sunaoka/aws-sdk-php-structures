<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<double> $OriginalPosition
 * @property list<double> $Position
 * @property int<0, max> $WaypointIndex
 */
class RouteFerryPlace extends Shape
{
    /**
     * @param array{
     *     Name?: string,
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
