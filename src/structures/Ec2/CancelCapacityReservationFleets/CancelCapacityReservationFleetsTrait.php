<?php

namespace Sunaoka\Aws\Structures\Ec2\CancelCapacityReservationFleets;

trait CancelCapacityReservationFleetsTrait
{
    /**
     * @param CancelCapacityReservationFleetsRequest $args
     * @return CancelCapacityReservationFleetsResponse
     */
    public function cancelCapacityReservationFleets(CancelCapacityReservationFleetsRequest $args)
    {
        $result = parent::cancelCapacityReservationFleets($args->toArray());
        return new CancelCapacityReservationFleetsResponse($result->toArray());
    }
}
