<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<double> $OriginalPosition
 * @property list<double> $Position
 * @property 'Left'|'Right' $SideOfStreet
 * @property int<0, max> $WaypointIndex
 */
class RoutePedestrianPlace extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     OriginalPosition?: list<double>,
     *     Position: list<double>,
     *     SideOfStreet?: 'Left'|'Right',
     *     WaypointIndex?: int<0, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
