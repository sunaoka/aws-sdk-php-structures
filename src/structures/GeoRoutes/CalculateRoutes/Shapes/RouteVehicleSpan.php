<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 4294967295>|null $BestCaseDuration
 * @property list<'Allowed'|'NoThroughTraffic'|'TollRoad'>|null $CarAccess
 * @property string|null $Country
 * @property int<0, 4294967295>|null $Distance
 * @property int<0, 4294967295>|null $Duration
 * @property RouteSpanDynamicSpeedDetails|null $DynamicSpeed
 * @property int<1, 5>|null $FunctionalClassification
 * @property 'Emergency'|'KeyAccess'|'PermissionRequired'|null $Gate
 * @property int<0, max>|null $GeometryOffset
 * @property list<int>|null $Incidents
 * @property list<LocalizedString>|null $Names
 * @property list<int>|null $Notices
 * @property 'Protected'|'Unprotected'|null $RailwayCrossing
 * @property string|null $Region
 * @property list<'Bridge'|'BuiltUpArea'|'ControlledAccessHighway'|'DirtRoad'|'DividedRoad'|'Motorway'|'PrivateRoad'|'Ramp'|'RightHandTraffic'|'Roundabout'|'Tunnel'|'UnderConstruction'>|null $RoadAttributes
 * @property list<RouteNumber>|null $RouteNumbers
 * @property list<'Allowed'|'NoThroughTraffic'|'TollRoad'>|null $ScooterAccess
 * @property RouteSpanSpeedLimitDetails|null $SpeedLimit
 * @property list<int>|null $TollSystems
 * @property list<'Allowed'|'NoThroughTraffic'|'TollRoad'>|null $TruckAccess
 * @property list<int>|null $TruckRoadTypes
 * @property int<0, 4294967295>|null $TypicalDuration
 * @property list<int>|null $Zones
 */
class RouteVehicleSpan extends Shape
{
    /**
     * @param array{
     *     BestCaseDuration?: int<0, 4294967295>|null,
     *     CarAccess?: list<'Allowed'|'NoThroughTraffic'|'TollRoad'>|null,
     *     Country?: string|null,
     *     Distance?: int<0, 4294967295>|null,
     *     Duration?: int<0, 4294967295>|null,
     *     DynamicSpeed?: RouteSpanDynamicSpeedDetails|null,
     *     FunctionalClassification?: int<1, 5>|null,
     *     Gate?: 'Emergency'|'KeyAccess'|'PermissionRequired'|null,
     *     GeometryOffset?: int<0, max>|null,
     *     Incidents?: list<int>|null,
     *     Names?: list<LocalizedString>|null,
     *     Notices?: list<int>|null,
     *     RailwayCrossing?: 'Protected'|'Unprotected'|null,
     *     Region?: string|null,
     *     RoadAttributes?: list<'Bridge'|'BuiltUpArea'|'ControlledAccessHighway'|'DirtRoad'|'DividedRoad'|'Motorway'|'PrivateRoad'|'Ramp'|'RightHandTraffic'|'Roundabout'|'Tunnel'|'UnderConstruction'>|null,
     *     RouteNumbers?: list<RouteNumber>|null,
     *     ScooterAccess?: list<'Allowed'|'NoThroughTraffic'|'TollRoad'>|null,
     *     SpeedLimit?: RouteSpanSpeedLimitDetails|null,
     *     TollSystems?: list<int>|null,
     *     TruckAccess?: list<'Allowed'|'NoThroughTraffic'|'TollRoad'>|null,
     *     TruckRoadTypes?: list<int>|null,
     *     TypicalDuration?: int<0, 4294967295>|null,
     *     Zones?: list<int>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
