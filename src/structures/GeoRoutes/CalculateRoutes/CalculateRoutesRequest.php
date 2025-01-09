<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\RouteAllowOptions $Allow
 * @property string $ArrivalTime
 * @property Shapes\RouteAvoidanceOptions $Avoid
 * @property bool $DepartNow
 * @property string $DepartureTime
 * @property list<double> $Destination
 * @property Shapes\RouteDestinationOptions $DestinationOptions
 * @property Shapes\RouteDriverOptions $Driver
 * @property Shapes\RouteExclusionOptions $Exclude
 * @property 'Metric'|'Imperial' $InstructionsMeasurementSystem
 * @property string $Key
 * @property list<string> $Languages
 * @property list<'Elevation'|'Incidents'|'PassThroughWaypoints'|'Summary'|'Tolls'|'TravelStepInstructions'|'TruckRoadTypes'|'TypicalDuration'|'Zones'> $LegAdditionalFeatures
 * @property 'FlexiblePolyline'|'Simple' $LegGeometryFormat
 * @property int $MaxAlternatives
 * @property 'FastestRoute'|'ShortestRoute' $OptimizeRoutingFor
 * @property list<double> $Origin
 * @property Shapes\RouteOriginOptions $OriginOptions
 * @property list<'BestCaseDuration'|'CarAccess'|'Country'|'Distance'|'Duration'|'DynamicSpeed'|'FunctionalClassification'|'Gates'|'Incidents'|'Names'|'Notices'|'PedestrianAccess'|'RailwayCrossings'|'Region'|'RoadAttributes'|'RouteNumbers'|'ScooterAccess'|'SpeedLimit'|'TollSystems'|'TruckAccess'|'TruckRoadTypes'|'TypicalDuration'|'Zones'|'Consumption'> $SpanAdditionalFeatures
 * @property Shapes\RouteTollOptions $Tolls
 * @property Shapes\RouteTrafficOptions $Traffic
 * @property 'Car'|'Pedestrian'|'Scooter'|'Truck' $TravelMode
 * @property Shapes\RouteTravelModeOptions $TravelModeOptions
 * @property 'Default'|'TurnByTurn' $TravelStepType
 * @property list<Shapes\RouteWaypoint> $Waypoints
 */
class CalculateRoutesRequest extends Request
{
    /**
     * @param array{
     *     Allow?: Shapes\RouteAllowOptions,
     *     ArrivalTime?: string,
     *     Avoid?: Shapes\RouteAvoidanceOptions,
     *     DepartNow?: bool,
     *     DepartureTime?: string,
     *     Destination: list<double>,
     *     DestinationOptions?: Shapes\RouteDestinationOptions,
     *     Driver?: Shapes\RouteDriverOptions,
     *     Exclude?: Shapes\RouteExclusionOptions,
     *     InstructionsMeasurementSystem?: 'Metric'|'Imperial',
     *     Key?: string,
     *     Languages?: list<string>,
     *     LegAdditionalFeatures?: list<'Elevation'|'Incidents'|'PassThroughWaypoints'|'Summary'|'Tolls'|'TravelStepInstructions'|'TruckRoadTypes'|'TypicalDuration'|'Zones'>,
     *     LegGeometryFormat?: 'FlexiblePolyline'|'Simple',
     *     MaxAlternatives?: int,
     *     OptimizeRoutingFor?: 'FastestRoute'|'ShortestRoute',
     *     Origin: list<double>,
     *     OriginOptions?: Shapes\RouteOriginOptions,
     *     SpanAdditionalFeatures?: list<'BestCaseDuration'|'CarAccess'|'Country'|'Distance'|'Duration'|'DynamicSpeed'|'FunctionalClassification'|'Gates'|'Incidents'|'Names'|'Notices'|'PedestrianAccess'|'RailwayCrossings'|'Region'|'RoadAttributes'|'RouteNumbers'|'ScooterAccess'|'SpeedLimit'|'TollSystems'|'TruckAccess'|'TruckRoadTypes'|'TypicalDuration'|'Zones'|'Consumption'>,
     *     Tolls?: Shapes\RouteTollOptions,
     *     Traffic?: Shapes\RouteTrafficOptions,
     *     TravelMode?: 'Car'|'Pedestrian'|'Scooter'|'Truck',
     *     TravelModeOptions?: Shapes\RouteTravelModeOptions,
     *     TravelStepType?: 'Default'|'TurnByTurn',
     *     Waypoints?: list<Shapes\RouteWaypoint>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
