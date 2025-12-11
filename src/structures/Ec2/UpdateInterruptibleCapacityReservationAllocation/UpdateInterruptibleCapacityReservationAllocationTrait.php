<?php

namespace Sunaoka\Aws\Structures\Ec2\UpdateInterruptibleCapacityReservationAllocation;

trait UpdateInterruptibleCapacityReservationAllocationTrait
{
    /**
     * @param UpdateInterruptibleCapacityReservationAllocationRequest $args
     * @return UpdateInterruptibleCapacityReservationAllocationResponse
     */
    public function updateInterruptibleCapacityReservationAllocation(UpdateInterruptibleCapacityReservationAllocationRequest $args)
    {
        $result = parent::updateInterruptibleCapacityReservationAllocation($args->toArray());
        return new UpdateInterruptibleCapacityReservationAllocationResponse($result->toArray());
    }
}
