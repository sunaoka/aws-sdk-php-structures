<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\OptimizeWaypoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<double> $Position
 * @property 'AnyStreet'|'DividedStreetOnly' $UseWith
 */
class WaypointOptimizationSideOfStreetOptions extends Shape
{
    /**
     * @param array{
     *     Position: list<double>,
     *     UseWith?: 'AnyStreet'|'DividedStreetOnly'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
