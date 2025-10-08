<?php

namespace Sunaoka\Aws\Structures\Athena\CreateCapacityReservation;

trait CreateCapacityReservationTrait
{
    /**
     * @param CreateCapacityReservationRequest $args
     * @return CreateCapacityReservationResponse
     */
    public function createCapacityReservation(CreateCapacityReservationRequest $args)
    {
        $result = parent::createCapacityReservation($args->toArray());
        return new CreateCapacityReservationResponse($result->toArray());
    }
}
