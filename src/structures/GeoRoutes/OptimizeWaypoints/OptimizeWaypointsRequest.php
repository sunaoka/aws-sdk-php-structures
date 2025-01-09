<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\OptimizeWaypoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\WaypointOptimizationAvoidanceOptions $Avoid
 * @property string $DepartureTime
 * @property list<double> $Destination
 * @property Shapes\WaypointOptimizationDestinationOptions $DestinationOptions
 * @property Shapes\WaypointOptimizationDriverOptions $Driver
 * @property Shapes\WaypointOptimizationExclusionOptions $Exclude
 * @property string $Key
 * @property 'FastestRoute'|'ShortestRoute' $OptimizeSequencingFor
 * @property list<double> $Origin
 * @property Shapes\WaypointOptimizationOriginOptions $OriginOptions
 * @property Shapes\WaypointOptimizationTrafficOptions $Traffic
 * @property 'Car'|'Pedestrian'|'Scooter'|'Truck' $TravelMode
 * @property Shapes\WaypointOptimizationTravelModeOptions $TravelModeOptions
 * @property list<Shapes\WaypointOptimizationWaypoint> $Waypoints
 */
class OptimizeWaypointsRequest extends Request
{
    /**
     * @param array{
     *     Avoid?: Shapes\WaypointOptimizationAvoidanceOptions,
     *     DepartureTime?: string,
     *     Destination?: list<double>,
     *     DestinationOptions?: Shapes\WaypointOptimizationDestinationOptions,
     *     Driver?: Shapes\WaypointOptimizationDriverOptions,
     *     Exclude?: Shapes\WaypointOptimizationExclusionOptions,
     *     Key?: string,
     *     OptimizeSequencingFor?: 'FastestRoute'|'ShortestRoute',
     *     Origin: list<double>,
     *     OriginOptions?: Shapes\WaypointOptimizationOriginOptions,
     *     Traffic?: Shapes\WaypointOptimizationTrafficOptions,
     *     TravelMode?: 'Car'|'Pedestrian'|'Scooter'|'Truck',
     *     TravelModeOptions?: Shapes\WaypointOptimizationTravelModeOptions,
     *     Waypoints?: list<Shapes\WaypointOptimizationWaypoint>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
