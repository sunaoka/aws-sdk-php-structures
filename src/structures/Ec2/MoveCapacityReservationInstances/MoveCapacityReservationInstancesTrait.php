<?php

namespace Sunaoka\Aws\Structures\Ec2\MoveCapacityReservationInstances;

trait MoveCapacityReservationInstancesTrait
{
    /**
     * @param MoveCapacityReservationInstancesRequest $args
     * @return MoveCapacityReservationInstancesResponse
     */
    public function moveCapacityReservationInstances(MoveCapacityReservationInstancesRequest $args)
    {
        $result = parent::moveCapacityReservationInstances($args->toArray());
        return new MoveCapacityReservationInstancesResponse($result->toArray());
    }
}
