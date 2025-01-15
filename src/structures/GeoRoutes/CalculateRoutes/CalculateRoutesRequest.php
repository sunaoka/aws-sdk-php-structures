<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\RouteAllowOptions|null $Allow
 * @property string|null $ArrivalTime
 * @property Shapes\RouteAvoidanceOptions|null $Avoid
 * @property bool|null $DepartNow
 * @property string|null $DepartureTime
 * @property list<double> $Destination
 * @property Shapes\RouteDestinationOptions|null $DestinationOptions
 * @property Shapes\RouteDriverOptions|null $Driver
 * @property Shapes\RouteExclusionOptions|null $Exclude
 * @property 'Metric'|'Imperial'|null $InstructionsMeasurementSystem
 * @property string|null $Key
 * @property list<string>|null $Languages
 * @property list<'Elevation'|'Incidents'|'PassThroughWaypoints'|'Summary'|'Tolls'|'TravelStepInstructions'|'TruckRoadTypes'|'TypicalDuration'|'Zones'>|null $LegAdditionalFeatures
 * @property 'FlexiblePolyline'|'Simple'|null $LegGeometryFormat
 * @property int<0, 5>|null $MaxAlternatives
 * @property 'FastestRoute'|'ShortestRoute'|null $OptimizeRoutingFor
 * @property list<double> $Origin
 * @property Shapes\RouteOriginOptions|null $OriginOptions
 * @property list<'BestCaseDuration'|'CarAccess'|'Country'|'Distance'|'Duration'|'DynamicSpeed'|'FunctionalClassification'|'Gates'|'Incidents'|'Names'|'Notices'|'PedestrianAccess'|'RailwayCrossings'|'Region'|'RoadAttributes'|'RouteNumbers'|'ScooterAccess'|'SpeedLimit'|'TollSystems'|'TruckAccess'|'TruckRoadTypes'|'TypicalDuration'|'Zones'|'Consumption'>|null $SpanAdditionalFeatures
 * @property Shapes\RouteTollOptions|null $Tolls
 * @property Shapes\RouteTrafficOptions|null $Traffic
 * @property 'Car'|'Pedestrian'|'Scooter'|'Truck'|null $TravelMode
 * @property Shapes\RouteTravelModeOptions|null $TravelModeOptions
 * @property 'Default'|'TurnByTurn'|null $TravelStepType
 * @property list<Shapes\RouteWaypoint>|null $Waypoints
 */
class CalculateRoutesRequest extends Request
{
    /**
     * @param array{
     *     Allow?: Shapes\RouteAllowOptions|null,
     *     ArrivalTime?: string|null,
     *     Avoid?: Shapes\RouteAvoidanceOptions|null,
     *     DepartNow?: bool|null,
     *     DepartureTime?: string|null,
     *     Destination: list<double>,
     *     DestinationOptions?: Shapes\RouteDestinationOptions|null,
     *     Driver?: Shapes\RouteDriverOptions|null,
     *     Exclude?: Shapes\RouteExclusionOptions|null,
     *     InstructionsMeasurementSystem?: 'Metric'|'Imperial'|null,
     *     Key?: string|null,
     *     Languages?: list<string>|null,
     *     LegAdditionalFeatures?: list<'Elevation'|'Incidents'|'PassThroughWaypoints'|'Summary'|'Tolls'|'TravelStepInstructions'|'TruckRoadTypes'|'TypicalDuration'|'Zones'>|null,
     *     LegGeometryFormat?: 'FlexiblePolyline'|'Simple'|null,
     *     MaxAlternatives?: int<0, 5>|null,
     *     OptimizeRoutingFor?: 'FastestRoute'|'ShortestRoute'|null,
     *     Origin: list<double>,
     *     OriginOptions?: Shapes\RouteOriginOptions|null,
     *     SpanAdditionalFeatures?: list<'BestCaseDuration'|'CarAccess'|'Country'|'Distance'|'Duration'|'DynamicSpeed'|'FunctionalClassification'|'Gates'|'Incidents'|'Names'|'Notices'|'PedestrianAccess'|'RailwayCrossings'|'Region'|'RoadAttributes'|'RouteNumbers'|'ScooterAccess'|'SpeedLimit'|'TollSystems'|'TruckAccess'|'TruckRoadTypes'|'TypicalDuration'|'Zones'|'Consumption'>|null,
     *     Tolls?: Shapes\RouteTollOptions|null,
     *     Traffic?: Shapes\RouteTrafficOptions|null,
     *     TravelMode?: 'Car'|'Pedestrian'|'Scooter'|'Truck'|null,
     *     TravelModeOptions?: Shapes\RouteTravelModeOptions|null,
     *     TravelStepType?: 'Default'|'TurnByTurn'|null,
     *     Waypoints?: list<Shapes\RouteWaypoint>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
