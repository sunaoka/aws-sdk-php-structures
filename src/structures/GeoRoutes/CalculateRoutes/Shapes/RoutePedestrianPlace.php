<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RouteAccessPointDetails|null $AccessPointDetails
 * @property string|null $Name
 * @property list<double>|null $OriginalPosition
 * @property list<double> $Position
 * @property 'Left'|'Right'|null $SideOfStreet
 * @property RouteStationDetails|null $StationDetails
 * @property 'AccessPoint'|'DockingStation'|'ParkingLot'|'Station'|null $Type
 * @property int<0, max>|null $WaypointIndex
 */
class RoutePedestrianPlace extends Shape
{
    /**
     * @param array{
     *     AccessPointDetails?: RouteAccessPointDetails|null,
     *     Name?: string|null,
     *     OriginalPosition?: list<double>|null,
     *     Position: list<double>,
     *     SideOfStreet?: 'Left'|'Right'|null,
     *     StationDetails?: RouteStationDetails|null,
     *     Type?: 'AccessPoint'|'DockingStation'|'ParkingLot'|'Station'|null,
     *     WaypointIndex?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
