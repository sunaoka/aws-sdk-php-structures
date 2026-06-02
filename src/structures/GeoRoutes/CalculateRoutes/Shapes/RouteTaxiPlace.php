<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RouteAccessPointDetails|null $AccessPointDetails
 * @property string|null $Name
 * @property list<double>|null $OriginalPosition
 * @property list<double> $Position
 * @property RouteStationDetails|null $StationDetails
 * @property 'AccessPoint'|'Station'|null $Type
 * @property int<0, max>|null $WaypointIndex
 */
class RouteTaxiPlace extends Shape
{
    /**
     * @param array{
     *     AccessPointDetails?: RouteAccessPointDetails|null,
     *     Name?: string|null,
     *     OriginalPosition?: list<double>|null,
     *     Position: list<double>,
     *     StationDetails?: RouteStationDetails|null,
     *     Type?: 'AccessPoint'|'Station'|null,
     *     WaypointIndex?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
