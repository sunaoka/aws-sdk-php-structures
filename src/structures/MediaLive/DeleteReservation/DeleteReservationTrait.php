<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteReservation;

trait DeleteReservationTrait
{
    /**
     * @param DeleteReservationRequest $args
     * @return DeleteReservationResponse
     */
    public function deleteReservation(DeleteReservationRequest $args)
    {
        $result = parent::deleteReservation($args->toArray());
        return new DeleteReservationResponse($result->toArray());
    }
}
