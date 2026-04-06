<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\OptimizeWaypoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<WaypointOptimizationAvoidanceArea>|null $Areas
 * @property bool|null $CarShuttleTrains
 * @property bool|null $ControlledAccessHighways
 * @property bool|null $DirtRoads
 * @property bool|null $Ferries
 * @property bool|null $TollRoads
 * @property bool|null $Tunnels
 * @property bool|null $UTurns
 */
class WaypointOptimizationAvoidanceOptions extends Shape
{
    /**
     * @param array{
     *     Areas?: list<WaypointOptimizationAvoidanceArea>|null,
     *     CarShuttleTrains?: bool|null,
     *     ControlledAccessHighways?: bool|null,
     *     DirtRoads?: bool|null,
     *     Ferries?: bool|null,
     *     TollRoads?: bool|null,
     *     Tunnels?: bool|null,
     *     UTurns?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
