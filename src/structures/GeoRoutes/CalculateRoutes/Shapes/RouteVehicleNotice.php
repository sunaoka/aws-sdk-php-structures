<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AccuratePolylineUnavailable'|'Other'|'PotentialViolatedAvoidTollRoadUsage'|'PotentialViolatedCarpoolUsage'|'PotentialViolatedTurnRestrictionUsage'|'PotentialViolatedVehicleRestrictionUsage'|'PotentialViolatedZoneRestrictionUsage'|'SeasonalClosure'|'TollsDataTemporarilyUnavailable'|'TollsDataUnavailable'|'TollTransponder'|'ViolatedAvoidControlledAccessHighway'|'ViolatedAvoidDifficultTurns'|'ViolatedAvoidDirtRoad'|'ViolatedAvoidSeasonalClosure'|'ViolatedAvoidTollRoad'|'ViolatedAvoidTollTransponder'|'ViolatedAvoidTruckRoadType'|'ViolatedAvoidTunnel'|'ViolatedAvoidUTurns'|'ViolatedBlockedRoad'|'ViolatedCarpool'|'ViolatedEmergencyGate'|'ViolatedStartDirection'|'ViolatedTurnRestriction'|'ViolatedVehicleRestriction'|'ViolatedZoneRestriction' $Code
 * @property list<RouteVehicleNoticeDetail> $Details
 * @property 'High'|'Low'|null $Impact
 */
class RouteVehicleNotice extends Shape
{
    /**
     * @param array{
     *     Code: 'AccuratePolylineUnavailable'|'Other'|'PotentialViolatedAvoidTollRoadUsage'|'PotentialViolatedCarpoolUsage'|'PotentialViolatedTurnRestrictionUsage'|'PotentialViolatedVehicleRestrictionUsage'|'PotentialViolatedZoneRestrictionUsage'|'SeasonalClosure'|'TollsDataTemporarilyUnavailable'|'TollsDataUnavailable'|'TollTransponder'|'ViolatedAvoidControlledAccessHighway'|'ViolatedAvoidDifficultTurns'|'ViolatedAvoidDirtRoad'|'ViolatedAvoidSeasonalClosure'|'ViolatedAvoidTollRoad'|'ViolatedAvoidTollTransponder'|'ViolatedAvoidTruckRoadType'|'ViolatedAvoidTunnel'|'ViolatedAvoidUTurns'|'ViolatedBlockedRoad'|'ViolatedCarpool'|'ViolatedEmergencyGate'|'ViolatedStartDirection'|'ViolatedTurnRestriction'|'ViolatedVehicleRestriction'|'ViolatedZoneRestriction',
     *     Details: list<RouteVehicleNoticeDetail>,
     *     Impact?: 'High'|'Low'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
