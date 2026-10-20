<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyDBCapacityReservation;

trait ModifyDBCapacityReservationTrait
{
    /**
     * @param ModifyDBCapacityReservationRequest $args
     * @return ModifyDBCapacityReservationResponse
     */
    public function modifyDBCapacityReservation(ModifyDBCapacityReservationRequest $args)
    {
        $result = parent::modifyDBCapacityReservation($args->toArray());
        return new ModifyDBCapacityReservationResponse($result->toArray());
    }
}
