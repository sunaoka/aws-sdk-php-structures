<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBCapacityReservations;

trait DescribeDBCapacityReservationsTrait
{
    /**
     * @param DescribeDBCapacityReservationsRequest $args
     * @return DescribeDBCapacityReservationsResponse
     */
    public function describeDBCapacityReservations(DescribeDBCapacityReservationsRequest $args)
    {
        $result = parent::describeDBCapacityReservations($args->toArray());
        return new DescribeDBCapacityReservationsResponse($result->toArray());
    }
}
