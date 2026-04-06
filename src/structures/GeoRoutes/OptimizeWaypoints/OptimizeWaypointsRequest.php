<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\OptimizeWaypoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\WaypointOptimizationAvoidanceOptions|null $Avoid
 * @property string|null $DepartureTime
 * @property list<double>|null $Destination
 * @property Shapes\WaypointOptimizationDestinationOptions|null $DestinationOptions
 * @property Shapes\WaypointOptimizationDriverOptions|null $Driver
 * @property Shapes\WaypointOptimizationExclusionOptions|null $Exclude
 * @property string|null $Key
 * @property 'FastestRoute'|'ShortestRoute'|null $OptimizeSequencingFor
 * @property list<double> $Origin
 * @property Shapes\WaypointOptimizationOriginOptions|null $OriginOptions
 * @property Shapes\WaypointOptimizationTrafficOptions|null $Traffic
 * @property 'Car'|'Pedestrian'|'Scooter'|'Truck'|null $TravelMode
 * @property Shapes\WaypointOptimizationTravelModeOptions|null $TravelModeOptions
 * @property list<Shapes\WaypointOptimizationWaypoint>|null $Waypoints
 */
class OptimizeWaypointsRequest extends Request
{
    /**
     * @param array{
     *     Avoid?: Shapes\WaypointOptimizationAvoidanceOptions|null,
     *     DepartureTime?: string|null,
     *     Destination?: list<double>|null,
     *     DestinationOptions?: Shapes\WaypointOptimizationDestinationOptions|null,
     *     Driver?: Shapes\WaypointOptimizationDriverOptions|null,
     *     Exclude?: Shapes\WaypointOptimizationExclusionOptions|null,
     *     Key?: string|null,
     *     OptimizeSequencingFor?: 'FastestRoute'|'ShortestRoute'|null,
     *     Origin: list<double>,
     *     OriginOptions?: Shapes\WaypointOptimizationOriginOptions|null,
     *     Traffic?: Shapes\WaypointOptimizationTrafficOptions|null,
     *     TravelMode?: 'Car'|'Pedestrian'|'Scooter'|'Truck'|null,
     *     TravelModeOptions?: Shapes\WaypointOptimizationTravelModeOptions|null,
     *     Waypoints?: list<Shapes\WaypointOptimizationWaypoint>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
