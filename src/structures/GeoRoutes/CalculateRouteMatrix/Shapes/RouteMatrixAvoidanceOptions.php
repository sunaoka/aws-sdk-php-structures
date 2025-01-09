<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRouteMatrix\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RouteMatrixAvoidanceArea> $Areas
 * @property bool $CarShuttleTrains
 * @property bool $ControlledAccessHighways
 * @property bool $DirtRoads
 * @property bool $Ferries
 * @property bool $TollRoads
 * @property bool $TollTransponders
 * @property list<string> $TruckRoadTypes
 * @property bool $Tunnels
 * @property bool $UTurns
 * @property list<RouteMatrixAvoidanceZoneCategory> $ZoneCategories
 */
class RouteMatrixAvoidanceOptions extends Shape
{
    /**
     * @param array{
     *     Areas?: list<RouteMatrixAvoidanceArea>,
     *     CarShuttleTrains?: bool,
     *     ControlledAccessHighways?: bool,
     *     DirtRoads?: bool,
     *     Ferries?: bool,
     *     TollRoads?: bool,
     *     TollTransponders?: bool,
     *     TruckRoadTypes?: list<string>,
     *     Tunnels?: bool,
     *     UTurns?: bool,
     *     ZoneCategories?: list<RouteMatrixAvoidanceZoneCategory>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
