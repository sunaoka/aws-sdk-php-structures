<?php

namespace Sunaoka\Aws\Structures\Ec2\GetSubnetCidrReservations;

trait GetSubnetCidrReservationsTrait
{
    /**
     * @param GetSubnetCidrReservationsRequest $args
     * @return GetSubnetCidrReservationsResponse
     */
    public function getSubnetCidrReservations(GetSubnetCidrReservationsRequest $args)
    {
        $result = parent::getSubnetCidrReservations($args->toArray());
        return new GetSubnetCidrReservationsResponse($result->toArray());
    }
}
