<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 4294967295> $BestCaseDuration
 * @property list<'Allowed'|'NoThroughTraffic'|'TollRoad'> $CarAccess
 * @property string $Country
 * @property int<0, 4294967295> $Distance
 * @property int<0, 4294967295> $Duration
 * @property RouteSpanDynamicSpeedDetails $DynamicSpeed
 * @property int<1, 5> $FunctionalClassification
 * @property 'Emergency'|'KeyAccess'|'PermissionRequired' $Gate
 * @property int<0, max> $GeometryOffset
 * @property list<int> $Incidents
 * @property list<LocalizedString> $Names
 * @property list<int> $Notices
 * @property 'Protected'|'Unprotected' $RailwayCrossing
 * @property string $Region
 * @property list<'Bridge'|'BuiltUpArea'|'ControlledAccessHighway'|'DirtRoad'|'DividedRoad'|'Motorway'|'PrivateRoad'|'Ramp'|'RightHandTraffic'|'Roundabout'|'Tunnel'|'UnderConstruction'> $RoadAttributes
 * @property list<RouteNumber> $RouteNumbers
 * @property list<'Allowed'|'NoThroughTraffic'|'TollRoad'> $ScooterAccess
 * @property RouteSpanSpeedLimitDetails $SpeedLimit
 * @property list<int> $TollSystems
 * @property list<'Allowed'|'NoThroughTraffic'|'TollRoad'> $TruckAccess
 * @property list<int> $TruckRoadTypes
 * @property int<0, 4294967295> $TypicalDuration
 * @property list<int> $Zones
 */
class RouteVehicleSpan extends Shape
{
    /**
     * @param array{
     *     BestCaseDuration?: int<0, 4294967295>,
     *     CarAccess?: list<'Allowed'|'NoThroughTraffic'|'TollRoad'>,
     *     Country?: string,
     *     Distance?: int<0, 4294967295>,
     *     Duration?: int<0, 4294967295>,
     *     DynamicSpeed?: RouteSpanDynamicSpeedDetails,
     *     FunctionalClassification?: int<1, 5>,
     *     Gate?: 'Emergency'|'KeyAccess'|'PermissionRequired',
     *     GeometryOffset?: int<0, max>,
     *     Incidents?: list<int>,
     *     Names?: list<LocalizedString>,
     *     Notices?: list<int>,
     *     RailwayCrossing?: 'Protected'|'Unprotected',
     *     Region?: string,
     *     RoadAttributes?: list<'Bridge'|'BuiltUpArea'|'ControlledAccessHighway'|'DirtRoad'|'DividedRoad'|'Motorway'|'PrivateRoad'|'Ramp'|'RightHandTraffic'|'Roundabout'|'Tunnel'|'UnderConstruction'>,
     *     RouteNumbers?: list<RouteNumber>,
     *     ScooterAccess?: list<'Allowed'|'NoThroughTraffic'|'TollRoad'>,
     *     SpeedLimit?: RouteSpanSpeedLimitDetails,
     *     TollSystems?: list<int>,
     *     TruckAccess?: list<'Allowed'|'NoThroughTraffic'|'TollRoad'>,
     *     TruckRoadTypes?: list<int>,
     *     TypicalDuration?: int<0, 4294967295>,
     *     Zones?: list<int>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
