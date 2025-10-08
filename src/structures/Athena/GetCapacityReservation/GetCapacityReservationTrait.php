<?php

namespace Sunaoka\Aws\Structures\Athena\GetCapacityReservation;

trait GetCapacityReservationTrait
{
    /**
     * @param GetCapacityReservationRequest $args
     * @return GetCapacityReservationResponse
     */
    public function getCapacityReservation(GetCapacityReservationRequest $args)
    {
        $result = parent::getCapacityReservation($args->toArray());
        return new GetCapacityReservationResponse($result->toArray());
    }
}
