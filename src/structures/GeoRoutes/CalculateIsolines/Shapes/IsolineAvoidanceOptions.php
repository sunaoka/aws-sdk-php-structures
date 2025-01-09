<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateIsolines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<IsolineAvoidanceArea> $Areas
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
 * @property list<IsolineAvoidanceZoneCategory> $ZoneCategories
 */
class IsolineAvoidanceOptions extends Shape
{
    /**
     * @param array{
     *     Areas?: list<IsolineAvoidanceArea>,
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
     *     ZoneCategories?: list<IsolineAvoidanceZoneCategory>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
