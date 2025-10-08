<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyCapacityReservation;

trait ModifyCapacityReservationTrait
{
    /**
     * @param ModifyCapacityReservationRequest $args
     * @return ModifyCapacityReservationResponse
     */
    public function modifyCapacityReservation(ModifyCapacityReservationRequest $args)
    {
        $result = parent::modifyCapacityReservation($args->toArray());
        return new ModifyCapacityReservationResponse($result->toArray());
    }
}
