<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property list<double>|null $OriginalPosition
 * @property list<double> $Position
 * @property int<0, max>|null $WaypointIndex
 */
class RouteFerryPlace extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     OriginalPosition?: list<double>|null,
     *     Position: list<double>,
     *     WaypointIndex?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
