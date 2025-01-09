<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RouteAvoidanceArea> $Areas
 * @property bool $CarShuttleTrains
 * @property bool $ControlledAccessHighways
 * @property bool $DirtRoads
 * @property bool $Ferries
 * @property bool $SeasonalClosure
 * @property bool $TollRoads
 * @property bool $TollTransponders
 * @property list<string> $TruckRoadTypes
 * @property bool $Tunnels
 * @property bool $UTurns
 * @property list<RouteAvoidanceZoneCategory> $ZoneCategories
 */
class RouteAvoidanceOptions extends Shape
{
    /**
     * @param array{
     *     Areas?: list<RouteAvoidanceArea>,
     *     CarShuttleTrains?: bool,
     *     ControlledAccessHighways?: bool,
     *     DirtRoads?: bool,
     *     Ferries?: bool,
     *     SeasonalClosure?: bool,
     *     TollRoads?: bool,
     *     TollTransponders?: bool,
     *     TruckRoadTypes?: list<string>,
     *     Tunnels?: bool,
     *     UTurns?: bool,
     *     ZoneCategories?: list<RouteAvoidanceZoneCategory>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
