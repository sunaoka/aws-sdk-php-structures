<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateInterruptibleCapacityReservationAllocation;

trait CreateInterruptibleCapacityReservationAllocationTrait
{
    /**
     * @param CreateInterruptibleCapacityReservationAllocationRequest $args
     * @return CreateInterruptibleCapacityReservationAllocationResponse
     */
    public function createInterruptibleCapacityReservationAllocation(CreateInterruptibleCapacityReservationAllocationRequest $args)
    {
        $result = parent::createInterruptibleCapacityReservationAllocation($args->toArray());
        return new CreateInterruptibleCapacityReservationAllocationResponse($result->toArray());
    }
}
