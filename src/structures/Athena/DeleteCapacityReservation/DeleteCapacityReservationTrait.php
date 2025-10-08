<?php

namespace Sunaoka\Aws\Structures\Athena\DeleteCapacityReservation;

trait DeleteCapacityReservationTrait
{
    /**
     * @param DeleteCapacityReservationRequest $args
     * @return DeleteCapacityReservationResponse
     */
    public function deleteCapacityReservation(DeleteCapacityReservationRequest $args)
    {
        $result = parent::deleteCapacityReservation($args->toArray());
        return new DeleteCapacityReservationResponse($result->toArray());
    }
}
