<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeCapacityReservations;

trait DescribeCapacityReservationsTrait
{
    /**
     * @param DescribeCapacityReservationsRequest $args
     * @return DescribeCapacityReservationsResponse
     */
    public function describeCapacityReservations(DescribeCapacityReservationsRequest $args)
    {
        $result = parent::describeCapacityReservations($args->toArray());
        return new DescribeCapacityReservationsResponse($result->toArray());
    }
}
