<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateSubnetCidrReservation;

trait CreateSubnetCidrReservationTrait
{
    /**
     * @param CreateSubnetCidrReservationRequest $args
     * @return CreateSubnetCidrReservationResponse
     */
    public function createSubnetCidrReservation(CreateSubnetCidrReservationRequest $args)
    {
        $result = parent::createSubnetCidrReservation($args->toArray());
        return new CreateSubnetCidrReservationResponse($result->toArray());
    }
}
