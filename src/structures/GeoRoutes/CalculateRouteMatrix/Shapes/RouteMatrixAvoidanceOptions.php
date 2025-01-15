<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRouteMatrix\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RouteMatrixAvoidanceArea>|null $Areas
 * @property bool|null $CarShuttleTrains
 * @property bool|null $ControlledAccessHighways
 * @property bool|null $DirtRoads
 * @property bool|null $Ferries
 * @property bool|null $TollRoads
 * @property bool|null $TollTransponders
 * @property list<string>|null $TruckRoadTypes
 * @property bool|null $Tunnels
 * @property bool|null $UTurns
 * @property list<RouteMatrixAvoidanceZoneCategory>|null $ZoneCategories
 */
class RouteMatrixAvoidanceOptions extends Shape
{
    /**
     * @param array{
     *     Areas?: list<RouteMatrixAvoidanceArea>|null,
     *     CarShuttleTrains?: bool|null,
     *     ControlledAccessHighways?: bool|null,
     *     DirtRoads?: bool|null,
     *     Ferries?: bool|null,
     *     TollRoads?: bool|null,
     *     TollTransponders?: bool|null,
     *     TruckRoadTypes?: list<string>|null,
     *     Tunnels?: bool|null,
     *     UTurns?: bool|null,
     *     ZoneCategories?: list<RouteMatrixAvoidanceZoneCategory>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
