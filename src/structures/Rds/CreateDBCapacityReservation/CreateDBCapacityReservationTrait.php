<?php

namespace Sunaoka\Aws\Structures\Rds\CreateDBCapacityReservation;

trait CreateDBCapacityReservationTrait
{
    /**
     * @param CreateDBCapacityReservationRequest $args
     * @return CreateDBCapacityReservationResponse
     */
    public function createDBCapacityReservation(CreateDBCapacityReservationRequest $args)
    {
        $result = parent::createDBCapacityReservation($args->toArray());
        return new CreateDBCapacityReservationResponse($result->toArray());
    }
}
