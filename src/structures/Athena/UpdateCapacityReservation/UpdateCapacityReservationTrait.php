<?php

namespace Sunaoka\Aws\Structures\Athena\UpdateCapacityReservation;

trait UpdateCapacityReservationTrait
{
    /**
     * @param UpdateCapacityReservationRequest $args
     * @return UpdateCapacityReservationResponse
     */
    public function updateCapacityReservation(UpdateCapacityReservationRequest $args)
    {
        $result = parent::updateCapacityReservation($args->toArray());
        return new UpdateCapacityReservationResponse($result->toArray());
    }
}
