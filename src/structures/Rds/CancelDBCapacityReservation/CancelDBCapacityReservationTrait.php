<?php

namespace Sunaoka\Aws\Structures\Rds\CancelDBCapacityReservation;

trait CancelDBCapacityReservationTrait
{
    /**
     * @param CancelDBCapacityReservationRequest $args
     * @return CancelDBCapacityReservationResponse
     */
    public function cancelDBCapacityReservation(CancelDBCapacityReservationRequest $args)
    {
        $result = parent::cancelDBCapacityReservation($args->toArray());
        return new CancelDBCapacityReservationResponse($result->toArray());
    }
}
