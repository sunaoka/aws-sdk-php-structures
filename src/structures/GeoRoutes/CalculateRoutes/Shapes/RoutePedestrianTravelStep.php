<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RouteContinueStepDetails $ContinueStepDetails
 * @property RouteRoad $CurrentRoad
 * @property int $Distance
 * @property int $Duration
 * @property list<LocalizedString> $ExitNumber
 * @property int $GeometryOffset
 * @property string $Instruction
 * @property RouteKeepStepDetails $KeepStepDetails
 * @property RouteRoad $NextRoad
 * @property RouteRoundaboutEnterStepDetails $RoundaboutEnterStepDetails
 * @property RouteRoundaboutExitStepDetails $RoundaboutExitStepDetails
 * @property RouteRoundaboutPassStepDetails $RoundaboutPassStepDetails
 * @property RouteSignpost $Signpost
 * @property RouteTurnStepDetails $TurnStepDetails
 * @property 'Arrive'|'Continue'|'Depart'|'Keep'|'RoundaboutEnter'|'RoundaboutExit'|'RoundaboutPass'|'Turn'|'Exit'|'Ramp'|'UTurn' $Type
 */
class RoutePedestrianTravelStep extends Shape
{
    /**
     * @param array{
     *     ContinueStepDetails?: RouteContinueStepDetails,
     *     CurrentRoad?: RouteRoad,
     *     Distance?: int,
     *     Duration: int,
     *     ExitNumber?: list<LocalizedString>,
     *     GeometryOffset?: int,
     *     Instruction?: string,
     *     KeepStepDetails?: RouteKeepStepDetails,
     *     NextRoad?: RouteRoad,
     *     RoundaboutEnterStepDetails?: RouteRoundaboutEnterStepDetails,
     *     RoundaboutExitStepDetails?: RouteRoundaboutExitStepDetails,
     *     RoundaboutPassStepDetails?: RouteRoundaboutPassStepDetails,
     *     Signpost?: RouteSignpost,
     *     TurnStepDetails?: RouteTurnStepDetails,
     *     Type: 'Arrive'|'Continue'|'Depart'|'Keep'|'RoundaboutEnter'|'RoundaboutExit'|'RoundaboutPass'|'Turn'|'Exit'|'Ramp'|'UTurn'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
