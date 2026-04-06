<?php

namespace Sunaoka\Aws\Structures\Ec2\AssociateCapacityReservationBillingOwner;

trait AssociateCapacityReservationBillingOwnerTrait
{
    /**
     * @param AssociateCapacityReservationBillingOwnerRequest $args
     * @return AssociateCapacityReservationBillingOwnerResponse
     */
    public function associateCapacityReservationBillingOwner(AssociateCapacityReservationBillingOwnerRequest $args)
    {
        $result = parent::associateCapacityReservationBillingOwner($args->toArray());
        return new AssociateCapacityReservationBillingOwnerResponse($result->toArray());
    }
}
