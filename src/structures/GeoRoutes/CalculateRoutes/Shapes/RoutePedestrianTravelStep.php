<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RouteContinueStepDetails|null $ContinueStepDetails
 * @property RouteRoad|null $CurrentRoad
 * @property int<0, 4294967295>|null $Distance
 * @property int<0, 4294967295> $Duration
 * @property list<LocalizedString>|null $ExitNumber
 * @property int<0, max>|null $GeometryOffset
 * @property string|null $Instruction
 * @property RouteKeepStepDetails|null $KeepStepDetails
 * @property RouteRoad|null $NextRoad
 * @property RouteRoundaboutEnterStepDetails|null $RoundaboutEnterStepDetails
 * @property RouteRoundaboutExitStepDetails|null $RoundaboutExitStepDetails
 * @property RouteRoundaboutPassStepDetails|null $RoundaboutPassStepDetails
 * @property RouteSignpost|null $Signpost
 * @property RouteTurnStepDetails|null $TurnStepDetails
 * @property 'Arrive'|'Continue'|'Depart'|'Keep'|'RoundaboutEnter'|'RoundaboutExit'|'RoundaboutPass'|'Turn'|'Exit'|'Ramp'|'UTurn' $Type
 */
class RoutePedestrianTravelStep extends Shape
{
    /**
     * @param array{
     *     ContinueStepDetails?: RouteContinueStepDetails|null,
     *     CurrentRoad?: RouteRoad|null,
     *     Distance?: int<0, 4294967295>|null,
     *     Duration: int<0, 4294967295>,
     *     ExitNumber?: list<LocalizedString>|null,
     *     GeometryOffset?: int<0, max>|null,
     *     Instruction?: string|null,
     *     KeepStepDetails?: RouteKeepStepDetails|null,
     *     NextRoad?: RouteRoad|null,
     *     RoundaboutEnterStepDetails?: RouteRoundaboutEnterStepDetails|null,
     *     RoundaboutExitStepDetails?: RouteRoundaboutExitStepDetails|null,
     *     RoundaboutPassStepDetails?: RouteRoundaboutPassStepDetails|null,
     *     Signpost?: RouteSignpost|null,
     *     TurnStepDetails?: RouteTurnStepDetails|null,
     *     Type: 'Arrive'|'Continue'|'Depart'|'Keep'|'RoundaboutEnter'|'RoundaboutExit'|'RoundaboutPass'|'Turn'|'Exit'|'Ramp'|'UTurn'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
