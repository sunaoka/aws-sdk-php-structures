<?php

namespace Sunaoka\Aws\Structures\Ec2\GetGroupsForCapacityReservation;

trait GetGroupsForCapacityReservationTrait
{
    /**
     * @param GetGroupsForCapacityReservationRequest $args
     * @return GetGroupsForCapacityReservationResponse
     */
    public function getGroupsForCapacityReservation(GetGroupsForCapacityReservationRequest $args)
    {
        $result = parent::getGroupsForCapacityReservation($args->toArray());
        return new GetGroupsForCapacityReservationResponse($result->toArray());
    }
}
