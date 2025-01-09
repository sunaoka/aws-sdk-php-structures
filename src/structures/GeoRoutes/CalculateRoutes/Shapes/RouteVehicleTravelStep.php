<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RouteContinueHighwayStepDetails $ContinueHighwayStepDetails
 * @property RouteContinueStepDetails $ContinueStepDetails
 * @property RouteRoad $CurrentRoad
 * @property int<0, 4294967295> $Distance
 * @property int<0, 4294967295> $Duration
 * @property RouteEnterHighwayStepDetails $EnterHighwayStepDetails
 * @property list<LocalizedString> $ExitNumber
 * @property RouteExitStepDetails $ExitStepDetails
 * @property int<0, max> $GeometryOffset
 * @property string $Instruction
 * @property RouteKeepStepDetails $KeepStepDetails
 * @property RouteRoad $NextRoad
 * @property RouteRampStepDetails $RampStepDetails
 * @property RouteRoundaboutEnterStepDetails $RoundaboutEnterStepDetails
 * @property RouteRoundaboutExitStepDetails $RoundaboutExitStepDetails
 * @property RouteRoundaboutPassStepDetails $RoundaboutPassStepDetails
 * @property RouteSignpost $Signpost
 * @property RouteTurnStepDetails $TurnStepDetails
 * @property 'Arrive'|'Continue'|'ContinueHighway'|'Depart'|'EnterHighway'|'Exit'|'Keep'|'Ramp'|'RoundaboutEnter'|'RoundaboutExit'|'RoundaboutPass'|'Turn'|'UTurn' $Type
 * @property RouteUTurnStepDetails $UTurnStepDetails
 */
class RouteVehicleTravelStep extends Shape
{
    /**
     * @param array{
     *     ContinueHighwayStepDetails?: RouteContinueHighwayStepDetails,
     *     ContinueStepDetails?: RouteContinueStepDetails,
     *     CurrentRoad?: RouteRoad,
     *     Distance?: int<0, 4294967295>,
     *     Duration: int<0, 4294967295>,
     *     EnterHighwayStepDetails?: RouteEnterHighwayStepDetails,
     *     ExitNumber?: list<LocalizedString>,
     *     ExitStepDetails?: RouteExitStepDetails,
     *     GeometryOffset?: int<0, max>,
     *     Instruction?: string,
     *     KeepStepDetails?: RouteKeepStepDetails,
     *     NextRoad?: RouteRoad,
     *     RampStepDetails?: RouteRampStepDetails,
     *     RoundaboutEnterStepDetails?: RouteRoundaboutEnterStepDetails,
     *     RoundaboutExitStepDetails?: RouteRoundaboutExitStepDetails,
     *     RoundaboutPassStepDetails?: RouteRoundaboutPassStepDetails,
     *     Signpost?: RouteSignpost,
     *     TurnStepDetails?: RouteTurnStepDetails,
     *     Type: 'Arrive'|'Continue'|'ContinueHighway'|'Depart'|'EnterHighway'|'Exit'|'Keep'|'Ramp'|'RoundaboutEnter'|'RoundaboutExit'|'RoundaboutPass'|'Turn'|'UTurn',
     *     UTurnStepDetails?: RouteUTurnStepDetails
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
