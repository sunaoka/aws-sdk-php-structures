<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateCapacityReservationFleet;

trait CreateCapacityReservationFleetTrait
{
    /**
     * @param CreateCapacityReservationFleetRequest $args
     * @return CreateCapacityReservationFleetResponse
     */
    public function createCapacityReservationFleet(CreateCapacityReservationFleetRequest $args)
    {
        $result = parent::createCapacityReservationFleet($args->toArray());
        return new CreateCapacityReservationFleetResponse($result->toArray());
    }
}
