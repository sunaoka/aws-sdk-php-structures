<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RouteContinueHighwayStepDetails|null $ContinueHighwayStepDetails
 * @property RouteContinueStepDetails|null $ContinueStepDetails
 * @property RouteRoad|null $CurrentRoad
 * @property int<0, 4294967295>|null $Distance
 * @property int<0, 4294967295> $Duration
 * @property RouteEnterHighwayStepDetails|null $EnterHighwayStepDetails
 * @property list<LocalizedString>|null $ExitNumber
 * @property RouteExitStepDetails|null $ExitStepDetails
 * @property int<0, max>|null $GeometryOffset
 * @property string|null $Instruction
 * @property RouteKeepStepDetails|null $KeepStepDetails
 * @property RouteRoad|null $NextRoad
 * @property RouteRampStepDetails|null $RampStepDetails
 * @property RouteRoundaboutEnterStepDetails|null $RoundaboutEnterStepDetails
 * @property RouteRoundaboutExitStepDetails|null $RoundaboutExitStepDetails
 * @property RouteRoundaboutPassStepDetails|null $RoundaboutPassStepDetails
 * @property RouteSignpost|null $Signpost
 * @property RouteTurnStepDetails|null $TurnStepDetails
 * @property 'Arrive'|'Continue'|'ContinueHighway'|'Depart'|'EnterHighway'|'Exit'|'Keep'|'Ramp'|'RoundaboutEnter'|'RoundaboutExit'|'RoundaboutPass'|'Turn'|'UTurn' $Type
 * @property RouteUTurnStepDetails|null $UTurnStepDetails
 */
class RouteVehicleTravelStep extends Shape
{
    /**
     * @param array{
     *     ContinueHighwayStepDetails?: RouteContinueHighwayStepDetails|null,
     *     ContinueStepDetails?: RouteContinueStepDetails|null,
     *     CurrentRoad?: RouteRoad|null,
     *     Distance?: int<0, 4294967295>|null,
     *     Duration: int<0, 4294967295>,
     *     EnterHighwayStepDetails?: RouteEnterHighwayStepDetails|null,
     *     ExitNumber?: list<LocalizedString>|null,
     *     ExitStepDetails?: RouteExitStepDetails|null,
     *     GeometryOffset?: int<0, max>|null,
     *     Instruction?: string|null,
     *     KeepStepDetails?: RouteKeepStepDetails|null,
     *     NextRoad?: RouteRoad|null,
     *     RampStepDetails?: RouteRampStepDetails|null,
     *     RoundaboutEnterStepDetails?: RouteRoundaboutEnterStepDetails|null,
     *     RoundaboutExitStepDetails?: RouteRoundaboutExitStepDetails|null,
     *     RoundaboutPassStepDetails?: RouteRoundaboutPassStepDetails|null,
     *     Signpost?: RouteSignpost|null,
     *     TurnStepDetails?: RouteTurnStepDetails|null,
     *     Type: 'Arrive'|'Continue'|'ContinueHighway'|'Depart'|'EnterHighway'|'Exit'|'Keep'|'Ramp'|'RoundaboutEnter'|'RoundaboutExit'|'RoundaboutPass'|'Turn'|'UTurn',
     *     UTurnStepDetails?: RouteUTurnStepDetails|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
