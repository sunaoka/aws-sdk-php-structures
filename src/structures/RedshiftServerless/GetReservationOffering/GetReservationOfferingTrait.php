<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\GetReservationOffering;

trait GetReservationOfferingTrait
{
    /**
     * @param GetReservationOfferingRequest $args
     * @return GetReservationOfferingResponse
     */
    public function getReservationOffering(GetReservationOfferingRequest $args)
    {
        $result = parent::getReservationOffering($args->toArray());
        return new GetReservationOfferingResponse($result->toArray());
    }
}
