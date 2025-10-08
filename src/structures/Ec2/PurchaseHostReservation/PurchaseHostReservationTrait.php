<?php

namespace Sunaoka\Aws\Structures\Ec2\PurchaseHostReservation;

trait PurchaseHostReservationTrait
{
    /**
     * @param PurchaseHostReservationRequest $args
     * @return PurchaseHostReservationResponse
     */
    public function purchaseHostReservation(PurchaseHostReservationRequest $args)
    {
        $result = parent::purchaseHostReservation($args->toArray());
        return new PurchaseHostReservationResponse($result->toArray());
    }
}
