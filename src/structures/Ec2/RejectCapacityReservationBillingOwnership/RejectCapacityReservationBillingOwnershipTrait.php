<?php

namespace Sunaoka\Aws\Structures\Ec2\RejectCapacityReservationBillingOwnership;

trait RejectCapacityReservationBillingOwnershipTrait
{
    /**
     * @param RejectCapacityReservationBillingOwnershipRequest $args
     * @return RejectCapacityReservationBillingOwnershipResponse
     */
    public function rejectCapacityReservationBillingOwnership(RejectCapacityReservationBillingOwnershipRequest $args)
    {
        $result = parent::rejectCapacityReservationBillingOwnership($args->toArray());
        return new RejectCapacityReservationBillingOwnershipResponse($result->toArray());
    }
}
