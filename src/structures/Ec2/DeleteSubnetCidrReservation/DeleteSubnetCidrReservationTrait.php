<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteSubnetCidrReservation;

trait DeleteSubnetCidrReservationTrait
{
    /**
     * @param DeleteSubnetCidrReservationRequest $args
     * @return DeleteSubnetCidrReservationResponse
     */
    public function deleteSubnetCidrReservation(DeleteSubnetCidrReservationRequest $args)
    {
        $result = parent::deleteSubnetCidrReservation($args->toArray());
        return new DeleteSubnetCidrReservationResponse($result->toArray());
    }
}
