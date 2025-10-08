<?php

namespace Sunaoka\Aws\Structures\Ec2\DisassociateCapacityReservationBillingOwner;

trait DisassociateCapacityReservationBillingOwnerTrait
{
    /**
     * @param DisassociateCapacityReservationBillingOwnerRequest $args
     * @return DisassociateCapacityReservationBillingOwnerResponse
     */
    public function disassociateCapacityReservationBillingOwner(
        DisassociateCapacityReservationBillingOwnerRequest $args,
    ) {
        $result = parent::disassociateCapacityReservationBillingOwner($args->toArray());
        return new DisassociateCapacityReservationBillingOwnerResponse($result->toArray());
    }
}
