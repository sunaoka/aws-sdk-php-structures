<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyCapacityReservationFleet;

trait ModifyCapacityReservationFleetTrait
{
    /**
     * @param ModifyCapacityReservationFleetRequest $args
     * @return ModifyCapacityReservationFleetResponse
     */
    public function modifyCapacityReservationFleet(ModifyCapacityReservationFleetRequest $args)
    {
        $result = parent::modifyCapacityReservationFleet($args->toArray());
        return new ModifyCapacityReservationFleetResponse($result->toArray());
    }
}
