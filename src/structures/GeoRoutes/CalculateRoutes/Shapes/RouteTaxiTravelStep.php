<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RouteContinueStepDetails|null $ContinueStepDetails
 * @property int<0, 4294967295>|null $Distance
 * @property int<0, 4294967295> $Duration
 * @property RouteExitStepDetails|null $ExitStepDetails
 * @property int<0, max>|null $GeometryOffset
 * @property string|null $Instruction
 * @property RouteKeepStepDetails|null $KeepStepDetails
 * @property RouteRampStepDetails|null $RampStepDetails
 * @property RouteRoundaboutEnterStepDetails|null $RoundaboutEnterStepDetails
 * @property RouteRoundaboutExitStepDetails|null $RoundaboutExitStepDetails
 * @property RouteRoundaboutPassStepDetails|null $RoundaboutPassStepDetails
 * @property RouteTurnStepDetails|null $TurnStepDetails
 * @property 'Arrive'|'Continue'|'Depart'|'Exit'|'Keep'|'Ramp'|'RoundaboutEnter'|'RoundaboutExit'|'RoundaboutPass'|'Turn'|'UTurn' $Type
 * @property RouteUTurnStepDetails|null $UTurnStepDetails
 */
class RouteTaxiTravelStep extends Shape
{
    /**
     * @param array{
     *     ContinueStepDetails?: RouteContinueStepDetails|null,
     *     Distance?: int<0, 4294967295>|null,
     *     Duration: int<0, 4294967295>,
     *     ExitStepDetails?: RouteExitStepDetails|null,
     *     GeometryOffset?: int<0, max>|null,
     *     Instruction?: string|null,
     *     KeepStepDetails?: RouteKeepStepDetails|null,
     *     RampStepDetails?: RouteRampStepDetails|null,
     *     RoundaboutEnterStepDetails?: RouteRoundaboutEnterStepDetails|null,
     *     RoundaboutExitStepDetails?: RouteRoundaboutExitStepDetails|null,
     *     RoundaboutPassStepDetails?: RouteRoundaboutPassStepDetails|null,
     *     TurnStepDetails?: RouteTurnStepDetails|null,
     *     Type: 'Arrive'|'Continue'|'Depart'|'Exit'|'Keep'|'Ramp'|'RoundaboutEnter'|'RoundaboutExit'|'RoundaboutPass'|'Turn'|'UTurn',
     *     UTurnStepDetails?: RouteUTurnStepDetails|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
