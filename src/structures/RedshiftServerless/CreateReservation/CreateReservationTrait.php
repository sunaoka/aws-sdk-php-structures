<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\CreateReservation;

trait CreateReservationTrait
{
    /**
     * @param CreateReservationRequest $args
     * @return CreateReservationResponse
     */
    public function createReservation(CreateReservationRequest $args)
    {
        $result = parent::createReservation($args->toArray());
        return new CreateReservationResponse($result->toArray());
    }
}
