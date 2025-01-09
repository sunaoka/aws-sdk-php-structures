<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $BestCaseDuration
 * @property list<'Allowed'|'NoThroughTraffic'|'TollRoad'> $CarAccess
 * @property string $Country
 * @property int $Distance
 * @property int $Duration
 * @property RouteSpanDynamicSpeedDetails $DynamicSpeed
 * @property int $FunctionalClassification
 * @property 'Emergency'|'KeyAccess'|'PermissionRequired' $Gate
 * @property int $GeometryOffset
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
 * @property int $TypicalDuration
 * @property list<int> $Zones
 */
class RouteVehicleSpan extends Shape
{
    /**
     * @param array{
     *     BestCaseDuration?: int,
     *     CarAccess?: list<'Allowed'|'NoThroughTraffic'|'TollRoad'>,
     *     Country?: string,
     *     Distance?: int,
     *     Duration?: int,
     *     DynamicSpeed?: RouteSpanDynamicSpeedDetails,
     *     FunctionalClassification?: int,
     *     Gate?: 'Emergency'|'KeyAccess'|'PermissionRequired',
     *     GeometryOffset?: int,
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
     *     TypicalDuration?: int,
     *     Zones?: list<int>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
