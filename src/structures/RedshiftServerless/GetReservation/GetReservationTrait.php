<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\GetReservation;

trait GetReservationTrait
{
    /**
     * @param GetReservationRequest $args
     * @return GetReservationResponse
     */
    public function getReservation(GetReservationRequest $args)
    {
        $result = parent::getReservation($args->toArray());
        return new GetReservationResponse($result->toArray());
    }
}
