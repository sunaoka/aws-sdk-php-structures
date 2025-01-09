<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 4294967295> $BestCaseDuration
 * @property string $Country
 * @property int<0, 4294967295> $Distance
 * @property int<0, 4294967295> $Duration
 * @property RouteSpanDynamicSpeedDetails $DynamicSpeed
 * @property int<1, 5> $FunctionalClassification
 * @property int<0, max> $GeometryOffset
 * @property list<int> $Incidents
 * @property list<LocalizedString> $Names
 * @property list<'Allowed'|'Indoors'|'NoThroughTraffic'|'Park'|'Stairs'|'TollRoad'> $PedestrianAccess
 * @property string $Region
 * @property list<'Bridge'|'BuiltUpArea'|'ControlledAccessHighway'|'DirtRoad'|'DividedRoad'|'Motorway'|'PrivateRoad'|'Ramp'|'RightHandTraffic'|'Roundabout'|'Tunnel'|'UnderConstruction'> $RoadAttributes
 * @property list<RouteNumber> $RouteNumbers
 * @property RouteSpanSpeedLimitDetails $SpeedLimit
 * @property int<0, 4294967295> $TypicalDuration
 */
class RoutePedestrianSpan extends Shape
{
    /**
     * @param array{
     *     BestCaseDuration?: int<0, 4294967295>,
     *     Country?: string,
     *     Distance?: int<0, 4294967295>,
     *     Duration?: int<0, 4294967295>,
     *     DynamicSpeed?: RouteSpanDynamicSpeedDetails,
     *     FunctionalClassification?: int<1, 5>,
     *     GeometryOffset?: int<0, max>,
     *     Incidents?: list<int>,
     *     Names?: list<LocalizedString>,
     *     PedestrianAccess?: list<'Allowed'|'Indoors'|'NoThroughTraffic'|'Park'|'Stairs'|'TollRoad'>,
     *     Region?: string,
     *     RoadAttributes?: list<'Bridge'|'BuiltUpArea'|'ControlledAccessHighway'|'DirtRoad'|'DividedRoad'|'Motorway'|'PrivateRoad'|'Ramp'|'RightHandTraffic'|'Roundabout'|'Tunnel'|'UnderConstruction'>,
     *     RouteNumbers?: list<RouteNumber>,
     *     SpeedLimit?: RouteSpanSpeedLimitDetails,
     *     TypicalDuration?: int<0, 4294967295>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
