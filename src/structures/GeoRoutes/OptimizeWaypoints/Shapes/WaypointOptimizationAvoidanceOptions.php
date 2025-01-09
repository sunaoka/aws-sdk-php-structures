<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\OptimizeWaypoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<WaypointOptimizationAvoidanceArea> $Areas
 * @property bool $CarShuttleTrains
 * @property bool $ControlledAccessHighways
 * @property bool $DirtRoads
 * @property bool $Ferries
 * @property bool $TollRoads
 * @property bool $Tunnels
 * @property bool $UTurns
 */
class WaypointOptimizationAvoidanceOptions extends Shape
{
    /**
     * @param array{
     *     Areas?: list<WaypointOptimizationAvoidanceArea>,
     *     CarShuttleTrains?: bool,
     *     ControlledAccessHighways?: bool,
     *     DirtRoads?: bool,
     *     Ferries?: bool,
     *     TollRoads?: bool,
     *     Tunnels?: bool,
     *     UTurns?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
