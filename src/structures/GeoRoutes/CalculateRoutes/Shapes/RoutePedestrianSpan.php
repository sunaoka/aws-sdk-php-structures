<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 4294967295>|null $BestCaseDuration
 * @property string|null $Country
 * @property int<0, 4294967295>|null $Distance
 * @property int<0, 4294967295>|null $Duration
 * @property RouteSpanDynamicSpeedDetails|null $DynamicSpeed
 * @property int<1, 5>|null $FunctionalClassification
 * @property int<0, max>|null $GeometryOffset
 * @property list<int>|null $Incidents
 * @property list<LocalizedString>|null $Names
 * @property list<'Allowed'|'Indoors'|'NoThroughTraffic'|'Park'|'Stairs'|'TollRoad'>|null $PedestrianAccess
 * @property string|null $Region
 * @property list<'Bridge'|'BuiltUpArea'|'ControlledAccessHighway'|'DirtRoad'|'DividedRoad'|'Motorway'|'PrivateRoad'|'Ramp'|'RightHandTraffic'|'Roundabout'|'Tunnel'|'UnderConstruction'>|null $RoadAttributes
 * @property list<RouteNumber>|null $RouteNumbers
 * @property RouteSpanSpeedLimitDetails|null $SpeedLimit
 * @property int<0, 4294967295>|null $TypicalDuration
 */
class RoutePedestrianSpan extends Shape
{
    /**
     * @param array{
     *     BestCaseDuration?: int<0, 4294967295>|null,
     *     Country?: string|null,
     *     Distance?: int<0, 4294967295>|null,
     *     Duration?: int<0, 4294967295>|null,
     *     DynamicSpeed?: RouteSpanDynamicSpeedDetails|null,
     *     FunctionalClassification?: int<1, 5>|null,
     *     GeometryOffset?: int<0, max>|null,
     *     Incidents?: list<int>|null,
     *     Names?: list<LocalizedString>|null,
     *     PedestrianAccess?: list<'Allowed'|'Indoors'|'NoThroughTraffic'|'Park'|'Stairs'|'TollRoad'>|null,
     *     Region?: string|null,
     *     RoadAttributes?: list<'Bridge'|'BuiltUpArea'|'ControlledAccessHighway'|'DirtRoad'|'DividedRoad'|'Motorway'|'PrivateRoad'|'Ramp'|'RightHandTraffic'|'Roundabout'|'Tunnel'|'UnderConstruction'>|null,
     *     RouteNumbers?: list<RouteNumber>|null,
     *     SpeedLimit?: RouteSpanSpeedLimitDetails|null,
     *     TypicalDuration?: int<0, 4294967295>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
