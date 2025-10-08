<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateCapacityReservationBySplitting;

trait CreateCapacityReservationBySplittingTrait
{
    /**
     * @param CreateCapacityReservationBySplittingRequest $args
     * @return CreateCapacityReservationBySplittingResponse
     */
    public function createCapacityReservationBySplitting(CreateCapacityReservationBySplittingRequest $args)
    {
        $result = parent::createCapacityReservationBySplitting($args->toArray());
        return new CreateCapacityReservationBySplittingResponse($result->toArray());
    }
}
