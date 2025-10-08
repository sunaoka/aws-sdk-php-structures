<?php

namespace Sunaoka\Aws\Structures\Ec2\CancelCapacityReservation;

trait CancelCapacityReservationTrait
{
    /**
     * @param CancelCapacityReservationRequest $args
     * @return CancelCapacityReservationResponse
     */
    public function cancelCapacityReservation(CancelCapacityReservationRequest $args)
    {
        $result = parent::cancelCapacityReservation($args->toArray());
        return new CancelCapacityReservationResponse($result->toArray());
    }
}
