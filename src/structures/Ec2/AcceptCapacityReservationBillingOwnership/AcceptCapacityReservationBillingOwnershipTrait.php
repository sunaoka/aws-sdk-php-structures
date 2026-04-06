<?php

namespace Sunaoka\Aws\Structures\Ec2\AcceptCapacityReservationBillingOwnership;

trait AcceptCapacityReservationBillingOwnershipTrait
{
    /**
     * @param AcceptCapacityReservationBillingOwnershipRequest $args
     * @return AcceptCapacityReservationBillingOwnershipResponse
     */
    public function acceptCapacityReservationBillingOwnership(AcceptCapacityReservationBillingOwnershipRequest $args)
    {
        $result = parent::acceptCapacityReservationBillingOwnership($args->toArray());
        return new AcceptCapacityReservationBillingOwnershipResponse($result->toArray());
    }
}
