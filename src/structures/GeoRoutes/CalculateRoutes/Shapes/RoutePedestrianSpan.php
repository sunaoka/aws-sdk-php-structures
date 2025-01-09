<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $BestCaseDuration
 * @property string $Country
 * @property int $Distance
 * @property int $Duration
 * @property RouteSpanDynamicSpeedDetails $DynamicSpeed
 * @property int $FunctionalClassification
 * @property int $GeometryOffset
 * @property list<int> $Incidents
 * @property list<LocalizedString> $Names
 * @property list<'Allowed'|'Indoors'|'NoThroughTraffic'|'Park'|'Stairs'|'TollRoad'> $PedestrianAccess
 * @property string $Region
 * @property list<'Bridge'|'BuiltUpArea'|'ControlledAccessHighway'|'DirtRoad'|'DividedRoad'|'Motorway'|'PrivateRoad'|'Ramp'|'RightHandTraffic'|'Roundabout'|'Tunnel'|'UnderConstruction'> $RoadAttributes
 * @property list<RouteNumber> $RouteNumbers
 * @property RouteSpanSpeedLimitDetails $SpeedLimit
 * @property int $TypicalDuration
 */
class RoutePedestrianSpan extends Shape
{
    /**
     * @param array{
     *     BestCaseDuration?: int,
     *     Country?: string,
     *     Distance?: int,
     *     Duration?: int,
     *     DynamicSpeed?: RouteSpanDynamicSpeedDetails,
     *     FunctionalClassification?: int,
     *     GeometryOffset?: int,
     *     Incidents?: list<int>,
     *     Names?: list<LocalizedString>,
     *     PedestrianAccess?: list<'Allowed'|'Indoors'|'NoThroughTraffic'|'Park'|'Stairs'|'TollRoad'>,
     *     Region?: string,
     *     RoadAttributes?: list<'Bridge'|'BuiltUpArea'|'ControlledAccessHighway'|'DirtRoad'|'DividedRoad'|'Motorway'|'PrivateRoad'|'Ramp'|'RightHandTraffic'|'Roundabout'|'Tunnel'|'UnderConstruction'>,
     *     RouteNumbers?: list<RouteNumber>,
     *     SpeedLimit?: RouteSpanSpeedLimitDetails,
     *     TypicalDuration?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
