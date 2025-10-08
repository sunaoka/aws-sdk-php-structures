<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateReservation;

trait UpdateReservationTrait
{
    /**
     * @param UpdateReservationRequest $args
     * @return UpdateReservationResponse
     */
    public function updateReservation(UpdateReservationRequest $args)
    {
        $result = parent::updateReservation($args->toArray());
        return new UpdateReservationResponse($result->toArray());
    }
}
